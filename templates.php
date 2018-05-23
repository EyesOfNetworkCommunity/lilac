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

// EoN_Actions_HostTemplates
EoN_Actions_Process("HostTemplate");
EoN_Actions_Process("ServiceTemplate");

// Get list of host templates
$lilac->get_host_template_list($hostTemplateList);
$numOfHostTemplates = count($hostTemplateList);

// Get list of service templates
$lilac->get_service_template_list($serviceTemplateList);
$numOfServiceTemplates = count($serviceTemplateList);

print_header("Template Listings");
?>
<?php
	print_window_header("Host Templates", "100%");
	?>
	<a class="sublink btn btn-success" href="add_host_template.php">Add A New Host Template</a><br />
		<br />
		<?php
	if($numOfHostTemplates) {
		?>
			<form name="EoN_Actions_Form" method="post">
			<?php echo EoN_Actions("HostTemplate");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Host Template Name</td>
			<td>Description</td>
		        <td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_HostTemplate');">ALL</a></td>
			</tr>
		<?php
		for($counter = 0; $counter < $numOfHostTemplates; $counter++) {
		if($counter % 2) {
			?>
				<tr class="altRow1" id="line<?php echo $counter?>">
					<?php
			}
			else {
				?>
				<tr class="altRow2" id="line<?php echo $counter?>">
					<?php
			}
			?>
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="host_template.php?id=<?php echo $hostTemplateList[$counter]->getId();?>"><?php echo $hostTemplateList[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<?php echo $hostTemplateList[$counter]->getDescription();?></td>
				<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_HostTemplate[]" value="<?php echo $hostTemplateList[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
				</tr>
				<?php
		}
		?>
			</table>
			</form>
			<?php
	}
	else {
	?>
		<div class="statusmsg">No Host Templates Exists</div>
			<?php
	}
	print_window_footer();
	print_window_header("Service Templates", "100%");
	?>
	<a class="sublink btn btn-success" href="add_service_template.php">Add A New Service Template</a><br />
		<br />
		<?php
	if($numOfServiceTemplates) {
		?>
	                <form name="EoN_Actions_Form" method="post">
                        <?php echo EoN_Actions("ServiceTemplate");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Service Template Name</td>
			<td>Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_ServiceTemplate');">ALL</a></td>	
			</tr>
		<?php
		for($counter = 0; $counter < $numOfServiceTemplates; $counter++) {
		if($counter % 2) {
			?>
				<tr class="altRow1" id="Sline<?php echo $counter?>">
					<?php
			}
			else {
				?>
				<tr class="altRow2" id="Sline<?php echo $counter?>">
					<?php
			}
			?>
				<td height="20" class="altLeft" onclick="checkLine('Sline<?php echo $counter?>','Scheck<?php echo $counter?>');">&nbsp;<a href="service_template.php?id=<?php echo $serviceTemplateList[$counter]->getId();?>"><?php echo $serviceTemplateList[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('Sline<?php echo $counter?>','Scheck<?php echo $counter?>');">&nbsp;<?php echo $serviceTemplateList[$counter]->getDescription();?></td>
				<td align="center"><input type="checkbox" id="Scheck<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_ServiceTemplate[]" value="<?php echo $serviceTemplateList[$counter]->getId();?>" onclick="checkBox('Sline<?php echo $counter?>','Scheck<?php echo $counter?>');"></td>
				</tr>
				<?php
		}
		?>
			</table>
			</form>
			<?php
	}
	else {
	?>
		<div class="statusmsg">No Service Templates Exists</div>
			<?php
	}
	print_window_footer();
print("<br /><br />");
print_footer();
?>
