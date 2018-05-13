<?php
/*
#########################################
#
# Copyright (C) 2011 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# APPLICATION : eonweb configurator
#
# LICENCE :
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
#########################################
*/

// Eonweb importer page
require_once('includes/config.inc');

// Check upload file
if(isset($_POST['EoN_Import_Action'])) {

	// Check if there options
	if(isset($_POST["no_contacts"])) {
		$ImportOptions["no_contacts"]=true;
	}
	if(isset($_POST["no_contactgroups"])) {
		$ImportOptions["no_contactgroups"]=true;
	}
	if(isset($_POST["no_timeperiods"])) {
		$ImportOptions["no_timeperiods"]=true;
	}
	
	// Check if there is an error in the upload
	if ($_FILES['EoN_Import_XML']['error']) {
		switch ($_FILES['EoN_Import_XML']['error']){
			case 1: // UPLOAD_ERR_INI_SIZE
				$error="The uploaded file exceeds the upload_max_filesize directive in php.ini.";
				break;
			case 2: // UPLOAD_ERR_FORM_SIZE
				$error="The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
			break;
			case 3: // UPLOAD_ERR_PARTIAL
				$error="The uploaded file was only partially uploaded.";
			break;
			case 4: // UPLOAD_ERR_NO_FILE
				$error="No file was uploaded.";
			break;
		}
	}
	elseif($_FILES['EoN_Import_XML']['type']!="text/xml") {
		// Not XML file
		$error="Error in file type : " . $_FILES['EoN_Import_XML']['type'] . ".";
	}
	else {
		// Begin Import
		$import = new EoN_Importer($ImportOptions);
		$import->EoN_Import_Start($_FILES['EoN_Import_XML']['tmp_name']);
		$import_msg=$import->EoN_Import_Object();
		if($import_msg==false) {
			$error="ERROR : " . $_FILES['EoN_Import_XML']['name'] . " Not implemented yet.";
		}
		else {
			$success="Object(s) imported.";
			$import_msg_array=array_unique($import_msg);
			unset($import_msg);
			$import_msg="";
			foreach($import_msg_array as $html) {
				$import_msg=$import_msg.$html;
			}
		}
	}
}
	
// Display page
print_header();
print_window_header("Eonweb Config Importer", "100%");

// Result Page
if(isset($import) && isset($success)) {

?>
<table width="100%">
	<tr bgcolor="#F5F5F5"><td><?php echo $import_msg?><br></td></tr>
</table>
<?php

}

?>
<form action="importer.php" method="post" enctype="multipart/form-data">
<div align="left">
	<b>Import Options :</b>
	<br /><br />
	<ul>
		<li><input type="checkbox" name="no_contacts" style="vertical-align:middle;" checked>&nbsp;Keep Contacts</li>
		<li><input type="checkbox" name="no_contactgroups" style="vertical-align:middle;" checked>&nbsp;Keep Contactgroups</li>
		<li><input type="checkbox" name="no_timeperiods" style="vertical-align:middle;" checked>&nbsp;Keep Timeperiods</li>
	</ul>
	<br />
	<b>Import your XML File :</b>
	<br /><br />
	<input type="file" name="EoN_Import_XML">
	<br />
	<input class="btn btn-primary" type="submit" name="EoN_Import_Action" value="Submit" onClick="javascript:return confirmDelete();">
</div>
</form>
<?php

print_window_footer();
print_footer();

?>
