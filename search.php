<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2018 EyesOfNetwork Team

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


/*
	Filename:	search.php
*/

include_once('includes/config.inc');

// EoN_Actions
$OBJECTS=array(
	"commands"		=>	"Command",
	"contacts"		=>	"Contact",
	"contactgroups"		=>	"ContactGroup",
	"hosts"			=>	"Host",
	"hostgroups"		=>	"Hostgroup",
	"host_templates"	=>	"HostTemplate",
	"services"		=>	"Service",
	"servicegroups"		=>	"ServiceGroup",
	"service_templates"	=>	"ServiceTemplate",
	"timeperiods"		=>	"Timeperiod"
);

foreach($OBJECTS as $OBJECT_FIELD => $OBJECT_VALUE) {
	EoN_Actions_Process($OBJECT_VALUE);
}

class module_search_simple {

	private $dbHost;
	private $dbUsername;
	private $dbPasswor;
	private $dbDatabase ;
	private $dbServ;	// Database driver to use
	private $dbConnection;
	
	private $searchResults;
	private $searchCount;
	private $searchTemplate;
	
	function __construct() {

		global $sitedb_config;
		global $path_config;
		
		$this->searchResults = array();
		$this->searchCount = 0;
		
		$this->searchTemplate = array();
		
		$this->searchTemplate['hosts'] = array( "type"=>"Hosts", "getName"=>"Host Name", "getAddress"=>"IP Address", "getAlias"=>"Alias");
		$this->searchTemplate['hostgroups'] = array( "type"=>"Hostgroups", "getName"=>"Hostgroup Name", "getAlias"=>"Alias");
		$this->searchTemplate['host_templates'] = array( "type"=>"Host Templates", "getName"=>"Template Name", "getDescription"=>"Description");
		$this->searchTemplate['services'] = array( "type"=>"Services", "getDescription"=>"Service", "getOwnerDescription"=>"Owner Description");
		$this->searchTemplate['servicegroups'] = array( "type"=>"Servicegroups", "getName"=>"servicegroup Name", "getAlias"=>"Alias");
		$this->searchTemplate['service_templates'] = array( "type"=>"Service Templates", "getName"=>"Template Name", "getDescription"=>"Description");
		$this->searchTemplate['contacts'] = array( "type"=>"Contacts", "getName"=>"Contact", "getAlias"=>"Alias", "getEmail"=>"Email");
		$this->searchTemplate['contactgroups'] = array( "type"=>"Contactgroups", "getName"=>"Contactgroup Name", "getAlias"=>"Alias");
		$this->searchTemplate['timeperiods'] = array( "type"=>"Timeperiods", "getName"=>"Timeperiod Name", "getAlias"=>"Alias");
		$this->searchTemplate['commands'] = array( "type"=>"Commands", "getName"=>"Command Name", "getDescription"=>"Description");
		
		$this->searchTemplate['hosts']['url'] = "hosts.php?id=@1@";
		$this->searchTemplate['hostgroups']['url'] = "hostgroups.php?id=@1@";
		$this->searchTemplate['host_templates']['url'] = "host_template.php?id=@1@";
		$this->searchTemplate['services']['url'] = "service.php?id=@1@";
		$this->searchTemplate['servicegroups']['url'] = "servicegroups.php?servicegroup_id=@1@";
		$this->searchTemplate['service_templates']['url'] = "service_template.php?id=@1@";
		$this->searchTemplate['contacts']['url'] = "contacts.php?contact_id=@1@";
		$this->searchTemplate['contactgroups']['url'] = "contactgroups.php?contact_id=@1@";
		$this->searchTemplate['timeperiods']['url'] = "timeperiods.php?timeperiod_id=@1@";
		$this->searchTemplate['commands']['url'] = "commands.php?command_id=@1@";
	}
	
	function __destruct() {
	}
	
	public function init() {
		// Does nothing
	}
	
	public function restart() {
		$this->dbConnection = ADONewConnection($this->dbServ);
		$this->dbConnection->PConnect($this->dbHost, $this->dbUsername,
							$this->dbPassword,$this->dbDatabase);
		if(!$this->dbConnection->IsConnected()) {
			print("DBAUTH Failure: Unable to connect to auth database.  Please check your dbauth configuration.");
			die();
		}	
		$this->dbConnection->SetFetchMode(ADODB_FETCH_ASSOC);
	}
	
	public function render() {
		$this->renderBasicSearch();
	}
	
	private function search_text( $text) {
		// LOTS of places to check...
		// Hosts: name, alias, addresses
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosHostPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(nagiosHostPeer::ALIAS, "%" . $text . "%", Criteria::LIKE);
		$c3 = $c->getNewCriterion(nagiosHostPeer::ADDRESS, "%" . $text . "%", Criteria::LIKE);
		$c2->addOr($c3);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosHostPeer::NAME);
		
		$matchedHosts = NagiosHostPeer::doSelect($c);
		
		if(count($matchedHosts)) {
			foreach($matchedHosts as $host) {
				$this->searchResults['hosts'][$host->getId()] = $host;
				$this->searchCount++;
			}
		}
		
		// Hostgroups: name, alias
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosHostgroupPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(nagiosHostgroupPeer::ALIAS, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosHostgroupPeer::NAME);
		$matchedHostgroups = NagiosHostgroupPeer::doSelect($c);
		
		if(count($matchedHostgroups)) {
			foreach($matchedHostgroups as $hostgroup) {
				$this->searchResults['hostgroups'][$hostgroup->getId()] = $hostgroup;
				$this->searchCount++;
			}
		}
		
		// Host Templates: name, description
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosHostTemplatePeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosHostTemplatePeer::DESCRIPTION, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosHostTemplatePeer::NAME);
		$matchedTemplates = NagiosHostTemplatePeer::doSelect($c);
		
		if(count($matchedTemplates)) {
			foreach($matchedTemplates as $template) {
				$this->searchResults['host_templates'][$template->getId()] = $template;
				$this->searchCount++;
			}
		}
		
		// Services: description		
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosServicePeer::DESCRIPTION, "%" . $text . "%", Criteria::LIKE);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosServicePeer::DESCRIPTION);
		$matchedServices = NagiosServicePeer::doSelect($c);
		
		if(count($matchedServices)) {
			foreach($matchedServices as $service) {
				$this->searchResults['services'][$service->getId()] = $service;
				$this->searchCount++;
			}
		}
		
		// Servicegroups: name, alias
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosServiceGroupPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosServiceGroupPeer::ALIAS, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosServiceGroupPeer::NAME);
		$matchedServicegroups = NagiosServiceGroupPeer::doSelect($c);
		
		if(count($matchedServicegroups)) {
			foreach($matchedServicegroups as $servicegroup) {
				$this->searchResults['servicegroups'][$servicegroup->getId()] = $servicegroup;
				$this->searchCount++;
			}
		}
		
		// Service Templates: name, description
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosServiceTemplatePeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosServiceTemplatePeer::DESCRIPTION, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosServiceTemplatePeer::NAME);
		$matchedTemplates = NagiosServiceTemplatePeer::doSelect($c);
		
		if(count($matchedTemplates)) {
			foreach($matchedTemplates as $template) {
				$this->searchResults['service_templates'][$template->getId()] = $template;
				$this->searchCount++;
			}
		}		
		
		// Service Templates: name, description
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosContactPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosContactPeer::ALIAS, "%" . $text . "%", Criteria::LIKE);
		$c3 = $c->getNewCriterion(NagiosContactPeer::EMAIL, "%" . $text . "%", Criteria::LIKE);
		$c2->addOr($c3);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosContactPeer::NAME);
		$matchedContacts = NagiosContactPeer::doSelect($c);
		
		if(count($matchedContacts)) {
			foreach($matchedContacts as $contact) {
				$this->searchResults['contacts'][$contact->getId()] = $contact;
				$this->searchCount++;
			}
		}	
		
		// ContactGroups: name, alias
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosContactGroupPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosContactGroupPeer::ALIAS, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosContactGroupPeer::NAME);
		$matchedContactgroups = NagiosContactGroupPeer::doSelect($c);
		
		if(count($matchedContactgroups)) {
			foreach($matchedContactgroups as $contactgroup) {
				$this->searchResults['contactgroups'][$contactgroup->getId()] = $contactgroup;
				$this->searchCount++;
			}
		}
		
		// Timeperiod: name, alias
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosTimeperiodPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosTimeperiodPeer::ALIAS, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosTimeperiodPeer::NAME);
		$matchedPeriods = NagiosTimeperiodPeer::doSelect($c);
		
		if(count($matchedPeriods)) {
			foreach($matchedPeriods as $period) {
				$this->searchResults['timeperiods'][$period->getId()] = $period;
				$this->searchCount++;
			}
		}
		
		// Command: name, description
		$c = new Criteria();
		
		$c1 = $c->getNewCriterion(NagiosCommandPeer::NAME, "%" . $text . "%", Criteria::LIKE);
		$c2 = $c->getNewCriterion(NagiosCommandPeer::DESCRIPTION, "%" . $text . "%", Criteria::LIKE);
		$c1->addOr($c2);
		$c->add($c1);
		$c->setIgnoreCase(true);
		$c->addAscendingOrderByColumn(NagiosCommandPeer::NAME);
		$matchedCommands = NagiosCommandPeer::doSelect($c);
		
		if(count($matchedCommands)) {
			foreach($matchedCommands as $command) {
				$this->searchResults['commands'][$command->getId()] = $command;
				$this->searchCount++;
			}
		}		
	}
	
	public function doSearch() {
		global $error, $success;
		// Get settings from the POST
		
		if(empty($_GET['query'])) {
			$_GET['query'] = '';
		}
		elseif(!empty($_POST['query'])){
			$_GET['query'] = $_POST['query'];
		}
		
		$searchString = $_GET['query'];
		$tokens = explode( " ", $searchString);
		
		$this->searchResults = array();
		$this->searchCount = 0;
		
		if(count($tokens)) {
			foreach( $tokens as $token) {
				$token = trim($token);
				$type = "text";
				$area = "any";
				// Determine the type of this token
				/*
				if( strpos( $token, ".") !== false) {
					// Might be an ip address
					if( preg_match( "/[0-9]{1,3}\.|\.[0-9]{1,3}/", $token)) {
						$type = "ip";
					}
				}*/
				
				$token = str_replace( "*", "%", $token);
				$token = str_replace( "_", "\\_", $token);
				switch( $type) {
					case "ip": {
						$this->search_ip( $token);
						} break;
					case "text":
					default: {
						$this->search_text( $token);
						
						}
				}
			}
		}
		if( $this->searchCount == 0)
			$error = "No results returned.  Please adjust your search and try again.";
	}
	
	public function renderBasicSearch() {
		global $path_config;
		
		?>
<script type="text/javascript">
<!--
function clearSearch() {
	id = document.getElementById("searchField");
	if( id.value != "Enter a search") {
		id.value = "";
	}
}

function validateForm() {
	id = document.getElementById("searchField");
	if( id.value.length == 0) {
		alert( "Please enter a search string before searching");
		return false;
	}
	
	if( id.value == "Enter a search") {
		alert( "Please enter a search string before searching");
		return false;
	}
	
	return true;
}

-->
</script>
<form action="search.php" method="post" target="rightHome" id="searchForm" onsubmit="return validateForm();">
<input type="hidden" id="simpleSearch" name="simpleSearch" value="1" />
<table align="right" cellspacing="0" cellpadding="0">
	<tr>
		<td><input type="text" size="45" name="searchField" id="searchField" value="Enter a search" onfocus="javascript:if(this.value=='Enter a search')this.value='';" />&nbsp;</td>
	</tr>
	<tr>
		<td align="right" colspan="4"><img src="<?php echo $path_config['image_root'];?>dotclear.gif" height="4" width="1" /></td>
	</tr>
	<tr>
		<td align="right"><input class="btn btn-primary" type="submit" value="Search" />&nbsp;&nbsp;</td>
	</tr>
</table>
</form>
		<?php
	}
	
	public function renderAdvancedSearch() {
		print "Advanced search page<br>\n";
	}
	
	public function renderResults() {
		global $error;
		global $OBJECTS;

		if(count($this->searchResults)) {

			foreach( $this->searchResults as $group=>$results) {
				print_window_header( "Results in " . $this->searchTemplate[$group]['type'] . ": " . count($results), "100%", "center");
				?>
                                <form name="EoN_Actions_Form" method="post">
			        <?php echo EoN_Actions($OBJECTS[$group])?>
				<input type="hidden" name="query" value="<?php echo $_GET["query"]?>">
				<table width="95%" border="0" align="center" cellspacing="0" cellpadding="0">
				<tr>
				<?php
								if(count($this->searchTemplate[$group])) {
									foreach( $this->searchTemplate[$group] as $key=>$value) {
										if( $key != "type" && $key != "url") {
											print "\t<td style=\"padding: 2px; border-bottom: 1px solid #aaaaaa;\"><b>$value</b></td>\n";
										}
									}
								}
				?>
				  <td align="center" style="padding: 2px; border-bottom: 1px solid #aaaaaa;"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_<?php echo $OBJECTS[$group]?>');">ALL</a></td>
				</tr>
				<?php
				$count = 0;
				$span = count( $this->searchTemplate[$group]) - 3;
				$url = $this->searchTemplate[$group]['url'];
				if(count($results)) {
					foreach( $results as $id=>$result) {
						$bgcolor = "#f0f0f0";
						if( $count % 2) {
							$bgcolor = "#cccccc";
						}
						print "<tr style=\"background-color: $bgcolor\">\n";
						
						$n = 0;
						if(count($this->searchTemplate[$group])) {
							foreach( $this->searchTemplate[$group] as $key=>$value) {
								if( $key != "type" && $key != "url") {
									if( $n == 0) {
										print "\t<td style=\"padding: 2px; border-left: 1px solid #aaaaaa; border-bottom: 1px solid #aaaaaa;\" valign=\"top\">";
									} elseif( $n == $span) {
										print "\t<td style=\"padding: 2px; border-right: 1px solid #aaaaaa; border-bottom: 1px solid #aaaaaa;\" valign=\"top\">";
									} else {
										print "\t<td style=\"padding: 2px; border-bottom: 1px solid #aaaaaa;\" valign=\"top\">";
									}

									if( strlen( $result->$key()) == 0) {
										$temp = "&nbsp;";
									} else {
										$temp = "<a href=\"" . str_replace( "@1@", $id, $url) . "\">" . $result->$key() . "</a>";
									}
									
									print $temp . "</td>\n";
									$n++;
								}
							}
						}
						$count++;
						?>
						<td align="center" style="padding: 2px; border-right: 1px solid #aaaaaa; border-bottom: 1px solid #aaaaaa;"><input type="checkbox" class="checkbox" name="EoN_Actions_Checks_<?php echo $OBJECTS[$group]?>[]" value="<?php echo $id;?>"></td>	
						<?php
						print "</tr>\n";
					}

				}
				?>
				</table>
				</form>
				<br />
				<?php
				print_window_footer();

			}
		}
	}
}

$searchMod = new module_search_simple();

$searchMod->doSearch();
print_header("Search");

$searchMod->renderResults();

print_footer();



?>
