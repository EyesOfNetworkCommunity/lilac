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
	Filename: output.inc
	Description:
	The class definition for the lilacOutput class
*/

class lilacOutput {
	private $additionalHeaderLinks = array();
	function addAdditionalHeaderLink($link, $desc) {
		$this->additionalHeaderLinks[] = array('link' => $link, 'desc' => $desc);
	}
	function getAdditionalHeaderLinks() {
		return $this->additionalHeaderLinks;
	}
}


function double_pane_form_window_start() {
	/*
	?>
	<table class="doublePane">
	<?php
	*/
}

function double_pane_form_window_finish() {
	/*
	?>
	</table>
	<?php
	*/
}

function double_pane_select_form_element_with_enabler($backgroundColor, $form_name, $element_name, $element_title, $element_description, $selectList, $select_value_field, $select_desc_field, $selected, $enabler_name, $checkbox_description) {
	if(!isset($_POST[$form_name.'_enablers'][$enabler_name])) {
		$_POST[$form_name.'_enablers'][$enabler_name] = false;
	}
	?>
	<tr>
		<td class="formcell">
		<b><?php echo $element_title;?>:</b> <?php print_select($element_name, $selectList, $select_value_field, $select_desc_field, $selected, ($_POST[$form_name.'_enablers'][$enabler_name]));?><br />
		</td>
		<td align="right" class="formcell">
		<input type="hidden" name="<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]" value="<?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("1"); else print("0");?>" />
		<input type="checkbox" name="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" value="1" id="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" <?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("CHECKED");?> onclick="form_element_switch(document.<?php echo $form_name;?>.elements['<?php echo $element_name;?>'], document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]']); enabler_switch(document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]']);" /><label for="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]"><b><?php echo $checkbox_description;?></b></label>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="formcell">
		<?php echo $element_description;?><br />
		</td>
	</tr>
	<?php
}

function double_pane_text_form_element_with_enabler($backgroundColor, $form_name, $element_name, $element_title, $element_description, $size, $maxlength, $value, $enabler_name, $checkbox_description) {
	if(!isset($_POST[$form_name.'_enablers'][$enabler_name])) {
		$_POST[$form_name.'_enablers'][$enabler_name] = false;
	}
	?>
	<div class="formwrapper">
		<div class="formcontent">
		<b><?php echo $element_title;?>:</b> <input type="text" size="<?php echo $size;?>" maxlength="<?php echo $maxlength;?>" name="<?php echo $element_name;?>" value="<?php echo $value;?>" <?php if($_POST[$form_name.'_enablers'][$enabler_name] == 0) print("DISABLED");?>><br />
		</div>
		<div class="formtogglefield">
		<input type="hidden" name="<?php $form_name;?>_enablers[<?php echo $enabler_name;?>]" value="<?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("1"); else print("0");?>" />
		<input type="checkbox" name="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" value="1" id="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" <?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("CHECKED");?> onclick="form_element_switch(document.<?php echo $form_name;?>.elements['<?php echo $element_name;?>'], document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]']); enabler_switch(document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]']);" /><label for="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]"><b><?php echo $checkbox_description;?></b></label>
		</div>
		<?php echo $element_description; ?>
	</div>
	<?php
}

function double_pane_text_form_element($backgroundColor, $form_name, $element_name, $element_title, $element_description, $size, $maxlength, $value) {
	if(!isset($_POST[$form_name.'_enablers'][$enabler_name])) {
		$_POST[$form_name.'_enablers'][$enabler_name] = false;
	}
	?>
	<div id="formwrapper">
	<tr bgcolor="<?php echo $backgroundColor;?>">
		<td colspan="2" class="formcell">
		<b><?php echo $element_title;?>:</b> <input type="text" size="<?php echo $size;?>" maxlength="<?php echo $maxlength;?>" name="<?php echo $element_name;?>" value="<?php echo $value;?>"><br />
		</td>
	</tr>
	<tr bgcolor="<?php echo $backgroundColor;?>">
		<td colspan="2" class="formcell">
		<?php echo $element_description; ?><br />
		</td>
	</tr>
	</div>
	<?php
}

function double_pane_checkbox_group_form_element_with_enabler($backgroundColor, $form_name, $checkboxes, $element_title, $element_description, $enabler_name, $checkbox_description) {
	if(!isset($_POST[$form_name.'_enablers'][$enabler_name])) {
		$_POST[$form_name.'_enablers'][$enabler_name] = false;
	}
	$numOfElements = count($checkboxes);
	?>
	<tr bgcolor="<?php echo $backgroundColor;?>">
		<td width="50%" class="formcell">
		<b><?php echo $element_title;?>:</b>
		</td>
		<td align="right" class="formcell">
		<input type="hidden" name="<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]" value="<?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("1"); else print("0");?>" />
		<input type="checkbox" name="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" value="1" id="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" <?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("CHECKED");?> onclick="<?php
		// Gotta send multiple calls to javascript: form_element_switch
		for($counter = 0; $counter < $numOfElements; $counter++ ) {
			?>
			form_element_switch(document.<?php echo $form_name;?>.elements['<?php echo $checkboxes[$counter]['element_name'];?>'], document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]']);
			<?php
		}
		?>enabler_switch(document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]']);" /><label for="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]"><b><?php echo $checkbox_description;?></b></label>
		</td>
		</tr>
	<tr bgcolor="<?php echo $backgroundColor;?>">
		<td colspan="2" class="formcell">
			<table cellspacing="0" width="100%" border="0">
			<tr>
			<td valign="top" width="30%" class="formcell">
			<?php
			for($counter = 0; $counter < $numOfElements; $counter++) {
				?>
				<input type="checkbox" name="<?php echo $checkboxes[$counter]['element_name'];?>" <?php if($checkboxes[$counter]['checked'] == '1') print("CHECKED");?> value="<?php echo $checkboxes[$counter]['value'];?>" <?php if($_POST[$form_name.'_enablers'][$enabler_name] == 0) print("DISABLED");?>><?php echo $checkboxes[$counter]['element_title'];?><br />
				<?php
			}
			?>
			</td>
			<td class="formcell">
			<?php echo $element_description; ?><br />
			</td>
			</tr>
			</table>
		</td>
	</tr>
	<?php
}

function double_pane_textarea_form_element_with_enabler($backgroundColor, $form_name, $element_name, $element_title, $element_description, $rows, $cols, $value, $enabler_name, $checkbox_description) {
	if(!isset($_POST[$form_name.'_enablers'][$enabler_name])) {
		$_POST[$form_name.'_enablers'][$enabler_name] = false;
	}
	$numOfElements = count($checkboxes);
	?>
	<tr bgcolor="<?php echo $backgroundColor;?>">
		<td width="50%" class="formcell">
		<b><?php echo $element_title;?>:</b>
		</td>
		<td align="right" class="formcell">
		<input type="hidden" name="<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]" value="<?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("1"); else print("0");?>" />
		<input type="checkbox" name="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" value="1" id="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]" <?php if($_POST[$form_name.'_enablers'][$enabler_name]) print("CHECKED");?> onclick="form_element_switch(document.<?php echo $form_name;?>.elements['<?php echo $element_name;?>'], document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]']);
		enabler_switch(document.<?php echo $form_name;?>.elements['<?php echo $form_name;?>_enablers[<?php echo $enabler_name;?>]']);" /><label for="<?php echo $form_name;?>_checkboxes[<?php echo $enabler_name;?>]"><b><?php echo $checkbox_description;?></b></label>
		</td>
		</tr>
	<tr bgcolor="<?php echo $backgroundColor;?>">
		<td colspan="2" class="formcell">
			<textarea name="<?php echo $element_name;?>" rows="<?php echo $rows;?>" cols="<?php echo $cols;?>" <?php if($_POST[$form_name.'_enablers'][$enabler_name] == 0) print("DISABLED");?>><?php echo $value;?></textarea><br />	
			<?php echo $element_description; ?><br />

		</td>
	</tr>
	<?php
}

// Let's create the enable/disable select list
$enable_list[] = array("values" => 0, "text" => "Disable");
$enable_list[] = array("values" => 1, "text" => "Enable");

function print_subnav($menu, $selected = null, $paramName = "subnav", $baseURL = null) {
	if($baseURL == null) {
		$baseURL = $_SERVER['PHP_SELF'];
		$delimiter = "?";
	}
	else {
		if(strpos($baseURL, "?")) {
			$delimiter = "&";
		}
		else {
			$delimiter = "?";
		}
	}
	?>
	<ul class="subnav">
		<?php
		foreach($menu as $option => $value) {
			if($option == $selected) {
				?>
				<li class="selected"><?php echo $value; ?></li>
				<?php
			}
			else {
				?>
				<li><a href="<?php echo $baseURL; echo $delimiter; echo $paramName;?>=<?php echo $option;?>"><?php echo $value;?></a></li>
				<?php
			}
		}
		?>
	</ul>
	<br class="clear" />
	<?php
}


function print_redirect($redirect = "", $redirect_sec = 0, $redirect_text = "") {
	global $config;
	?>
	<HTML>
	<HEAD>
	<META CONTENT="<?php echo $redirect_sec; ?>;url=<?php echo $redirect; ?>" http-equiv="refresh">
	<TITLE></TITLE>
	</HEAD>
	<BODY>
	<?php echo $redirect_text; ?>
	</BODY>
	</HTML>
	<?php
}

function print_window_header($title = null, $type = "top") {
	?>
	<div class="roundedcorner_lilac_box">
	   <div class="roundedcorner_lilac_top"><div></div></div>
	      <div class="roundedcorner_lilac_content">
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
	global $output_config;
	global $path_config;
	global $sys_config;
	
	global $success;
	global $error;
	global $warning;
	
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="X-UA-Compatible" content="IE=10">

		<title><?php echo LILAC_NAME . " "; echo LILAC_VERSION;?><?php if($title) print(" - " . $title);?></title>
    	<link rel="stylesheet" type="text/css" href="style/reset.css">	    
    	<link rel="stylesheet" type="text/css" href="style/lilac.css">
    	<link rel="stylesheet" type="text/css" href="style/flexigrid.css">
    	<link rel="stylesheet" type="text/css" href="style/jquery.tooltip.css">
		<link rel="stylesheet" type="text/css" href="style/jquery.autocomplete.css">
		<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	 	<link rel="stylesheet" type="text/css" href="/bower_components/font-awesome/css/font-awesome.min.css">
	 	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	 	<script type="text/javascript" src="js/jquery.tooltip.min.js"></script>
	 	<script type="text/javascript" src="js/jquery.timers-1.0.0.js"></script>
	 	<script type="text/javascript" src="js/flexigrid.js"></script>
		<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
	</head>	    
	
	
	<body onload="$('form[name=\'EoN_Actions_Form\'] input').removeAttr('checked');">
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
		return confirm("Are you sure ?");
  	}

	function checkLine(lineid,checkid) {
		lineid=document.getElementById(lineid);
		checkid=document.getElementById(checkid);
		if(checkid.checked == false) {
			checkid.checked=true;
			lineid.style.backgroundColor = '#ffffc0';
		}
		else {
			checkid.checked=false;
			lineid.style.backgroundColor = '';
		}
	}
	
	function checkBox(lineid,checkid) {
		lineid=document.getElementById(lineid);
		checkid=document.getElementById(checkid);
		if(checkid.checked == true) {
			checkid.checked=true;
			lineid.style.backgroundColor = '#ffffc0';
		}
		else {
			checkid.checked=false;
			lineid.style.backgroundColor = '';
		}
	}
	
	function checkUncheckAll(name) {
		if(name=='EoN_Actions_Checks_ServiceTemplate') {
			line='Sline';
		}
		else {
			line='line';
		}
	    	if($("input[name='"+name+"[]']").is(':checked')) {
			$("input[name='"+name+"[]']").removeAttr("checked");
			for (var i = 0; i < $("input[name='"+name+"[]']").length; i++) {
				lineid=document.getElementById(line+i);
				lineid.style.backgroundColor = '';
			}
        		return false;
	    	}
        	else {
			$("input[name='"+name+"[]']").attr("checked","checked");
			for (var i = 0; i < $("input[name='"+name+"[]']").length; i++) {
				lineid=document.getElementById(line+i);
				lineid.style.backgroundColor = '#ffffc0';
			}
           		return false;
        	}
	}

	</script>

	<div id="header">
		<div id="search">
		<form action="search.php">
			<span>Search: </span> <input class="form-control input-sm" type="text" name="query" style="display: inline-block" />
		</form>
		</div>
		<?php
		if(empty($title)) { $title=LILAC_NAME; }
		?>
		<h1><?php echo $title; ?></h1>
	</div>
	<!-- EyesOfNetwork
	<div id="navigation">
		<ul>
			<li><a href="index.php">General</a></li>
			<li><a href="templates.php">Templates</a></li>
			<li><a href="hosts.php">Network</a></li>
			<li><a href="importer.php">Imports</a></li>
			<li><a href="tools.php">Tools</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	<div id="main">
	-->
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
	global $path_config;
	?>
	</div>
	</body>
	</html>
	<?php
}

function print_select($name, $list, $index, $index_desc, $selected = NULL, $enabled = 1) {
	$numOfElements = count($list);
	?>
	<select name="<?php echo $name;?>" <?php if(!$enabled) print("DISABLED");?>>
		<?php
		for($counter = 0; $counter < $numOfElements; $counter++) {
			?>
			<option <?php if($selected == $list[$counter][$index]) print("SELECTED");?> value="<?php echo $list[$counter][$index];?>"><?php echo $list[$counter][$index_desc];?></option>
			<?php
		}
		?>
	</select>
	<?php
}

function print_object_select($name, $list, $indexFunc, $descFunc, $selected = NULL, $enabled = 1, $excludeList = array()) {
	$numOfElements = count($list);
	?>
	<select name="<?php echo $name;?>" <?php if(!$enabled) print("DISABLED");?>>
		<?php
		for($counter = 0; $counter < $numOfElements; $counter++) {
			if(in_array($list[$counter]->$indexFunc(), $excludeList)) {
				continue;
			}
			?>
			<option <?php if($selected == $list[$counter]->$indexFunc()) print("SELECTED");?> value="<?php echo $list[$counter]->$indexFunc();?>"><?php echo $list[$counter]->$descFunc();?></option>
			<?php
		}
		?>
	</select>
	<?php
}


function print_list($listItems, $listKeys, $sortBy, $width = "100%") {
	$numOfItems = $listItems;
	?>
	<table width="<?php echo $width;?>" cellspacing="0" cellpadding="0" border="0">
	<?php
	for($counter = 0; $counter < $numOfItems; $counter++) {
		if($counter % 2) {
			?>
			<tr bgcolor="#cccccc">
			<?php
		}
		else {
			?>
			<tr bgcolor="#f0f0f0">
			<?php
		}
		?>
		<td><?php echo $listItems[$counter][$listKeys[0]['key_name']]?></td>
		</tr>
		<?php
	}
	?>
	</table>
	<?php
}

function print_command( $check_command) {
	$count = count( $check_command);
	if( $count == 0)
		print "[none]";
	else {
		print $check_command[0];
		for( $i=1;$i<$count;$i++) {
			print "<span class=\"bang\" style=\"font-weight: bold; font-size: 16px;\">!</span>" . $check_command[$i];
		}
	}
}

function print_host_command_display_field($label, $values, $field, $sourceID = null) {
	global $lilac;
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		print_command($lilac->return_host_command($sourceID));
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}

function print_host_template_command_display_field($label, $values, $field, $sourceID = null) {
	global $lilac;
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		print_command($lilac->return_host_template_command($sourceID));
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}


function print_cmd_obj_display_field($label, $cmdObj) {
	static $cmdTooltipCounter = 0;
	global $lilac;
	if(!empty($cmdObj['command'])) {
		print("<strong>" . $label . "</strong>: ");
		?><script type="text/javascript">
			$(document).ready(function() {
				$("#cmdobjparam-<?php echo $cmdTooltipCounter;?>").tooltip();
			});
		</script><span title="<?php
		if($cmdObj['command']['inherited'] == true) { ?>
			Inherited from Template <?php echo $cmdObj['command']['source']->getName();?>
		<?php
		}
		else {
			?>Defined In This Object<?php
		}
		?>" id="cmdobjparam-<?php echo $cmdTooltipCounter;?>"><?php echo $cmdObj['command']['command']->getName();?></span><?php		
		$cmdTooltipCounter++;
		foreach($cmdObj['parameters'] as $parameterArray) {
				?><script type="text/javascript">
					$(document).ready(function() {
						$("#cmdobjparam-<?php echo $cmdTooltipCounter;?>").tooltip();
					});
				</script>!<span title="<?php
			if($parameterArray['inherited'] == true) { ?>
				Inherited from Template <?php echo $parameterArray['source']->getName();?>
			<?php
			}
			else {
				?>Defined In This Object<?php
			}
			?>" id="cmdobjparam-<?php echo $cmdTooltipCounter;?>"><?php echo $parameterArray['parameter']->getParameter();?></span><?php
			$cmdTooltipCounter++;
		}
		print("<br />");	
	}
}


function print_service_template_command_display_field($label, $values, $field, $sourceID = null) {
	global $lilac;
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		print_command($lilac->return_service_template_command($sourceID));
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}

function print_service_command_display_field($label, $values, $field, $sourceID = null) {
	global $lilac;
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		print_command($lilac->return_service_command($sourceID));
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}

function print_timeperiod_display_field($label, $values, $field, $sourceID = null) {
	if(isset($values[$field])) {
		$timeperiod = NagiosTimeperiodPeer::retrieveByPK($values[$field]['value']);
		if($timeperiod) {
			print("<strong>" . $label . "</strong>: ");
			print($timeperiod->getName());
			if($values[$field]['inherited']) {
				?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
			}
			print("<br />");
		}
	}
}

function print_command_display_field($label, $values, $field, $sourceID = null) {
	if(isset($values[$field])) {
		$command = NagiosCommandPeer::retrieveByPK($values[$field]['value']);
		if($command) {
			print("<strong>" . $label . "</strong>: ");
			print($command->getName());
			if($values[$field]['inherited']) {
				?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
			}
			print("<br />");
		}
	}
}

function print_display_field($label, $values, $field, $sourceID = null) {
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		print($values[$field]['value']);
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}

function print_service_initialstate_display_field($label, $values, $field, $sourceID) {
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		switch($values[$field]['value']) {
			case 'u':
				print("Unknown");
				break;
			case 'c':
				print("Critical");
				break;
			case 'o':
				print("Ok");
				break;
			case 'w':
				print("Warning");
				break;
		}
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}

function print_initialstate_display_field($label, $values, $field, $sourceID) {
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		switch($values[$field]['value']) {
			case 'u':
				print("Unreachable");
				break;
			case 'd':
				print("Down");
				break;
			case 'o':
				print("Up");
				break;
		}
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}

function print_enabled_display_field($label, $values, $field, $sourceID, $enabledLabel = "Enabled", $disabledLabel = "Disabled") {
	if(isset($values[$field])) {
		print("<strong>" . $label . "</strong>: ");
		if($values[$field]['value'] == 1) {
			print($enabledLabel);
		}
		else {
			print($disabledLabel);
		}
		if($values[$field]['inherited']) {
			?><strong> - Inherited From <em><?php echo $values[$field]['source']['name'];?></em></strong><?php
		}
		print("<br />");
	}
}


function form_select_element_with_enabler($selectList, $selectValues, $selectLabels, $formName, $fieldName, $label, $description, $values, $selfID = null) {
	$enabled = false;
	$value = null;
	$checkBoxText = "Provide Value";
	if(isset($values[$fieldName]) && $values[$fieldName]['source']['id'] == $selfID  && !$values[$fieldName]['inherited']) {
		$enabled = true;
		$value = $values[$fieldName]['value'];
	}
	else if(isset($values[$fieldName])) {
		$checkBoxText = "Override Value";
		$value = $values[$fieldName]['value'];
	}
	?>
	<div class="formbox">
		<div class="formelement">
			<div class="formcontent toggle">
			<strong><?php echo $label;?>:</strong> <?php print_select($formName . "[" .$fieldName ."]", $selectList, $selectValues, $selectLabels, $value, $enabled);?>
			<?php echo $description;?>
			</div>
		</div>
		<div class="formtoggle">
			<input type="checkbox" name="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]" value="1" id="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]" <?php if($enabled) print("CHECKED");?> onclick="form_element_switch(document.<?php echo $formName;?>.elements['<?php echo $formName . "[" . $fieldName . "]";?>'], document.<?php echo $formName;?>.elements['<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]']);" /><label for="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]"><b><?php echo $checkBoxText;?></b></label>
		</div>
		<br class="clear" />
	</div>
	<?php
	
	
}

function form_text_element_with_enabler($size, $maxLength, $formName, $fieldName, $label, $description, $values, $selfID = null) {
	$enabled = false;
	$value = null;
	$checkBoxText = "Provide Value";
	if(isset($values[$fieldName]) && $values[$fieldName]['source']['id'] == $selfID  && !$values[$fieldName]['inherited']) {
		$enabled = true;
		$value = $values[$fieldName]['value'];
	}
	else if(isset($values[$fieldName])) {
		$checkBoxText = "Override Value";
		$value = $values[$fieldName]['value'];
	}
	?>
	<div class="formbox">
		<div class="formelement">
			<div class="formcontent toggle">
			<strong><?php echo $label;?>:</strong> <input type="text" size="<?php echo $size;?>" maxlength="<?php echo $maxLength;?>" name="<?php echo $formName . "[" . $fieldName . "]";?>" value="<?php echo $value;?>" <?php if(!$enabled) print("DISABLED");?> />
			<?php echo $description;?>
			</div>
		</div>
		<div class="formtoggle">
		<input type="checkbox" name="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]" value="1" id="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]" <?php if($enabled) print("CHECKED");?> onclick="form_element_switch(document.<?php echo $formName;?>.elements['<?php echo $formName . "[" . $fieldName . "]";?>'], document.<?php echo $formName;?>.elements['<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]']);" /><label for="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]"><b><?php echo $checkBoxText;?></b></label>
		</div>
		<br class="clear" />
	</div>
	<?php	
}

function form_checkbox_group_with_enabler($checkboxGroup, $formName, $fieldName, $label, $description, $values, $selfID = null) {
	$numOfElements = count($checkboxGroup);
	
	$enabled = false;
	$checkBoxText = "Provide Value";
	$provided = false;
	foreach($checkboxGroup as $checkboxItem) {
		if(isset($values[$checkboxItem['field']]) && $values[$checkboxItem['field']]['source']['id'] == $selfID  && !$values[$checkboxItem['field']]['inherited']) {
			$enabled = true;
		}
		else if(isset($values[$checkboxItem['field']])) {
			$provided = true;
		}
	}
	if($provided) {
		$checkBoxText = "Override Value";
	}
	
	?>
	<div class="formbox">
		<div class="formelement">
			<div class="formcontent toggle">
			<b><?php echo $label;?>:</b><br />
			<?php
			for($counter = 0; $counter < $numOfElements; $counter++) {
				?>
				<input type="checkbox" name="<?php echo $formName . "[" . $checkboxGroup[$counter]['field'] . "]";?>" <?php if(isset($values[$checkboxGroup[$counter]['field']]) && $values[$checkboxGroup[$counter]['field']]['value']) print("CHECKED");?> value="1" <?php if(!$enabled) print("DISABLED");?>><?php echo $checkboxGroup[$counter]['label'];?><br />
				<?php
			}
			?>
			<?php echo $description; ?><br />
			</div>
		</div>
		<div class="formtoggle">
			<input type="checkbox" name="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]" value="1" id="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]" <?php if($enabled) print("CHECKED");?> onclick="<?php
					// Gotta send multiple calls to javascript: form_element_switch
					for($counter = 0; $counter < $numOfElements; $counter++ ) {
						?>
						form_element_switch(document.<?php echo $formName;?>.elements['<?php echo $formName . "[" . $checkboxGroup[$counter]['field'] . "]";?>'], document.<?php echo $formName;?>.elements['<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]']);
						<?php
					}
					?>;" /><label for="<?php echo $formName;?>_checkboxes[<?php echo $fieldName;?>]"><b><?php echo $checkBoxText;?></b></label>
		</div>
		<br class="clear" />
	</div>
	<?php
}


