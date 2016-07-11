<?php
session_start();
	include_once('includes/config.inc');
	if(!isset($_SESSION['services'])) $_SESSION['services'] = array();
	if(!isset($_SESSION['command'])) $_SESSION['command'] = array();
	if(!isset($_SESSION['params'])) $_SESSION['params'] = array();
	$hasId = false;

	$c=new Criteria();
    $c->addAscendingOrderByColumn(NagiosServiceTemplatePeer::NAME);
    $serviceList = NagiosServiceTemplatePeer::doSelect($c);

	echo "<table width='100%' align='center' cellspacing='0' cellpadding='2' border='0'><tr class='altTop'><td colspan='4'>Service Templates To Inherit From (Top to Bottom):</td></tr>";
	if ($_POST['id'] == "null"){
		echo "</table><br /><br /><b>Add Template To Inherit From:</b>";
		if(!count($serviceList)) {
			echo "<strong>No Templates Available</strong><br /><br />";
		}
		else {
			echo "<select name='servmanage[serv_add][serv_id]'>";
			foreach($serviceList as $service) {
				echo "<option value='".$service->getId()."'>".$service->getName()."</option>";
			}
			echo "</select>&nbsp;";
			echo "<input class='btn btn-primary' type='button' onClick='javascript:getID()'' value='Add Template'><br /><br />;;;;";
		}
	}
	elseif ($_POST['id'] != "undefined") {

		//Delete the selected template
		if ( $_POST['option'] == "delete"){
			foreach($_SESSION['services'] as $i=>$service){
				if ( $service == $_POST['id']){
					unset($_SESSION['services'][$i]);
					unset($_SESSION['command'][$i]);
					break;
				}
			}
		}

		//Print the previous elements
		foreach($_SESSION['services'] as $i=>$service){
			foreach( $serviceList as $serv){
				if ( $service == $serv->getId()){
					if ($i%2) echo "<tr class='altRow1'>";
		        	else echo "<tr class='altRow2'>";
		        	echo "<td height='20' width='80' nowrap='nowrap' class='altLeft'><a class=\"btn btn-danger btn-xs\" onClick='javascript:appel(".$serv->getId().",\"delete\",\"null\");'>Delete</a></td>";
		        	echo "<td height='20' class='altRight'><b>".$serv->getName()."</b></td></tr>";
		        	break;
	        	}
        	}
		}

		//If it was not a delete
		if ( $_POST['option'] != "delete"){
			//Search the new element
	        foreach ($serviceList as $i=>$service){
	        	if (in_array($service,$_SESSION['services'])) continue;

	        	if ($service->getId() == $_POST['id']){
	        		if ($i%2) echo "<tr class='altRow1'>";
	        		else echo "<tr class='altRow2'>";
	        		$_SESSION['services'][count($_SESSION['services'])] = $service->getId() ;
	        		$_SESSION['command'][count($_SESSION['command'])] = $service->getCheckCommand() ;
	        		echo "<td height='20' width='80' nowrap='nowrap' class='altLeft'><a class=\"btn btn-danger btn-xs\" onClick='javascript:appel(".$service->getId().",\"delete\");'>Delete</a></td>";
	        		echo "<td height='20' class='altRight'><b>".$service->getName()."</b></td></tr>";
	        		break;
				}
	        }
	    }

	    //Print the end of the page
	    echo"</table><br /><br /><b>Add Template To Inherit From:</b>";
	    if(!count($serviceList)) {
			echo "<strong>No Templates Available</strong><br /><br />";
		}
		else {
			echo "<select name='servmanage[serv_add][serv_id]'>";
			foreach($serviceList as $service) {
				if(in_array($service->getId(), $_SESSION['services']))	continue;
					echo "<option value='".$service->getId()."'>".$service->getName()."</option>";
				}
			echo "</select>";
			echo "<input type='button' onCLick='javascript:getID()'' value='Add Template'><br /><br />;;";
		}

		//Search the command id
		foreach( array_reverse($_SESSION['command']) as $command){
			if ( $command != null) {
				echo $command.";;";
				$hasId = true;
				break;
			}
		}

		if ( !$hasId ) echo "0;;";	//If they are no command id, then echo 0 for default value. (None)
	}
	else {
		//Print the previous elements
		foreach($_SESSION['services'] as $i=>$service){
			foreach( $serviceList as $serv){
				if ( $service == $serv->getId()){
					if ($i%2) echo "<tr class='altRow1'>";
		        	else echo "<tr class='altRow2'>";
		        	echo "<td height='20' width='80' nowrap='nowrap' class='altLeft'> <a class=\"btn btn-danger btn-xs\" onClick='javascript:appel(".$serv->getId().",\"delete\",\"null\");'>Delete</a></td>";
		        	echo "<td height='20' class='altRight'><b>".$serv->getName()."</b></td></tr>";
		        	break;
	        	}
        	}
		}

		//Print the end of the page
	    echo"</table><br /><br /><b>Add Template To Inherit From:</b>";
	    if(!count($serviceList)) {
			echo "<strong>No Services Available</strong><br /><br />";
		}
		else {
			echo "<select name='servmanage[serv_add][serv_id]'>";
			foreach($serviceList as $service) {
				if(in_array($service->getId(), $_SESSION['services']))	continue;
					echo "<option value='".$service->getId()."'>".$service->getName()."</option>";
				}
			echo "</select>";
			echo "<input type='button' onCLick='javascript:getID()'' value='Add Template'><br /><br />;;;;";
		}
	}

	echo '<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0"><tr class="altTop"><td colspan="2">Check Command Parameters:</td></tr>';
	if ($_POST['option2'] == "delete"){
		foreach($_SESSION['params'] as $i=>$command){
			if ($command == $_POST['cmd']){
				unset($_SESSION['params'][$i]);
				$_SESSION['params'] = array_values($_SESSION['params']);
				break;
			}
		}
	}
	elseif( $_POST['option2'] == 'add'){
		$_SESSION['params'][count($_SESSION['params'])] = $_POST['cmd'];
	}

	//Print the already added params
	$count = 0;
	foreach($_SESSION['params'] as $i=>$command) {
		if($i % 2) echo '<tr class="altRow1">';
		else echo '<tr class="altRow2">';
		echo "<td height='20' width='80' nowrap='nowrap' class='altLeft'><a class=\"btn btn-danger btn-xs\" onClick='javascript:appel(\"undefined\",\"null\",\"delete\",\"$command\");'>Delete</a></td>
        <td height='20' class='altRight'><b>\$ARG".($_SESSION['num_cmd']+$i+1)."\$: $command</b>
        </td></tr>";
        $count++;
	}

	echo '</table><br /><br /><table><tr><td>
		Value for $ARG'.($_SESSION['num_cmd']+$count+1).'$: <input type="text" name="host_manage[parameter]" /> <input class="btn btn-primary" type="button" value="Add Parameter" onClick="javascript:getValue();"/>
		</td></tr></table></br>';
?>
