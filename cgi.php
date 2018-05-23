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
Lilac Index Page, Displays Menu, and Statistics
*/
include_once('includes/config.inc');

$cgiConfig = NagiosCgiConfigurationPeer::doSelectOne(new Criteria());
if(!$cgiConfig) {
	$cgiConfig = new NagiosCgiConfiguration();
	$cgiConfig->save();
}

if(isset($_POST['request'])) {
	if($_POST['request'] == 'update') {
		if(isset($_POST['cgi_config']['physical_html_path']))
         $cgiConfig->setPhysicalHtmlPath($_POST['cgi_config']['physical_html_path']);
        if(isset($_POST['cgi_config']['url_html_path']))
         $cgiConfig->setUrlHtmlPath($_POST['cgi_config']['url_html_path']);
        if(isset($_POST['cgi_config']['use_authentication']))
         $cgiConfig->setUseAuthentication($_POST['cgi_config']['use_authentication']);
        if(isset($_POST['cgi_config']['default_user_name']))
         $cgiConfig->setDefaultUserName($_POST['cgi_config']['default_user_name']);
        if(isset($_POST['cgi_config']['authorized_for_system_information']))
         $cgiConfig->setAuthorizedForSystemInformation($_POST['cgi_config']['authorized_for_system_information']);
        if(isset($_POST['cgi_config']['authorized_for_system_commands']))
         $cgiConfig->setAuthorizedForSystemCommands($_POST['cgi_config']['authorized_for_system_commands']);
        if(isset($_POST['cgi_config']['authorized_for_configuration_information']))
         $cgiConfig->setAuthorizedForConfigurationInformation($_POST['cgi_config']['authorized_for_configuration_information']);
        if(isset($_POST['cgi_config']['authorized_for_all_hosts']))
         $cgiConfig->setAuthorizedForAllHosts($_POST['cgi_config']['authorized_for_all_hosts']);
        if(isset($_POST['cgi_config']['authorized_for_all_host_commands']))
         $cgiConfig->setAuthorizedForAllHostCommands($_POST['cgi_config']['authorized_for_all_host_commands']);
        if(isset($_POST['cgi_config']['authorized_for_all_services']))
         $cgiConfig->setAuthorizedForAllServices($_POST['cgi_config']['authorized_for_all_services']);
        if(isset($_POST['cgi_config']['authorized_for_all_service_commands']))
         $cgiConfig->setAuthorizedForAllServiceCommands($_POST['cgi_config']['authorized_for_all_service_commands']);
        if(isset($_POST['cgi_config']['statusmap_background_image']))
         $cgiConfig->setStatusmapBackgroundImage($_POST['cgi_config']['statusmap_background_image']);
        if(isset($_POST['cgi_config']['default_statusmap_layout']))
         $cgiConfig->setDefaultStatusmapLayout($_POST['cgi_config']['default_statusmap_layout']);
        if(isset($_POST['cgi_config']['statuswrl_include']))
         $cgiConfig->setStatuswrlInclude($_POST['cgi_config']['statuswrl_include']);
        if(isset($_POST['cgi_config']['default_statuswrl_layout']))
         $cgiConfig->setDefaultStatuswrlLayout($_POST['cgi_config']['default_statuswrl_layout']);
        if(isset($_POST['cgi_config']['refresh_rate']))
         $cgiConfig->setRefreshRate($_POST['cgi_config']['refresh_rate']);
        if(isset($_POST['cgi_config']['host_unreachable_sound']))
         $cgiConfig->setHostUnreachableSound($_POST['cgi_config']['host_unreachable_sound']);
        if(isset($_POST['cgi_config']['host_down_sound'])) 
         $cgiConfig->setHostDownSound($_POST['cgi_config']['host_down_sound']);
        if(isset($_POST['cgi_config']['service_critical_sound']))
         $cgiConfig->setServiceCriticalSound($_POST['cgi_config']['service_critical_sound']);
        if(isset($_POST['cgi_config']['service_warning_sound']))
         $cgiConfig->setServiceWarningSound($_POST['cgi_config']['service_warning_sound']);
        if(isset($_POST['cgi_config']['service_unknown_sound']))
         $cgiConfig->setServiceUnknownSound($_POST['cgi_config']['service_unknown_sound']);
        if(isset($_POST['cgi_config']['ping_syntax']))
         $cgiConfig->setPingSyntax($_POST['cgi_config']['ping_syntax']);

        if(isset($_POST['cgi_config']['lock_author_names']))
         $cgiConfig->setLockAuthorNames($_POST['cgi_config']['lock_author_names']);
        if(isset($_POST['cgi_config']['escape_html_tags']))
         $cgiConfig->setEscapeHtmlTags($_POST['cgi_config']['escape_html_tags']);
        if(isset($_POST['cgi_config']['notes_url_target']))
         $cgiConfig->setNotesUrlTarget($_POST['cgi_config']['notes_url_target']);
        if(isset($_POST['cgi_config']['action_url_target']))
         $cgiConfig->setActionUrlTarget($_POST['cgi_config']['action_url_target']);
        if(isset($_POST['cgi_config']['enable_splunk_integration']))
         $cgiConfig->setEnableSplunkIntegration($_POST['cgi_config']['enable_splunk_integration']);
        if(isset($_POST['cgi_config']['splunk_url']))
         $cgiConfig->setSplunkUrl($_POST['cgi_config']['splunk_url']);
        $cgiConfig->save();		
        $success = "Updated CGI Configuration.";
    }
}



	
// Let's make the status map layout select list
$statusmap_layout_list[] = array("values" => "0", "text" => "User-Defined Coordinates");
$statusmap_layout_list[] = array("values" => "1", "text" => "Depth Layers");
$statusmap_layout_list[] = array("values" => "2", "text" => "Collapsed Tree");
$statusmap_layout_list[] = array("values" => "3", "text" => "Balanced Tree");
$statusmap_layout_list[] = array("values" => "4", "text" => "Circular");
$statusmap_layout_list[] = array("values" => "5", "text" => "Circular (Marked Up)");
$statusmap_layout_list[] = array("values" => "6", "text" => "Circular (Marked Down)");

// Let's make the status wrl layout select list
$statuswrl_layout_list[] = array("values" => "0", "text" => "User-Defined Coordinates");
$statuswrl_layout_list[] = array("values" => "1", "text" => "Depth Layers");
$statuswrl_layout_list[] = array("values" => "2", "text" => "Collapsed Tree");
$statuswrl_layout_list[] = array("values" => "3", "text" => "Balanced Tree");
$statuswrl_layout_list[] = array("values" => "4", "text" => "Circular");


if(!isset($_GET['section']))
	$_GET['section'] = 'paths';

	
// Build subnavigation
$subnav = array(
	'paths' => 'Paths',
	'authentication' => 'Authentication',
	'status' => 'Status',
	'sounds' => 'Sounds',
	'other' => 'Other'
	);


print_header("CGI Configuration File Editor");

	print_window_header("Web Interface Configuration", "100%", "center");
	print_subnav($subnav, $_GET['section'], "section");
	if($_GET['section'] == 'paths') {

		?>
		<form name="cgi_path_config" method="post" action="cgi.php?section=paths">
		<input type="hidden" name="request" value="update" />
		<div class="formbox">
		<b>Physical HTML Path:</b><br />
		<input type="text" size="80" name="cgi_config[physical_html_path]" VALUE="<?php echo $cgiConfig->getPhysicalHtmlPath();?>">
		<?php echo $lilac->element_desc("physical_html_path", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>URL HTML Path:</b><br />
		<input type="text" size="80" name="cgi_config[url_html_path]" VALUE="<?php echo $cgiConfig->getUrlHtmlPath();?>">
		<?php echo $lilac->element_desc("url_html_path", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Path Configuration" />
		</div>
		<?php
	}
	else if($_GET['section'] == 'authentication') {
		?>
		<form name="cgi_authentication_config" method="post" action="cgi.php?section=authentication">
		<input type="hidden" name="request" value="update" />
		<div class="formbox">
		<b>Use Authentication:</b> <?php print_select("cgi_config[use_authentication]", $enable_list, "values", "text", $cgiConfig->getUseAuthentication());?>
		<?php echo $lilac->element_desc("use_authentication", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Default Username:</b> <input type="text" name="cgi_config[default_user_name]" VALUE="<?php echo $cgiConfig->getDefaultUserName();?>">
		<?php echo $lilac->element_desc("default_user_name", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for System Information:</b> <input type="text" name="cgi_config[authorized_for_system_information]" VALUE="<?php echo $cgiConfig->getAuthorizedForSystemInformation();?>">
		<?php echo $lilac->element_desc("authorized_for_system_information", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for System Commands:</b> <input type="text" name="cgi_config[authorized_for_system_commands]" VALUE="<?php echo $cgiConfig->getAuthorizedForSystemCommands();?>">
		<?php echo $lilac->element_desc("authorized_for_system_commands", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for Configuration Information:</b> <input type="text" name="cgi_config[authorized_for_configuration_information]" VALUE="<?php echo $cgiConfig->getAuthorizedForConfigurationInformation();?>">
		<?php echo $lilac->element_desc("authorized_for_configuration_information", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for All Hosts:</b> <input type="text" name="cgi_config[authorized_for_all_hosts]" VALUE="<?php echo $cgiConfig->getAuthorizedForAllHosts();?>">
		<?php echo $lilac->element_desc("authorized_for_all_hosts", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for All Host Commands:</b> <input type="text" name="cgi_config[authorized_for_all_host_commands]" VALUE="<?php echo $cgiConfig->getAuthorizedForAllHostCommands();?>">
		<?php echo $lilac->element_desc("authorized_for_all_host_commands", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for All Services:</b> <input type="text" name="cgi_config[authorized_for_all_services]" VALUE="<?php echo $cgiConfig->getAuthorizedForAllServices();?>">
		<?php echo $lilac->element_desc("authorized_for_all_services", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Authorized for All Service Commands:</b> <input type="text" name="cgi_config[authorized_for_all_service_commands]" VALUE="<?php echo $cgiConfig->getAuthorizedForAllServiceCommands();?>">
		<?php echo $lilac->element_desc("authorized_for_all_service_commands", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Authentication Configuration" />
		</div>
		<?php
	}
	else if($_GET['section'] == 'status') {
		?>
		<form name="cgi_authentication_config" method="post" action="cgi.php?section=status">
		<input type="hidden" name="request" value="update" />
		<div class="formbox">
		<b>Statusmap Background Image:</b> <input type="text" name="cgi_config[statusmap_background_image]" VALUE="<?php echo $cgiConfig->getStatusmapBackgroundImage();?>">
		<?php echo $lilac->element_desc("statusmap_background_image", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Default Statusmap Layout</b> <?php print_select("cgi_config[default_statusmap_layout]", $statusmap_layout_list, "values", "text", $cgiConfig->getDefaultStatusmapLayout());?>
		<?php echo $lilac->element_desc("default_statusmap_layout", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Statuswrl Include:</b> <input type="text" name="cgi_config[statuswrl_include]" VALUE="<?php echo $cgiConfig->getStatuswrlInclude();?>">
		<?php echo $lilac->element_desc("statuswrl_include", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Default Statuswrl Layout</b> <?php print_select("cgi_config[default_statuswrl_layout]", $statuswrl_layout_list, "values", "text", $cgiConfig->getDefaultStatuswrlLayout());?>
		<?php echo $lilac->element_desc("default_statuswrl_layout", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Refresh Rate:</b> <input type="text" name="cgi_config[refresh_rate]" VALUE="<?php echo $cgiConfig->getRefreshRate();?>">
		<?php echo $lilac->element_desc("refresh_rate", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Status Configuration" />
		</div>
		<?php
	}
	else if($_GET['section'] == 'sounds') {
		?>
		<form name="cgi_authentication_config" method="post" action="cgi.php?section=sounds">
		<input type="hidden" name="request" value="update" />
		<div class="formbox">
		<b>Host Unreachable Sound:</b> <input type="text" name="cgi_config[host_unreachable_sound]" VALUE="<?php echo $cgiConfig->getHostUnreachableSound();?>">
		<?php echo $lilac->element_desc("host_unreachable_sound", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Host Down Sound:</b> <input type="text" name="cgi_config[host_down_sound]" VALUE="<?php echo $cgiConfig->getHostDownSound();?>">
		<?php echo $lilac->element_desc("host_down_sound", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Service Critical Sound:</b> <input type="text" name="cgi_config[service_critical_sound]" VALUE="<?php echo $cgiConfig->getServiceCriticalSound();?>">
		<?php echo $lilac->element_desc("service_critical_sound", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Service Warning Sound:</b> <input type="text" name="cgi_config[service_warning_sound]" VALUE="<?php echo $cgiConfig->getServiceWarningSound();?>">
		<?php echo $lilac->element_desc("service_warning_sound", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Service Unknown Sound:</b> <input type="text" name="cgi_config[service_unknown_sound]" VALUE="<?php echo $cgiConfig->getServiceUnknownSound();?>">
		<?php echo $lilac->element_desc("service_unknown_sound", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Sound Configuration" />
		</div>
		<?php
	}
	else if($_GET['section'] == 'other') {
		?>
		<form name="cgi_authentication_config" method="post" action="cgi.php?section=other">
		<input type="hidden" name="request" value="update" />
		<div class="formbox">
		<b>Lock Author Names:</b> <?php print_select("cgi_config[lock_author_names]", $enable_list, "values", "text", $cgiConfig->getLockAuthorNames());?>
		<?php echo $lilac->element_desc("lock_author_names", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Escape HTML Tags:</b> <?php print_select("cgi_config[escape_html_tags]", $enable_list, "values", "text", $cgiConfig->getEscapeHtmlTags());?>
		<?php echo $lilac->element_desc("escape_html_tags", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Notes URL Target:</b><br />
		<input type="text" size="40" name="cgi_config[notes_url_target]" VALUE="<?php echo $cgiConfig->getNotesUrlTarget();?>">
		<?php echo $lilac->element_desc("notes_url_target", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Action URL Target:</b><br />
		<input type="text" size="40" name="cgi_config[action_url_target]" VALUE="<?php echo $cgiConfig->getActionUrlTarget();?>">
		<?php echo $lilac->element_desc("action_url_target", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Ping Syntax:</b><br />
		<input type="text" size="80" name="cgi_config[ping_syntax]" VALUE="<?php echo $cgiConfig->getPingSyntax();?>">
		<?php echo $lilac->element_desc("ping_syntax", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Enable Splunk Integration:</b> <?php print_select("cgi_config[enable_splunk_integration]", $enable_list, "values", "text", $cgiConfig->getEnableSplunkIntegration());?>
		<?php echo $lilac->element_desc("enable_splunk_integration", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<b>Splunk URL:</b><br />
		<input type="text" size="80" name="cgi_config[splunk_url]" VALUE="<?php echo $cgiConfig->getSplunkUrl();?>">
		<?php echo $lilac->element_desc("splunk_url", "nagios_cgi_desc"); ?><br />
		</div>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Other Configuration" />
		</div>
		<?php
	}		
	print_window_footer();

print_footer();
?>
