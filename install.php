<?php
/**
 * Lilac Installer Script
 */
require_once('includes/init.inc.php');


if(isset($_POST['reg'])) {
	// We are registering!
	$curl = curl_init('http://register.eyesofnetwork.com/');
	$request = array();
	$request['organizationName'] = $_POST['organizationName'];
	$request['organizationCountry'] = $_POST['organizationCountry'];
	$request['organizationSize'] = $_POST['organizationSize']; 
	$request['lilacUse'] = $_POST['lilacUse'];
	$request['lilacVersion'] = $_POST['lilacVersion'];
	$request['interestedEmail'] = $_POST['interestedEmail'];
	$request['interestedInServices'] = $_POST['interestedInServices'];
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, array('request' => json_encode($request)));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($curl);
	$response = json_decode($response, true);
	print json_encode(true);
	die();
}

// Check to see if we're being called from CLI mode, to check if we can run PHP scripts via cli
if(isset($argv) && sizeof($argv) > 0) {
	// We need to make sure we can do the things we need in CLI mode.
	$results = array();
	$results['mysql'] = extension_loaded("pdo_mysql");
	$results['json'] = function_exists("json_encode");
	$results['simplexml'] = function_exists("simplexml_load_file");
	$results['pcntl'] = function_exists("pcntl_fork");

	// memory limit check
	$memoryLimit = ini_get("memory_limit");	


	// Default to true
	$results['memorylimit'] = true;
	// It's in bytes, unless it's using some shorthand.
	if(preg_match("/^(\d+)([a-zA-Z])$/", $memoryLimit, $matches)) {
		// Using shorthand, convert to bytes
		if($matches[2] == 'm' || $matches[2] == 'M') {
			// Megabytes
			$memorySize = (1048576 * $matches[1]);
		}
		else if($matches[2] == 'K' || $matches[2] == 'k') {
			$memorySize = (1024 * $matches[1]);
		}
		else if($matches[2] == 'g' || $matches[2] == 'G') {
			$memorySize = (1073741824 * $matches[1]);
		}
		else {
			// Unknown shorthand
			$results['memorylimit'] = false;
		}
	}
	else if($memoryLimit != "-1") {
		$memorySize = $memoryLimit;
	}
	if($memoryLimit != "-1" && $memorySize < 67108864) {
		// Memory set is less than 64megs.  This probably won't do.
		$results['memorylimit'] = false;
	}
	$results['memorysize'] = $memoryLimit;
	if(function_exists("json_encode")) {
		print(json_encode($results));
	}
	else {
		print("fail");
	}
	die();
}

if(!isset($_POST['stage'])) {
	$stage = "1";
}
else {
	$stage = $_POST['stage'];
}


if($stage == 2) {
	$error = false;
	if(!isset($_POST['mysqlRootUsername'])) {
		$mysqlRootUsername = 'root';
		$mysqlRootPassword = '';
		$mysqlHostname = 'localhost';
		$mysqlUsername = '';
		$mysqlPassword = '';
		$mysqlDatabase = 'lilac';
		$mysqlPopulate = true;
		$mysqlCreateUserDatabase = false;
	}
	else {
		$mysqlRootUsername = trim($_POST['mysqlRootUsername']);
		$mysqlRootPassword = trim($_POST['mysqlRootPassword']);
		$mysqlHostname = trim($_POST['mysqlHostname']);
		$mysqlUsername = trim($_POST['mysqlUsername']);
		$mysqlPassword = trim($_POST['mysqlPassword']);
		$mysqlDatabase = trim($_POST['mysqlDatabase']);
		$mysqlPopulate = trim($_POST['mysqlPopulate']);
		if(isset($_POST['mysqlCreateUserDatabase'])) {
			$mysqlCreateUserDatabase = true;
		}
		else {
			$mysqlCreateUserDatabase = false;
		}
		// Check for required parameters
		if($mysqlCreateUserDatabase) {
			if(empty($mysqlRootUsername)) {
				$error = "MySQL Administrator username cannot be blank if you want to create user and database.";
			}
		}
		if(!$error) {
			if(empty($mysqlHostname)) {
				$error = "MySQL Hostname cannot be blank.";
			}
			else if(empty($mysqlUsername)) {
				$error = "MySQL Username cannot be blank.";
			}
			else if(empty($mysqlDatabase)) {
				$error = "MySQL Database cannot be blank.";
			}
		}
		if(!$error) {
			// Okay, breathe, we're going to do the grunt of the work now.
			// Check to see if we need to create the user and database
			if($mysqlCreateUserDatabase) {
				// Attempt to connect as admin
				$dbConn = @mysql_connect($mysqlHostname, $mysqlRootUsername, $mysqlRootPassword);
				if(!$dbConn) {
					$error = "Failed to connect to MySQL server with Administrator login.";
				}
				else {
					if(!mysql_select_db("mysql", $dbConn)) {
						$error = "Failed creating user and database.  Check your Admin credentials.  Error was: <em>" . mysql_error($dbConn) . "</em>";
					}
					else {
						// Create database
						if(!mysql_query("create database " . $mysqlDatabase, $dbConn)) {
							$error = "Failed to create database.  Error was: <em>" . mysql_error($dbConn) . "</em>";
						}
						else {
							// Okay, db is selected, let's grant privileges.
							//
							// NOTE TO SELF.  TICKET #10
							//
							// k
							if(in_array(strtolower($mysqlHostname), array('127.0.0.1', 'localhost'))) {
								// Assign rights to localhost
								if(!mysql_query("grant all privileges on " . $mysqlDatabase . ".* to '" . $mysqlUsername . "'@localhost identified by '" . $mysqlPassword . "'")) {
									$error = "Failed to create user.  Error was: <em>" . mysql_error($dbConn) . "</em>";
								}
							}
							else {
								// Assign rights via our hostname
								if(!mysql_query("grant all privileges on " . $mysqlDatabase . ".* to '" . $mysqlUsername . "'@'" . $_SERVER['SERVER_NAME'] . "' identified by '" . $mysqlPassword . "'")) {
									$error = "Failed to create user.  Error was: <em>" . mysql_error($dbConn) . "</em>";
								}
							}
							mysql_query("flush privileges");
						}
					}
				}
			}
			if(!$error && $mysqlPopulate) {
				// Okay, we need to populate the database.  Attempt to connect as our user.
				$dbConn = @mysql_connect($mysqlHostname, $mysqlUsername, $mysqlPassword);
				if(!$dbConn) {
					$error = "Failed to connect to MySQL server with " . $mysqlUsername . " user.";
				}
				else {
					// Select db.
					if(!mysql_select_db($mysqlDatabase, $dbConn)) {
						$error = "Failed to use " . $mysqlDatabase . " database.  Check your User credentials.  Error was: <em>" . mysql_error($dbConn) . "</em>";
					}
					else {
						// Load the data
						exec("mysql -h " . $mysqlHostname . " -u " . $mysqlUsername . " -p" . $mysqlPassword . " " . $mysqlDatabase . " < " . dirname(__FILE__) . "/sqldata/schema.sql", $output, $retVal);
						if($retVal != 0) {
							$error = "Failed to import database schema. Make sure the mysql binary is in the search path for the web user.";
						}
						else {
							// Import labels
							exec("mysql -h " . $mysqlHostname . " -u " . $mysqlUsername . " -p" . $mysqlPassword . " " . $mysqlDatabase . " < " . dirname(__FILE__) . "/sqldata/lilac-nagios-en-label.sql", $output, $retVal);
							if($retVal != 0) {
								$error = "Failed to import Nagios labels.  Error was: <br />" . str_replace("\n", "<br />", $output[count($output)]);
							}
							else {
								// Import Seed
								exec("mysql -h " . $mysqlHostname . " -u " . $mysqlUsername . " -p" . $mysqlPassword . " " . $mysqlDatabase . " < " . dirname(__FILE__) . "/sqldata/seed.sql", $output, $retVal);
								if($retVal != 0) {
									$error = "Failed to import seed data.  Error was: <br />" . str_replace("\n", "<br />", $output[count($output)]);
								}
							}
						}
					}
				}
			}
			// Create PDO connection to perform upgrades
			try {
				$dbConn = new PDO("mysql:host=" . $mysqlHostname . ";dbname=" . $mysqlDatabase, $mysqlUsername, $mysqlPassword);
			} catch(PDOException $e) {
				$error = "Failed to connect to MySQL server with " . $mysqlUsername . " user:" . $e->getMessage();
			}
			if(!$error) {
				if(!perform_upgrade($dbConn)) {
					$error = true;
				}
			}

			if(!$error) {
				// Okay, write to the configuration file!
				$conf = file_get_contents(dirname(__FILE__) . "/includes/lilac-conf.php.dist");
				$conf = str_replace("%%DSN%%", "mysql:host=" . $mysqlHostname . ";dbname=" . $mysqlDatabase, $conf);
				$conf = str_replace("%%USERNAME%%",$mysqlUsername, $conf);
				$conf = str_replace("%%PASSWORD%%",$mysqlPassword, $conf);
				$conf = str_replace("%%DATABASE%%",$mysqlDatabase, $conf);				
				// We have the new conf
				$ret = file_put_contents(dirname(__FILE__) . "/includes/lilac-conf.php", $conf);
				if($ret == false) {
					$error = "Failed to write to includes/lilac-conf.php.  Check that the web user can write to the includes directory and try again.";
				}
				$success = "Completed Database Setup.";
			}
		}
	}
}

if(file_exists(dirname(__FILE__) . "/NOTICE")) {
	// Notice exists, we should display it here.
	$noticeContents = file_get_contents(dirname(__FILE__) . "/NOTICE");
	$warning = $noticeContents;
}

print_header("Installer");

if($stage == 1) {
	$fatalErrors = false;
	// Dependency checking
	print_window_header("Dependency Checks");
	?>
	<div class="notice">
	<strong>Note:</strong> Lilac supports Nagios 3.x only.  It is possible to import Nagios 2.x configuration files, but Lilac will only export to Nagios 3.x.
	</div>
	<div class="checks">
	<?php
	if(false === ($fp = @fopen(dirname(__FILE__) . "/includes/lilac-conf.php", "w+"))) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	if($fp)
		fclose($fp);	
	?>	
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	Configuration File Writable
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		The Lilac installer requires that it write to the configuration file at <em><?php echo dirname(__FILE__) . "/includes/lilac-conf.php";?></em>. It is 
	   recommended that you change the permissions of the includes directory so the web user can write to it.</div>	
		<?php
	}
	if($fail) $fatalErrors = true;
	?>
	
	<?php
	// PHP VERSION CHECK
	if(version_compare(PHP_VERSION, '5.2.0', '<') || !class_exists("DateTime")) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP Version 5.2 or Better
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP Version 5.2 or greater is required for Lilac.  Download the latest at <a href="http://www.php.net">The PHP Group's Website</a> or 
		check with your operating system distribution. (Version 5.2 also provides the class DateTime, which is also required).
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>
	<?php
	$fail = get_magic_quotes_gpc();
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	Magic Quotes GPC Set to Disabled
	</div>
	<?php
	if($fail) {
		?>
			<div class="error">
			Magic Quotes GPC is set to enabled in your PHP configuration.  Lilac will not work with Magic Quotes GPC set to enabled.  Please disable it in your PHP configuration. Refer to <a href="http://www.php.net/manual/en/security.magicquotes.disabling.php">Disabling Magic Quotes</a> for more information.
			</div>
			<?php
	}
	if($fail) $fatalErrors = true;
	?>
	<?php
	// Pear Library Installed Check
	$fail = @include_once('PEAR.php');
	if($fail === false) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP Pear Library Installed
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP's PEAR library must be loaded.  Please refer to <a href="http://pear.php.net">PHP's PEAR Homepage</a> for more information.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>

	<?php
	// PDO MYSQL Extension Installed Check
	$fail = !extension_loaded("pdo_mysql");
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP PDO MySQL Extension Loaded
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP's PDO MySQL extension must be loaded.  This is not the same as the MySQLi extension.  Please refer to <a href="http://us3.php.net/manual/en/ref.pdo.html">PHP's PDO documentation</a> for more information.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>
	<?php
	// MySQL Executable Located
	exec("which mysql", $output, $retVal);
	if($retVal != 0) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	MySQL Client Executable
	</div>
	<?php
	if($fail) {
		?>
		<div class="notice">
		The Lilac installer needs the MySQL client binary to be installed and executable by the webserver if you need to populate the Lilac database.  Install the MySQL command line utility.
		</div>
		<?php
	}
	
	if($fail) $fatalErrors = true;
	?>
	<?php
	// Nmap Executable Located
	exec("which nmap", $output, $retVal);
	if($retVal != 0) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "warning"; else echo "success";?>">
	NMAP Executable
	</div>
	<?php
	if($fail) {
		?>
		<div class="notice">
		Not a fatal error, Lilac  needs the NMAP binary to be installed and executable by the webserver to perform auto-discovery tasks.  Install the NMAP command line utility. If you are not going to perform auto-discovery tasks, you can ignore this and continue.  If you choose to do auto-discovery tasks in the future, you must have NMAP installed.
		</div>
		<?php
	}	
	?>		
	<?php
	// Curl extension
	$fail = !function_exists("curl_init");
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP Curl Support
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP's Curl support is not available.  Curl is required for for Lilac to call internal webservices..  For more information, refer to <a href="http://www.php.net/manual/en/curl.setup.php">PHP'S Curl Extension setup guide</a> for more information on how to install it.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>

	<?php
	// SimpleXML extension
	$fail = !function_exists("simplexml_load_file");
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP SimpleXML Support
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP's SimpleXML support is not available.  SimpleXML is required for parsing XML documents and is used by Lilac's Autodiscovery system.  For more information, refer to <a href="http://www.php.net/manual/en/simplexml.setup.php">PHP'S SimpleXML Extension setup guide</a> for more information on how to install it.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>
	<?php
	// PHP POSIX Functions Installed Check
	$fail = !function_exists("posix_getpid");
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP POSIX Support
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP's POSIX support is not available.  POSIX support is required for the importer/exporter/autodiscovery to function.  For instructions, refer to <a href="http://us3.php.net/manual/en/posix.setup.php">PHP's POSIX Extension setup guide</a> for more information on how to install it.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>

	<?php
	// PHP JSON Functions Installed Check
	$fail = !function_exists("json_encode");
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP JSON Support
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		PHP's JSON support is not available.  JSON support is automatically provided in PHP 5.2.0.  For previous versions of PHP, refer to <a href="http://us3.php.net/manual/en/json.setup.php">PHP's JSON Extension setup guide</a> for more information on how to install it.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>
	<?php
	// Able to call PHP via command line
	$cliOutput = array();
	$retVal = '';
	$result = exec("php " . dirname(__FILE__) . "/install.php", $cliOutput, $retVal);
	$fail = $retVal != 0;
	
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
	PHP Command Line Interface (CLI) Available
	</div>
	<?php
	if($fail) {
		?>
		<div class="error">
		Lilac must be able to run command line PHP script to import and export configurations.  Please make sure PHP's command line interface 
		is installed and the PHP binary is in the search path for the web user.  Refer to <a href="http://www.php.net">The PHP Group's Homepage</a> for more information.
		</div>
		<?php
	}
	if($fail) $fatalErrors = true;
	?>		
	<div class="checks">
		<?php
		// CLI JSON Support
		$clisupport = @json_decode($cliOutput[0], true);
		
		if($clisupport === false) {
			$fail = true;
		}
		else {
			$fail = false;
		}			
		?>
		<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		CLI JSON Support
		</div>
		<?php
		if($fail) {
			?>
			<div class="error">
			JSON Support must be provided to PHP's command line interface.  This is automatically provided in PHP 5.2.0 and above.  For previous versions of PHP, refer to <a href="http://us3.php.net/manual/en/json.setup.php">PHP's JSON Extension setup guide</a> for more information on how to install it.
			</div>
			<?php
		}
		if($fail) $fatalErrors = true;
		?>

		<?php
		// Memory Limit Check
		$fail = !$clisupport['memorylimit'];
		?>
		<div class="<?php if($fail) echo "warning"; else echo "success";?>">
		PHP Memory Limit For Scripts: <?php echo $clisupport['memorysize']; ?> 
		</div>
		<?php
		if($fail) {
			?>
			<div>
			Not Really an Errror, but a note, PHP's Memory Limit for the command line scripts must be set to either -1 (Unlimited) or to a reasonable amount according to the size of your configuration.  Suggested amount is 64M.  Refer to <a href="http://www.php.net/manual/en/ini.core.php#ini.memory-limit">php.ini directives</a> for more information on how to change this value.
			</div>
			<?php
		}
		?>	
		<?php
		// CLI PCNTL Support
		$fail = !$clisupport['pcntl'];
		?>
		<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		CLI Process Control Support
		</div>
		<?php
		if($fail) {
			?>
			<div class="error">
			PHP must have Process control compiled in in order to properly import/export and auto-discover.  For more information on how to install process control for PHP, refer to <a href="http://www.php.net/manual/en/pcntl.setup.php">PHP's PCNTL Installation documentation</a>.
			</div>
			<?php
		}
		if($fail) $fatalErrors = true;
		?>	

		<?php
		// CLI MySQL Support
		$fail = !$clisupport['mysql'];
		?>
		<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		CLI PDO MySQL Support
		</div>
		<?php
		if($fail) {
			?>
			<div class="error">
			MySQL Support must be provided to PHP's command line interface.  This is not the same as the MySQLi extension.  Please refer to <a href="http://us3.php.net/manual/en/ref.pdo.html">PHP's PDO documentation</a> for more information.
			</div>
			<?php
		}
		if($fail) $fatalErrors = true;
		?>	

		<?php
		// SimpleXML extension
		$fail = !function_exists("simplexml_load_file");
		?>
		<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		PHP SimpleXML Support
		</div>
		<?php
		if($fail) {
			?>
			<div class="error">
			PHP's SimpleXML support is not available for PHP's command line interface.  SimpleXML is required for parsing XML documents and is used by Lilac's Autodiscovery system.  For more information, refer to <a href="http://www.php.net/manual/en/simplexml.setup.php">PHP'S SimpleXML Extension setup guide</a> for more information on how to install it.
			</div>
			<?php
		}
		if($fail) $fatalErrors = true;
		?>
		</div>


	</div>	
	<?php
	if($fatalErrors) {
		?>
		<div class="error">
		You must resolve the issues above before continuing the installation.  <a href="install.php">Refresh The Page</a> to perform the checks again.
		</div>
		<?php
	}
	else {
		?>
		<form action="install.php" method="post">
		<input type="hidden" name="stage" value="2" />
		<input class="submit" type="submit" value="Continue To Database Configuration..." />
		</form>
		<?php
	}
	print_window_footer();
	
	?>
	<?php
}
else if($stage == 2 && empty($success)) {
	print_window_header("MySQL Database Setup");
	?>
	<script type="text/javascript">
			$(document).ready(function() {
			<?php
			if($mysqlCreateUserDatabase) {
				?>
				$("#createdb").attr("checked", true);
				$("#mysqladminform").css("display", "block");
				<?php
			}
			else {
				?>
				$("#createdb").attr("checked", false);
				<?php
			}
			?>
			// do stuff when DOM is ready
				$("#createdb").click(function(){
					if(this.checked) {
						$("#mysqladminform").show('fast');
					}
					else {
						$("#mysqladminform").hide('fast');
					}
					
				});
			});
	</script>
	
	Lilac needs credentials to connect to your MySQL server.  The user should have all privileges on the Lilac database (except for grant).  If 
	you do not know how to create a MySQL user and database, you can provide your MySQL root credentials to create the user and database.
	<form action="install.php" method="post">
		<input type="hidden" name="stage" value="2" />
		<p>
		<input type="checkbox" name="mysqlCreateUserDatabase" id="createdb"><label for="createdb">Create Database And User For Me</label>
		</p>
	<fieldset id="mysqladminform" style="display: none;">
		<legend>MySQL Administrator Credentials</legend>
		<p>
			<label for="mysqlRootUsername">Admin Username:</label> <input type="text" id="mysqlRootUsername" name="mysqlRootUsername" value="<?php echo $mysqlRootUsername;?>" />
		</p>
		<p>
			<label for="mysqlRootPassword">Admin Password:</label> <input type="password" id="mysqlRootPassword" name="mysqlRootPassword" value="<?php echo $mysqlRootPassword;?>" />
		</p>
	</fieldset>
	<fieldset id="mysqlform">
		<legend>MySQL Connection Information</legend>
		<p>
			<label for="mysqlHostname">Host: </label><input type="text" id="mysqlHostname" name="mysqlHostname" value="<?php echo$mysqlHostname;?>" />
		</p>
		<p>
			<label for="mysqlUsername">Username: </label><input type="text" id="mysqlUsername" name="mysqlUsername" value="<?php echo $mysqlUsername;?>" />
		</p>
		<p>
			<label for="mysqlPassword">Password: </label><input type="password" id="mysqlPassword" name="mysqlPassword" value="<?php echo $mysqlPassword;?>" />
		</p>
		<p>
			<label for="mysqlDatabase">Database: </label><input type="text" id="mysqlDatabase" name="mysqlDatabase" value="<?php echo $mysqlDatabase;?>" />
		</p>
	</fieldset>
		<p>
		<input type="checkbox" <?php if($mysqlPopulate) echo "checked=\"checked\"" ;?> name="mysqlPopulate" id="populatedb"><label for="populatedb">Populate Database With Sample Data (Uncheck if you want to keep existing data or upgrading) <strong>Warning:</strong> This will remove any existing data!  You should back-up any existing data.</label>
		</p>
	<input class="submit"  type="submit" value="Continue" />
	<?php
	print_window_footer();
}
else if($stage == 2 && $success) {
	// OMGZ!
	print_window_header("Installation Complete");
	?>
		Congratulations!
		<p>
		Your lilac installation is now complete.  You should remove the <em>install.php</em> script as it is no longer needed.  You can also remove the write privileges to the <em>includes</em> directory.
		</p>
		<fieldset class="regform" id="regform">
		<legend>Want to help us improve Lilac?</legend>
		<p>
		We're very interested in knowing who is using Lilac and how they're using the tool.  Fill out the completely optional form below to help us improve Lilac's future releases. Or you can choose to <a href="index.php">Launch Lilac Now</a>.
		</p>
		<p>
		<label for="organizationName">Organization's Name: </label><input type="text" id="organizationName" name="organizationName" />
		</p>
		<p>
		<label for="organizationCountry">Country Your Organization Is In: </label><select name="organizationCountry" id="organizationCountry" style="width:150px;">
		<option value="United States" selected="selected">United States</option> 
		<option value="Canada">Canada</option> 
		<option value="United Kingdom" >United Kingdom</option>
		<option value="Ireland" >Ireland</option>
		<option value="Australia" >Australia</option>
		<option value="New Zealand" >New Zealand</option>
		<option value="Afghanistan">Afghanistan</option> 
		<option value="Albania">Albania</option> 
		<option value="Algeria">Algeria</option> 
		<option value="American Samoa">American Samoa</option> 
		<option value="Andorra">Andorra</option> 
		<option value="Angola">Angola</option> 
		<option value="Anguilla">Anguilla</option> 
		<option value="Antarctica">Antarctica</option> 
		<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
		<option value="Argentina">Argentina</option> 
		<option value="Armenia">Armenia</option> 
		<option value="Aruba">Aruba</option> 
		<option value="Australia">Australia</option> 
		<option value="Austria">Austria</option> 
		<option value="Azerbaijan">Azerbaijan</option> 
		<option value="Bahamas">Bahamas</option> 
		<option value="Bahrain">Bahrain</option> 
		<option value="Bangladesh">Bangladesh</option> 
		<option value="Barbados">Barbados</option> 
		<option value="Belarus">Belarus</option> 
		<option value="Belgium">Belgium</option> 
		<option value="Belize">Belize</option> 
		<option value="Benin">Benin</option> 
		<option value="Bermuda">Bermuda</option> 
		<option value="Bhutan">Bhutan</option> 
		<option value="Bolivia">Bolivia</option> 
		<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
		<option value="Botswana">Botswana</option> 
		<option value="Bouvet Island">Bouvet Island</option> 
		<option value="Brazil">Brazil</option> 
		<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
		<option value="Brunei Darussalam">Brunei Darussalam</option> 
		<option value="Bulgaria">Bulgaria</option> 
		<option value="Burkina Faso">Burkina Faso</option> 
		<option value="Burundi">Burundi</option> 
		<option value="Cambodia">Cambodia</option> 
		<option value="Cameroon">Cameroon</option> 
		<option value="Canada">Canada</option> 
		<option value="Cape Verde">Cape Verde</option> 
		<option value="Cayman Islands">Cayman Islands</option> 
		<option value="Central African Republic">Central African Republic</option> 
		<option value="Chad">Chad</option> 
		<option value="Chile">Chile</option> 
		<option value="China">China</option> 
		<option value="Christmas Island">Christmas Island</option> 
		<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
		<option value="Colombia">Colombia</option> 
		<option value="Comoros">Comoros</option> 
		<option value="Congo">Congo</option> 
		<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
		<option value="Cook Islands">Cook Islands</option> 
		<option value="Costa Rica">Costa Rica</option> 
		<option value="Cote D'ivoire">Cote D'ivoire</option> 
		<option value="Croatia">Croatia</option> 
		<option value="Cuba">Cuba</option> 
		<option value="Cyprus">Cyprus</option> 
		<option value="Czech Republic">Czech Republic</option> 
		<option value="Denmark">Denmark</option> 
		<option value="Djibouti">Djibouti</option> 
		<option value="Dominica">Dominica</option> 
		<option value="Dominican Republic">Dominican Republic</option> 
		<option value="Ecuador">Ecuador</option> 
		<option value="Egypt">Egypt</option> 
		<option value="El Salvador">El Salvador</option> 
		<option value="Equatorial Guinea">Equatorial Guinea</option> 
		<option value="Eritrea">Eritrea</option> 
		<option value="Estonia">Estonia</option> 
		<option value="Ethiopia">Ethiopia</option> 
		<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
		<option value="Faroe Islands">Faroe Islands</option> 
		<option value="Fiji">Fiji</option> 
		<option value="Finland">Finland</option> 
		<option value="France">France</option> 
		<option value="French Guiana">French Guiana</option> 
		<option value="French Polynesia">French Polynesia</option> 
		<option value="French Southern Territories">French Southern Territories</option> 
		<option value="Gabon">Gabon</option> 
		<option value="Gambia">Gambia</option> 
		<option value="Georgia">Georgia</option> 
		<option value="Germany">Germany</option> 
		<option value="Ghana">Ghana</option> 
		<option value="Gibraltar">Gibraltar</option> 
		<option value="Greece">Greece</option> 
		<option value="Greenland">Greenland</option> 
		<option value="Grenada">Grenada</option> 
		<option value="Guadeloupe">Guadeloupe</option> 
		<option value="Guam">Guam</option> 
		<option value="Guatemala">Guatemala</option> 
		<option value="Guinea">Guinea</option> 
		<option value="Guinea-bissau">Guinea-bissau</option> 
		<option value="Guyana">Guyana</option> 
		<option value="Haiti">Haiti</option> 
		<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
		<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
		<option value="Honduras">Honduras</option> 
		<option value="Hong Kong">Hong Kong</option> 
		<option value="Hungary">Hungary</option> 
		<option value="Iceland">Iceland</option> 
		<option value="India">India</option> 
		<option value="Indonesia">Indonesia</option> 
		<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
		<option value="Iraq">Iraq</option> 
		<option value="Ireland">Ireland</option> 
		<option value="Israel">Israel</option> 
		<option value="Italy">Italy</option> 
		<option value="Jamaica">Jamaica</option> 
		<option value="Japan">Japan</option> 
		<option value="Jordan">Jordan</option> 
		<option value="Kazakhstan">Kazakhstan</option> 
		<option value="Kenya">Kenya</option> 
		<option value="Kiribati">Kiribati</option> 
		<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
		<option value="Korea, Republic of">Korea, Republic of</option> 
		<option value="Kuwait">Kuwait</option> 
		<option value="Kyrgyzstan">Kyrgyzstan</option> 
		<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
		<option value="Latvia">Latvia</option> 
		<option value="Lebanon">Lebanon</option> 
		<option value="Lesotho">Lesotho</option> 
		<option value="Liberia">Liberia</option> 
		<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
		<option value="Liechtenstein">Liechtenstein</option> 
		<option value="Lithuania">Lithuania</option> 
		<option value="Luxembourg">Luxembourg</option> 
		<option value="Macao">Macao</option> 
		<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
		<option value="Madagascar">Madagascar</option> 
		<option value="Malawi">Malawi</option> 
		<option value="Malaysia">Malaysia</option> 
		<option value="Maldives">Maldives</option> 
		<option value="Mali">Mali</option> 
		<option value="Malta">Malta</option> 
		<option value="Marshall Islands">Marshall Islands</option> 
		<option value="Martinique">Martinique</option> 
		<option value="Mauritania">Mauritania</option> 
		<option value="Mauritius">Mauritius</option> 
		<option value="Mayotte">Mayotte</option> 
		<option value="Mexico">Mexico</option> 
		<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
		<option value="Moldova, Republic of">Moldova, Republic of</option> 
		<option value="Monaco">Monaco</option> 
		<option value="Mongolia">Mongolia</option> 
		<option value="Montserrat">Montserrat</option> 
		<option value="Morocco">Morocco</option> 
		<option value="Mozambique">Mozambique</option> 
		<option value="Myanmar">Myanmar</option> 
		<option value="Namibia">Namibia</option> 
		<option value="Nauru">Nauru</option> 
		<option value="Nepal">Nepal</option> 
		<option value="Netherlands">Netherlands</option> 
		<option value="Netherlands Antilles">Netherlands Antilles</option> 
		<option value="New Caledonia">New Caledonia</option> 
		<option value="New Zealand">New Zealand</option> 
		<option value="Nicaragua">Nicaragua</option> 
		<option value="Niger">Niger</option> 
		<option value="Nigeria">Nigeria</option> 
		<option value="Niue">Niue</option> 
		<option value="Norfolk Island">Norfolk Island</option> 
		<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
		<option value="Norway">Norway</option> 
		<option value="Oman">Oman</option> 
		<option value="Pakistan">Pakistan</option> 
		<option value="Palau">Palau</option> 
		<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
		<option value="Panama">Panama</option> 
		<option value="Papua New Guinea">Papua New Guinea</option> 
		<option value="Paraguay">Paraguay</option> 
		<option value="Peru">Peru</option> 
		<option value="Philippines">Philippines</option> 
		<option value="Pitcairn">Pitcairn</option> 
		<option value="Poland">Poland</option> 
		<option value="Portugal">Portugal</option> 
		<option value="Puerto Rico">Puerto Rico</option> 
		<option value="Qatar">Qatar</option> 
		<option value="Reunion">Reunion</option> 
		<option value="Romania">Romania</option> 
		<option value="Russian Federation">Russian Federation</option> 
		<option value="Rwanda">Rwanda</option> 
		<option value="Saint Helena">Saint Helena</option> 
		<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
		<option value="Saint Lucia">Saint Lucia</option> 
		<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
		<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
		<option value="Samoa">Samoa</option> 
		<option value="San Marino">San Marino</option> 
		<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
		<option value="Saudi Arabia">Saudi Arabia</option> 
		<option value="Senegal">Senegal</option> 
		<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
		<option value="Seychelles">Seychelles</option> 
		<option value="Sierra Leone">Sierra Leone</option> 
		<option value="Singapore">Singapore</option> 
		<option value="Slovakia">Slovakia</option> 
		<option value="Slovenia">Slovenia</option> 
		<option value="Solomon Islands">Solomon Islands</option> 
		<option value="Somalia">Somalia</option> 
		<option value="South Africa">South Africa</option> 
		<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
		<option value="Spain">Spain</option> 
		<option value="Sri Lanka">Sri Lanka</option> 
		<option value="Sudan">Sudan</option> 
		<option value="Suriname">Suriname</option> 
		<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
		<option value="Swaziland">Swaziland</option> 
		<option value="Sweden">Sweden</option> 
		<option value="Switzerland">Switzerland</option> 
		<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
		<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
		<option value="Tajikistan">Tajikistan</option> 
		<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
		<option value="Thailand">Thailand</option> 
		<option value="Timor-leste">Timor-leste</option> 
		<option value="Togo">Togo</option> 
		<option value="Tokelau">Tokelau</option> 
		<option value="Tonga">Tonga</option> 
		<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
		<option value="Tunisia">Tunisia</option> 
		<option value="Turkey">Turkey</option> 
		<option value="Turkmenistan">Turkmenistan</option> 
		<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
		<option value="Tuvalu">Tuvalu</option> 
		<option value="Uganda">Uganda</option> 
		<option value="Ukraine">Ukraine</option> 
		<option value="United Arab Emirates">United Arab Emirates</option> 
		<option value="United Kingdom">United Kingdom</option> 
		<option value="United States">United States</option> 
		<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
		<option value="Uruguay">Uruguay</option> 
		<option value="Uzbekistan">Uzbekistan</option> 
		<option value="Vanuatu">Vanuatu</option> 
		<option value="Venezuela">Venezuela</option> 
		<option value="Viet Nam">Viet Nam</option> 
		<option value="Virgin Islands, British">Virgin Islands, British</option> 
		<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
		<option value="Wallis and Futuna">Wallis and Futuna</option> 
		<option value="Western Sahara">Western Sahara</option> 
		<option value="Yemen">Yemen</option> 
		<option value="Zambia">Zambia</option> 
		<option value="Zimbabwe">Zimbabwe</option>
		</select>
	<p>
		<label for="organizationSize">Organization's Size: </label><select id="organizationSize" name="organizationSize">
			<option value="1-10">1 - 10 People</option>
			<option value="11-50">11 - 50 People</option>
			<option value="51 - 200">51 - 200 People</option>
			<option value="More than 200">More than 200 People</option>
		</select>	</p>
	<p>
		<label for="lilacUse">How are you using this install of Lilac?</label>
		<select id="lilacUse" name="lilacUse">
			<option value="New Lilac User, also new to Nagios">New Lilac User, also new to Nagios</option>
			<option value="New Lilac User, existing nagios user">New Lilac User, existing Nagios user</option>
			<option value="Existing User">Existing Lilac User</option>
		</select>
	</p>
	<p>
		<label for="interestedInServices">Are You Interested In Commercial Support/Services For Lilac And Nagios, Or Open Source Monitoring In General?</label>
		<select id="interestedInServices" name="interestedInServices">
			<option value="No">No</option>
			<option value="Yes">Yes</option>
		</select>
	</p>
	<br style="clear: both;">
	<p id="interestedField" style="display: none;">
		<label for="interestedEmail">Provide Your E-Mail and a Lilac Networks Representative Will Get You More Information</label>
		<input type="text" id="interestedEmail" maxlength="255" />
	</p>
	<br style="clear: both;">
	<p>
		<input type="hidden" id="lilacVersion" value="<?php echo LILAC_VERSION;?>" />
		<input class="btn btn-primary" type="submit" value="Submit Information" id="submitReg" />
	</p>
	</fieldset>
	<p>
	<a href="index.php">Launch Lilac Now</a>
	</p>
	<script type="text/javascript">
	$(function() {
	  	$("#interestedInServices").attr("value", "No");
		$("#interestedInServices").change(function(event) {
			if($(this).attr("value") == "Yes") {
				$("#interestedField").show("fast");
			}
			else {
				$("#interestedField").hide("fast");
			}
		});

		$("#submitReg").click(function(event) {
							  event.preventDefault();
							  var request = {};
							  request.organizationName = $("#organizationName").attr("value");
							  request.organizationCountry = $("#organizationCountry").attr("value");
							  request.organizationSize = $("#organizationSize").attr("value");
							  request.lilacUse = $("#lilacUse").attr("value");
							  request.lilacVersion = $("#lilacVersion").attr("value");
							  request.interestedInServices = $("#interestedInServices").attr("value");
							  request.interestedEmail = $("#interestedEmail").attr("value");
							  request.reg = true;
							  $.post("install.php", request, function(data) {
									$("#regform").html("Thanks for helping us improve Lilac.  Continue on to <a href=\"index.php\">Launching Lilac Now</a>");
									 });
							  });
	  });
	</script>
	<?php
	print_window_footer();
}

print_footer();


// Install utility functions

function print_window_header($title = null, $type = "top") {
	?>
	<div class="roundedcorner_lilac_box">
	   <div class="roundedcorner_lilac_top"><div></div></div>
	      <div class="roundedcorner_lilac_content">
	      <?php
	      if(!empty($title)) {
	      	?>
	      	<h2><?php echo $title;?></h2>
	      	<?php
	      }
	      ?>
			<div class="roundedcorner_inner_box">
			   <div class="roundedcorner_inner_top"><div></div></div>
			      <div class="roundedcorner_inner_content">
	      
	      
	      
	<?php
}

function print_window_footer() {
	?>
			      </div>
			   <div class="roundedcorner_inner_bottom"><div></div></div>
			</div>		
	
	      </div>
	   <div class="roundedcorner_lilac_bottom"><div></div></div>
	</div>	
	<?php
}
	

// Used if frames not used
function print_header($title = null) {
	global $success;
	global $error;
	global $warning;
	
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	    <title><?php echo LILAC_NAME . " "; echo LILAC_VERSION;?><?php if($title) print(" - " . $title);?></title>
	    <link rel="stylesheet" type="text/css" href="style/reset.css">	    
	    <link rel="stylesheet" type="text/css" href="style/lilac.css">
		<link rel="stylesheet" type="text/css" href="style/install.css">
	    <link rel="stylesheet" type="text/css" href="style/flexigrid.css">
	    <link rel="stylesheet" type="text/css" href="style/jquery.tooltip.css">
	 	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	 	<script type="text/javascript" src="js/jquery.tooltip.min.js"></script>
	 	<script type="text/javascript" src="js/jquery.timers-1.0.0.js"></script>
	 	<script type="text/javascript" src="js/flexigrid.js"></script>

	</head>	    
	
	
	<body>
	<script language="javascript">
	function form_element_switch(element, checkbox) {
		if(checkbox.checked) {
			element.readOnly = false;
			element.disabled = false;
		}
		else {
			element.readOnly = true;
			element.disabled = true;
		}
	}
		
	function confirmDelete() {
		return confirm("Do you really want to delete this Object?");
  }

	</script>

	<div id="header">
		<h1><div class="title"><?php echo LILAC_NAME; ?></div></h1>
	</div>
	<div id="main">
	<?php
	if(!empty($success) || !empty($error) || !empty($warning)) {
		?>
		<script type="text/javascript">
		 $(document).ready(function() {
			$("#statusmsg").show("slow").fadeIn("slow");
		 });		
		</script>
		<?php
	}
	if(!empty($success)) {
		// We want to show a success state.
		?>
		<div id="statusmsg" class="roundedcorner_success_box" style="display: none;">
		   <div class="roundedcorner_success_top"><div></div></div>
		      <div class="roundedcorner_success_content">
		      <?php echo $success; ?>
		      </div>
		   <div class="roundedcorner_success_bottom"><div></div></div>
		</div>	
		<?php
	}
	else if(!empty($error)) {
		// We want to show a error state.
		?>
		<div id="statusmsg" class="roundedcorner_error_box" style="display: none;">
		   <div class="roundedcorner_error_top"><div></div></div>
		      <div class="roundedcorner_error_content">
		      <?php echo $error; ?>
		      </div>
		   <div class="roundedcorner_error_bottom"><div></div></div>
		</div>	
		<?php
	}
	else if(!empty($warning)) {
		// We want to show a warning state.
		?>
		<div id="statusmsg" class="roundedcorner_warning_box" style="display: none;">
		   <div class="roundedcorner_warning_top"><div></div></div>
		      <div class="roundedcorner_warning_content">
		      <?php echo $warning; ?>
		      </div>
		   <div class="roundedcorner_warning_bottom"><div></div></div>
		</div>	
		<?php
	}

}

function print_footer() {
	global $output_config;
	?>
	</div>
	</body>
	</html>
	<?php
}

/**
 * Lame function that tries to perform upgrades in place.
 * Supports:
 *
 * rc1
 * rc2
 * rc3
 */
function perform_upgrade($dbConn) {
	// Blind upgrade...it's kind of lame.

	// Check to see if column exists, parent_host in nagios host
	$stmt = $dbConn->prepare("describe nagios_host");
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "parent_host")
			$found = true;
	}
	if($found) {
		$stmt = $dbConn->prepare("SELECT id, parent_host FROM nagios_host WHERE parent_host IS NOT NULL");
		$insertStmt = $dbConn->prepare("INSERT INTO nagios_host_parent(child_host, parent_host) VALUES(?,?)");
		$hosts = $stmt->execute();
		while($host = $stmt->fetch()) {
			$insertStmt->execute(array($host['id'], $host['parent_host']));
		}
		$dbConn->exec("ALTER TABLE nagios_host DROP COLUMN parent_host");
	}
	// Check to see if column exists, parent_host in nagios_host_template
	$stmt = $dbConn->prepare("describe nagios_host_template");
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "parent_host")
			$found = true;
	}
	if($found) {
		$stmt = $dbConn->prepare("SELECT id, parent_host FROM nagios_host_template WHERE parent_host IS NOT NULL");
		$insertStmt = $dbConn->prepare("INSERT INTO nagios_host_parent(child_host_template, parent_host) VALUES(?,?)");
		$templates = $stmt->execute();
		while($template = $stmt->fetch()) {
			$insertStmt->execute(array($template['id'], $template['parent_host']));
		}
		$dbConn->exec("ALTER TABLE nagios_host_template DROP COLUMN parent_host");
	}

	// Okay, check to see if columns exist in service and service templates 
	// table
	$stmt = $dbConn->prepare("describe nagios_service");
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "retry_interval")
			$found = true;
	}
	if(!$found) {
		// Insert column definitions into service and service_templates
		$dbConn->exec("ALTER TABLE nagios_service CHANGE COLUMN retry_check_interval retry_interval INTEGER");
	}
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "first_notification_delay")
			$found = true;
	}
	if(!$found) {
		// Insert column definitions into service and service_templates
		$dbConn->exec("ALTER TABLE nagios_service ADD COLUMN first_notification_delay INTEGER");
	}
	$stmt = $dbConn->prepare("describe nagios_service_template");
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "retry_interval")
			$found = true;
	}
	if(!$found) {
		// Insert column definitions into service and service_templates
		$dbConn->exec("ALTER TABLE nagios_service_template CHANGE COLUMN retry_check_interval retry_interval INTEGER");
	}
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "first_notification_delay")
			$found = true;
	}
	if(!$found) {
		// Insert column definitions into service and service_templates
		$dbConn->exec("ALTER TABLE nagios_service_template ADD COLUMN first_notification_delay INTEGER");
	}
	// Modify nagios_contacts
	$dbConn->exec("ALTER TABLE nagios_contact MODIFY host_notification_period INTEGER");
	$dbConn->exec("ALTER TABLE nagios_contact MODIFY service_notification_period INTEGER");

	// Add p1_file to nagios_main_configuration
	$stmt = $dbConn->prepare("describe nagios_main_configuration");
	$results = $stmt->execute();
	$found = false;
	while($row = $stmt->fetch()) {
		if($row['Field'] == "p1_file")
			$found = true;
	}
	if(!$found) {
		$dbConn->exec("ALTER TABLE nagios_main_configuration ADD COLUMN p1_file VARCHAR(255)");
	}

	// Okay, let's make sure our version is set!
	$dbConn->exec("DELETE FROM lilac_configuration");
	$stmt = $dbConn->prepare("INSERT INTO lilac_configuration(version) VALUES(?)");
	$stmt->execute(array(LILAC_VERSION));
	return true;
}

