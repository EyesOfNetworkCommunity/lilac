<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2007 Taylor Dondich

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
 * add_service_template.php
 * Author:	Taylor Dondich (tdondich at gmail.com)
 * Description:
 * 	Provides interface to maintain service templates
 *
*/
include_once('includes/config.inc');

if(isset($_POST['request'])) {
	if($_POST['request'] == 'add_service_template') {
		// Check for pre-existing service template with same name
		if($lilac->servicetemplate_exists($_POST['template_name'])) {
			$error = "A service template with that name already exists!";
		}
		else {
			// Field Error Checking
			if($_POST['template_name'] == '' || $_POST['template_description'] == '') {
				$addError = 1;
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {			
				$template = new NagiosServiceTemplate();
				$template->setName($_POST['template_name']);
				$template->setDescription($_POST['template_description']);
				$template->save();
				header("Location: service_template.php?id=" . $template->getId());
			}
		}
	}
}

print_header("Service Template Editor");

print_window_header("Add Service Template", "100%");
?>
<form name="service_template_add_form" method="post" action="add_service_template.php">
<input type="hidden" name="request" value="add_service_template" />
<?php double_pane_form_window_start(); ?>
<tr bgcolor="f0f0f0">
	<td colspan="2" class="formcell">
	<b>Template Name:</b><br />
	<input type="text" size="40" name="template_name" value="">
	<?php echo $lilac->element_desc("template_name", "nagios_services_desc"); ?><br />
	<br />
	</td>
</tr>
<tr bgcolor="eeeeee">
	<td colspan="2" class="formcell">
	<b>Template Description:</b><br />
	<input type="text" size="40" name="template_description" value="">
	<?php echo $lilac->element_desc("template_description", "nagios_services_desc"); ?><br />
	<br />
	</td>
</tr>
<?php double_pane_form_window_finish(); ?>
<input class="btn btn-primary" type="submit" value="Add Service Template" /> <a class="btn btn-default" href="templates.php">Cancel</a>
<br /><br />
</form>
<?php
print_window_footer();
?>
<br />
<?php
print_footer();
?>
