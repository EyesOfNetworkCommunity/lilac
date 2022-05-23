<?php
/*
#########################################
#
# Copyright (C) 2017 EyesOfNetwork Team
# DEV NAME : Julien Gonzalez
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
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("/srv/eyesofnetwork/eonweb/include/config.php");
include_once("/srv/eyesofnetwork/eonweb/include/function.php");

if(!empty($_GET["host"])) {
	
	// API URL
	$url = 'https://127.0.0.1/eonapi/listNagiosObjects?username=admin&apiKey=' . $eon_api_token;
	// Create a new cURL resource
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Setup request to send json via POST
	$payload_service = '{"object": "services", "columns": ["description", "perf_data"], "filters": ["host_name = ' . $_GET["host"] . '"]}';

	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_service);
	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Execute the POST request
	$result = curl_exec($ch);
	$arr_service = json_decode($result, true);
	// Close cURL resource
	curl_close($ch);
	$vars = sql("lilac", "select NHCO.var_value from nagios_host_custom_object_var as NHCO INNER JOIN nagios_host as NH ON NHCO.host = NH.id WHERE NH.name = ? AND NHCO.var_name = ?", array($_GET["host"], $_GET["service"] . "_PANELID"));
	$listLabel = array();
	$listLabel["labels"] = array();
	$listLabel["id"] = $vars[0][0];
	$panelId = 1;
	foreach($arr_service["result"]["default"] as $service) {
		if(!empty($service["perf_data"])) {
			$perfDatas = explode(" ", $service["perf_data"]);
			$perfDataLabel = array();
			foreach($perfDatas as $perfData) {
				if($_GET["service"] == $service["description"]) {
					$perfDataLabel = explode("=", $perfData)[0];
					$perfDataLabelTrunc = $perfDataLabel;
					$perfDataLabel = strtr($perfDataLabel, array("\\" => "\\\\\\\\"));
					$perfDataLabelTrunc = strtr($perfDataLabelTrunc, array("\\" => "\\\\"));
					$perfDataLabelTrunc = strtr($perfDataLabelTrunc, array("'" => ""));
					$perfDataLabel = strtr($perfDataLabel, array("'" => ""));
					array_push($listLabel["labels"], $perfDataLabel);
				}

				$panelId++;
			}
		}
	}
	print_r(json_encode($listLabel));
}

function convertUnit($unit) {
	switch ($unit) {
		//Time
		case 'ns':
		case 'µs':
		case 'ms':
		case 's':
		case 'm':
		case 'h':
		case 'd':
			return $unit;
		//Data
		case 'b':
			return 'bits';
			break;
		case 'B':
			return 'bytes';
		case 'KB':
		case 'KiB':
		case 'kiB':
		case 'kB':
			return 'kbytes';
		case 'MB':
		case 'MiB':
		case 'miB':
		case 'mB':
			return 'mbytes';
		case 'GB':
		case 'GiB':
		case 'giB':
		case 'gB':
			return 'gbytes';
		case 'Bps':
		case 'BPS':
		case 'BpS':
			return 'Bps';
		case '%':
		case 'percent':
		case 'pct':
		case 'pct.':
		case 'pc':
			return 'percent';
		default:
			return 'short';
	}
}

function getUnits() {
// API URL
	$url = 'http://localhost:8086/query?pretty=true&db=nagflux&q=SHOW%20series';

	// Create a new cURL resource
	$ch = curl_init($url);
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$results = curl_exec($ch);
	$results = json_decode($results, true);
	$listUnit = array();
	foreach ($results["results"][0]["series"][0]["values"] as $result) {
		$metricsArray = stringToDict($result[0]);
		if(array_key_exists("unit", $metricsArray)) {
			array_push($listUnit, $metricsArray["unit"]);
		}
	}
	$listUnit = array_unique($listUnit);
	$convertedUnit = array();
	foreach ($listUnit as $value) {
		array_push($convertedUnit, convertUnit($value));
	}
	// Close cURL resource
	curl_close($ch);
	return $convertedUnit;
}

function stringToDict($string) {
	$dict = array();
	foreach (explode(",", $string) as $message) {
		if(str_contains($message, "unit")) {
			$tab = explode("=", $message);
			$dict[$tab[0]] = $tab[1];	
		}	
	}
	return $dict;
}

function create_dashboard() {
	global $grafana_api_token;
	global $eon_api_token;

	// API URL
	$url = 'http://127.0.0.1:3000/api/folders/dashboards-uid';
	// Create a new cURL resource
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Setup request to send json via DELETE
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $grafana_api_token));
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Execute the POST request
	$result = curl_exec($ch);
	$arr = json_decode($result, true);
	// Close cURL resource
	curl_close($ch);

	// API URL
	$url = 'http://127.0.0.1:3000/api/folders';
	// Create a new cURL resource
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Setup request to send json via POST
	$payload = '{"uid": "dashboards-uid", "title": "dashboards"}';
	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $grafana_api_token));
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Execute the POST request
	$result = curl_exec($ch);
	$arr = json_decode($result, true);
	// Close cURL resource
	curl_close($ch);

	// API URL
	$url = 'https://127.0.0.1/eonapi/listNagiosObjects?username=admin&apiKey=' . $eon_api_token;
	// Create a new cURL resource
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Setup request to send json via POST
	$payload_host = '{"object" : "hosts", "columns" : ["check_command", "perf_data", "name"]}';
	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_host);
	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Execute the POST request
	$result = curl_exec($ch);
	$arr_host = json_decode($result, true);
	// Close cURL resource
	curl_close($ch);

	// API URL
	$url = 'https://127.0.0.1/eonapi/listNagiosObjects?username=admin&apiKey=' . $eon_api_token;
	// Create a new cURL resource
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Setup request to send json via POST
	$payload_service = '{"object": "services", "columns": ["host_name", "description", "check_command", "perf_data"]}';
	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_service);
	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Execute the POST request
	$result = curl_exec($ch);
	$arr_service = json_decode($result, true);
	// Close cURL resource
	curl_close($ch);

	sql("lilac", "DELETE FROM nagios_host_custom_object_var WHERE var_name = 'DASHID'");

	foreach($arr_host["result"]["default"] as $host) {
		// Close cURL resource
		curl_close($ch);

		// API URL
		$url = 'http://127.0.0.1:3000/api/dashboards/db';

		// Create a new cURL resource
		$ch = curl_init($url);

		// Setup request to send json via POST
		$payload_1 = file_get_contents("dashboards/templates/start.json");
		$panelId = 1;
		
		$id = sql("lilac", "SELECT id FROM nagios_host WHERE name = ?", array($host["name"]));

		foreach($arr_service["result"]["default"] as $service) {
			if($host["name"] == $service["host_name"]) {
				if(!empty($service["perf_data"])) {

					print("<pre>".print_r($host["name"],true)."</pre>");
					
					$var = sql("lilac", "SELECT * FROM nagios_host_custom_object_var WHERE var_name = ? AND host = ? AND var_value = ?", array($service["description"] . "_PANELID", $id[0][0], $panelId));

					if($var != null) {
						sql("lilac", "UPDATE nagios_host_custom_object_var SET var_value = ? WHERE var_name = ? AND host = ? ", array($panelId, $service["description"] . "_PANELID", $id[0][0]));
					} else {
						sql("lilac", "INSERT INTO nagios_host_custom_object_var (host, var_name, var_value) VALUES (?, ?, ?)", array($id[0][0], $service["description"] . "_PANELID", $panelId));
					}

					$perfDatas = explode(" ", $service["perf_data"]);

					$perfDataLabel = array();
					foreach($perfDatas as $perfData) {
						$payload_2 = file_get_contents("dashboards/templates/panel.json");
						$perfDataLabel = explode("=", $perfData)[0];
						$matches = array();
						if(preg_match('/[A-Za-z]\w*/', explode("=", $perfData)[1], $matches)) {
							$unit = convertUnit($matches[0]);
						}
						$perfDataLabelTrunc = $perfDataLabel;
						$payload_1 = json_decode($payload_1, true);
						$payload_2 = json_decode($payload_2, true);
						foreach($payload_2 as $pan) {
							array_push($payload_1[0]["dashboard"]["panels"], $pan);
						}
						$payload_1 = json_encode($payload_1);

						$checkCommand = explode("!", $service["check_command"]);

						$perfDataLabel = strtr($perfDataLabel, array("\\" => "\\\\\\\\"));
						$perfDataLabelTrunc = strtr($perfDataLabelTrunc, array("\\" => "\\\\\\\\"));
						$perfDataLabelTrunc = strtr($perfDataLabelTrunc, array("'" => ""));
						$perfDataLabel = strtr($perfDataLabel, array("'" => ""));
						
						$payload_1 = strtr($payload_1, array('%unit%' => $unit));
						$payload_1 = strtr($payload_1, array('%perfdata_label%' => $perfDataLabel));
						$payload_1 = strtr($payload_1, array('%perfdata_label_trunc%' => $perfDataLabelTrunc));
						$payload_1 = strtr($payload_1, array('%performanceLabel%' => $perfDataLabelTrunc));
						$payload_1 = strtr($payload_1, array('%host%' => $host["name"]));
						$payload_1 = strtr($payload_1, array('%service%' => $service["description"]));
						$payload_1 = strtr($payload_1, array('%command%' => $checkCommand[0]));
						$payload_1 = strtr($payload_1, array('"%id%"' => $panelId));
						$panelId++;
					}	
				}
			}
		}
		
		$perfDatas = explode(" ", $host["perf_data"]);

		$perfDataLabel = array();
		foreach($perfDatas as $perfData) {
			$payload_2 = file_get_contents("dashboards/templates/panel.json");
			$perfDataLabel = explode("=", $perfData)[0];
			$matches = array();
			if(preg_match('/[A-Za-z]\w*/', explode("=", $perfData)[1], $matches)) {
				$unit = convertUnit($matches[0]);
			}
			$perfDataLabelTrunc = $perfDataLabel;
			$payload_1 = json_decode($payload_1, true);
			$payload_2 = json_decode($payload_2, true);
			foreach($payload_2 as $pan) {
				array_push($payload_1[0]["dashboard"]["panels"], $pan);
			}
			$payload_1 = json_encode($payload_1);

			$perfDataLabel = strtr($perfDataLabel, array("\\" => "\\\\\\\\"));
			$perfDataLabelTrunc = strtr($perfDataLabelTrunc, array("\\" => "\\\\\\\\"));
			$perfDataLabelTrunc = strtr($perfDataLabelTrunc, array("'" => ""));
			$perfDataLabel = strtr($perfDataLabel, array("'" => ""));
			
			$payload_1 = strtr($payload_1, array('%unit%' => $unit));
			$payload_1 = strtr($payload_1, array('%perfdata_label%' => $perfDataLabel));
			$payload_1 = strtr($payload_1, array('%perfdata_label_trunc%' => $perfDataLabelTrunc));
			$payload_1 = strtr($payload_1, array('%performanceLabel%' => $perfDataLabelTrunc));
			$payload_1 = strtr($payload_1, array('%host%' => $host["name"]));
			$payload_1 = strtr($payload_1, array('%service%' => "hostcheck"));
			$payload_1 = strtr($payload_1, array('%command%' => $host["check_command"]));
			$payload_1 = strtr($payload_1, array('"%id%"' => $panelId));
			$panelId++;
		}

		$payload_2 = file_get_contents("dashboards/templates/end.json");
		$payload_2 = json_decode($payload_2, true);
		$payload_1 = json_decode($payload_1, true);

		$tmp = $payload_1[0]["dashboard"] + $payload_2[0];
		$payload_1[0]["dashboard"] = $tmp;
		$payload_1 = $payload_1[0];
		$payload_1 = json_encode($payload_1);
		$payload_1 = strtr($payload_1, array('%hostname%' => $host["name"]));

		// Attach encoded JSON string to the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_1);
		// Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer ' . $grafana_api_token));
		
		// Return response instead of outputting
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Execute the POST request
		$result = curl_exec($ch);
		$result = json_decode($result, true);
		// Close cURL resource
		curl_close($ch);
		
		sql("lilac", "INSERT INTO nagios_host_custom_object_var (host, var_name, var_value) VALUES (?, 'DASHID', ?)", array($id[0][0], $result["uid"]));
	}
}

?>