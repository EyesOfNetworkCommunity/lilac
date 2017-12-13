<?php
/**
 * Lilac Installer Script
 */
require_once('includes/config.inc');

$config_exists = false;
if(false === ($fp = @fopen(dirname(__FILE__) . "/includes/lilac-conf.php", "r+"))) {
	$config_exists = false;
}
else {
	$config_exists = true;
}
if($fp)
	fclose($fp);

if(!isset($_POST['stage'])) {
	$stage = "1";
}
else {
	$stage = $_POST['stage'];
}

if($config_exists !== true)
	$stage = "99";

$cUpdate = new lilacUpdate();

if($stage == 1 && $_POST['update'] == "execute") {
	$error = false;
	$success = false;

	if(!$error) {

			$objUpdate = &$cUpdate->getUpdateObject();
			$error = $objUpdate->executeUpdate();
			
			if(empty($error))
				$success = "Update applied without errors!";
	}
}

print_uheader("lilac-reloaded updater");

if($stage == 1 && $success) {

	print_window_uheader("Update Complete");
	?>
<b>Congratulations!</b>
<p style="margin: 15px;">Your lilac-reloaded update is now complete.</p>

<p>
	<a href="update.php">Launch lilac-reloaded update site again to check for more updates.</a>
</p>
<?php
print_window_ufooter();
}
else if($stage == 1) {
	$fatalErrors = false;
	// Dependency checking
	print_window_uheader("Update check");
	?>

<div class="checks">

	<?php
	if($cUpdate->getCurrentDBVersion() <= 0) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		Database Build-Version: <?php echo $cUpdate->getCurrentDBVersion();?></div>
	<?php
	if($fail) {
		?>
	<div class="error">
		Your database seems to have a old structure, updates are required.
	</div>
	<?php
	}
	?>
	<div class="success">
		Application Build-Version: <?php echo $cUpdate->getCurrentAPPVersion();?>
	</div>
	<?php
	if($cUpdate->getCurrentDBVersion() != $cUpdate->getCurrentAPPVersion()) {
		$fail = true;
	}
	else {
		$fail = false;
	}
	?>
	<div class="<?php if($fail) echo "failure"; else echo "success";?>">
		Update required: <?php if($fail) echo "yes"; else echo "no";?></div>
	<?php
	if($fail) {
		?>
	<div class="notice">
		<p>It is required to update your lilac-reloaded installation to build-version <?php echo $cUpdate->getNextUpdateStep(); ?> to work properly.</p>
		<p>Following updates will be applied for your installation:</p>
		<p>
		<?php 
		$updateToVersion = $cUpdate->getNextUpdateStep();
		if($updateToVersion != -1)
		{
			$objUpdate = &$cUpdate->getUpdateObject();
			$arrUpdates = $objUpdate->getUpdates();
			
			foreach($arrUpdates as $updateInfo)
			{
				printf("- %s<br>", $updateInfo);	
			}
		}
		else
		{
			echo "- Update not available, no update found";
		}
		?>
		</p> 
		<p>Click the button "Update installation" to beginn update process. Please backup your data first if you feel unwell at this point.</p>
	</div>
	<?php
	}
	else
	{
	?>
	<div class="notice">
		<p>No update ist required. Click <a href="index.php">here</a> to go back to the main navigation.</p>
	</div>
	<?php
	}
	?>
</div>
<?php
if($fatalErrors) {
	?>
<div class="error">
	You must resolve the issues above before continuing the installation. <a href="update.php">Refresh The Page</a> to perform the checks again.
</div>
<?php
}
else {
	?>
<form action="update.php" method="post">
	<input type="hidden" name="update" value="execute" /> 
	<input <?php if(!$fail) echo "disabled "; ?> class="submit" type="submit" value="Update installation..." />
</form>
<?php
}
print_window_ufooter();

?>
<?php
}
else if($stage == 99) {

	// Dependency checking
	print_window_uheader("Update check failed");
	?>

<div class="checks">

	<div class="error">
		<p>The Lilac updater requires that the current configuration file at <em><?php echo dirname(__FILE__) . "/includes/lilac-conf.php";?></em> is writeable. It is 
	   recommended that you change the permissions of the file so the web user can write to it. Following steps are possible:</p>
        <p>
           - Temporary set the file permission of file <em><?php echo dirname(__FILE__) . "/includes/lilac-conf.php";?></em> to 777. After installation set back to defaults.<br />
           - Temporary set the owner permission of file <em><?php echo dirname(__FILE__) . "/includes/lilac-conf.php";?></em> to the webserveruser. After installation set back to defaults.<br />
        </p>
	</div>
</div>
<?php 
}


print_ufooter();


// Install utility functions

function print_window_uheader($title = null, $type = "top") {
	?>
<div class="roundedcorner_lilac_box">
	<div class="roundedcorner_lilac_top">
		<div></div>
	</div>
	<div class="roundedcorner_lilac_content">
		<?php
		if(!empty($title)) {
			?>
		<h2>
			<?php echo $title;?>
		</h2>
		<?php
		}
		?>
		<div class="roundedcorner_inner_box">
			<div class="roundedcorner_inner_top">
				<div></div>
			</div>
			<div class="roundedcorner_inner_content">



				<?php
}

function print_window_ufooter() {
	?>
			</div>
			<div class="roundedcorner_inner_bottom">
				<div></div>
			</div>
		</div>

	</div>
	<div class="roundedcorner_lilac_bottom">
		<div></div>
	</div>
</div>
<?php
}


// Used if frames not used
function print_uheader($title = null) {
	global $success;
	global $error;
	global $warning;

	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title><?php echo LILAC_NAME . " "; echo LILAC_VERSION;?> <?php if($title) print(" - " . $title);?>
</title>
<link rel="stylesheet" type="text/css" href="style/reset.css">
<link rel="stylesheet" type="text/css" href="style/lilac.css">
<link rel="stylesheet" type="text/css" href="style/install.css">
<link rel="stylesheet" type="text/css" href="style/flexigrid.css">
<link rel="stylesheet" type="text/css" href="style/jquery.tooltip.css">
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tooltip.min.js"></script>
<script type="text/javascript" src="js/jquery.timers.js"></script>
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
		<h1>
			<div class="title">
				<?php echo LILAC_NAME; ?>
			</div>
		</h1>
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
		<div id="statusmsg" class="roundedcorner_success_box"
			style="display: none;">
			<div class="roundedcorner_success_top">
				<div></div>
			</div>
			<div class="roundedcorner_success_content">
				<?php echo $success; ?>
			</div>
			<div class="roundedcorner_success_bottom">
				<div></div>
			</div>
		</div>
		<?php
		}
		else if(!empty($error)) {
			// We want to show a error state.
			?>
		<div id="statusmsg" class="roundedcorner_error_box"
			style="display: none;">
			<div class="roundedcorner_error_top">
				<div></div>
			</div>
			<div class="roundedcorner_error_content">
				<?php echo $error; ?>
			</div>
			<div class="roundedcorner_error_bottom">
				<div></div>
			</div>
		</div>
		<?php
		}
		else if(!empty($warning)) {
			// We want to show a warning state.
			?>
		<div id="statusmsg" class="roundedcorner_warning_box"
			style="display: none;">
			<div class="roundedcorner_warning_top">
				<div></div>
			</div>
			<div class="roundedcorner_warning_content">
				<?php echo $warning; ?>
			</div>
			<div class="roundedcorner_warning_bottom">
				<div></div>
			</div>
		</div>
		<?php
		}

}

function print_ufooter() {
	global $output_config;
	?>
	</div>
</body>
</html>
<?php
}
