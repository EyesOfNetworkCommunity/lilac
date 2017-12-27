<?php
session_start();
	include_once('includes/config.inc');
	if(!isset($_SESSION['templates'])) $_SESSION['templates'] = array();

	$c=new Criteria();
    $c->addAscendingOrderByColumn(NagiosHostTemplatePeer::NAME);
    $templateList = NagiosHostTemplatePeer::doSelect($c);

	echo "<table width='100%' align='center' cellspacing='0' cellpadding='2' border='0'><tr class='altTop'><td colspan='4'>Host Templates To Inherit From (Top to Bottom):</td></tr>";
	if ($_POST['id'] == "null"){
		echo "</table><br /><br /><b>Add Template To Inherit From:</b>&nbsp;";
		if(!count($templateList)) {
			echo "<strong>No Templates Available</strong><br /><br />";
		}
		else {
			echo "<select name='hostmanage[template_add][template_id]'>";
			foreach($templateList as $template) {
				echo "<option value='".$template->getId()."'>".$template->getName()."</option>";
			}
			echo "</select>&nbsp;";
			echo "<input class='btn btn-primary' type='button' onCLick='javascript:getID()'' value='Add Template'><br /><br />";
		}
	}
	else {

		//Delete the selected template
		if ( $_POST['option'] == "delete"){
			$i= 0;
			foreach($_SESSION['templates'] as $template){
				if ( $template == $_POST['id']){
					unset($_SESSION['templates'][$i]);
					break;
				}
				$i++;
			}
		}

		$i=0;	//Print the previous elements
		foreach($_SESSION['templates'] as $template){
			foreach( $templateList as $temp){
				if ( $template == $temp->getId()){
					if ($i%2) echo "<tr class='altRow1'>";
		        	else echo "<tr class='altRow2'>";
		        	echo "<td height='20' width='80' nowrap='nowrap' class='altLeft'><a class=\"btn btn-danger btn-xs\" onClick='javascript:appel(".$temp->getId().",\"delete\");'>Delete</a></td>";
		        	echo "<td height='20' class='altRight'><b>".$temp->getName()."</b></td></tr>";
		        	$i++;
		        	break;
	        	}
        	}
		}

		//If it was not a delete
		if ( $_POST['option'] != "delete"){
			//Search the new element
	        foreach ($templateList as $template){
	        	#if (in_array($template,$_SESSION['templates'])) continue;

	        	if ($template->getId() == $_POST['id']){
	        		if ($i%2) echo "<tr class='altRow1'>";
	        		else echo "<tr class='altRow2'>";
	        		$_SESSION['templates'][count($_SESSION['templates'])] = $template->getId() ;
	        		echo "<td height='20' width='80' nowrap='nowrap' class='altLeft'><a class=\"btn btn-danger btn-xs\" onClick='javascript:appel(".$template->getId().",\"delete\");'>Delete</a></td>";
	        		echo "<td height='20' class='altRight'><b>".$template->getName()."</b></td></tr>";
	        		break;
				}
	        }
	    }

	    //Print the end of the page
	    echo"</table><br /><br /><b>Add Template To Inherit From:</b>";
	    if(!count($templateList)) {
			echo "<strong>No Templates Available</strong><br /><br />";
		}
		else {
			echo "<select name='hostmanage[template_add][template_id]'>";
			foreach($templateList as $template) {
				if(in_array($template->getId(), $_SESSION['templates']))	continue;
					echo "<option value='".$template->getId()."'>".$template->getName()."</option>";
				}
			echo "</select>";
			echo "<input type='button' onCLick='javascript:getID()'' value='Add Template'><br /><br />";
		}
	}
?>
