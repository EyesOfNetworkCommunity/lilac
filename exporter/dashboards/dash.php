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

include_once("/srv/eyesofnetwork/eonweb/include/config.php");
include_once("/srv/eyesofnetwork/eonweb/include/function.php");

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

	$payload = '{"object" : "hosts","columns" : ["name", "services"]}';
	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Execute the POST request
	$result = curl_exec($ch);

	$arr = json_decode($result, true);

	// Close cURL resource
	curl_close($ch);
	sql("lilac", "DELETE FROM nagios_host_custom_object_var WHERE var_name = 'DASHID'");

	foreach($arr["result"]["default"] as $host) {

		// Close cURL resource
		curl_close($ch);

		// API URL
		$url = 'http://127.0.0.1:3000/api/dashboards/db';

		// Create a new cURL resource
		$ch = curl_init($url);

		// Setup request to send json via POST
		$payload_1 = file_get_contents("dashboards/templates/start.json");
		
		foreach($host["services"] as $service) {
			$s = false;
			switch ($service) {
				case "processor":
					$payload_2 = file_get_contents("dashboards/templates/processor.json");
					$s = true;
					break;
				case "interfaces":
					$payload_2 = file_get_contents("dashboards/templates/interfaces.json");
					$s = true;
					break;
				case "memory":
					$payload_2 = file_get_contents("dashboards/templates/memory.json");
					$s = true;
					break;
				case "partitions":
					$payload_2 = file_get_contents("dashboards/templates/partitions.json");
					$s = true;
					break;
			}
			if($s == true) {
				$payload_1 = json_decode($payload_1, true);
				$payload_2 = json_decode($payload_2, true);
				foreach($payload_2 as $pan) {
					array_push($payload_1[0]["dashboard"]["panels"], $pan);
				}
				$payload_1 = json_encode($payload_1);
				$payload_1 = strtr($payload_1, array('%service%' => $service));
			}
		}

		$payload_2 = file_get_contents("dashboards/templates/hostcheck.json");
		$payload_2 = json_decode($payload_2, true);
		$payload_1 = json_decode($payload_1, true);

		foreach($payload_2 as $pan) {
			array_push($payload_1[0]["dashboard"]["panels"], $pan);
		}

		$payload_2 = file_get_contents("dashboards/templates/end.json");
		$payload_2 = json_decode($payload_2, true);

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

		$id = sql("lilac", "SELECT id FROM nagios_host WHERE name = ?", array($host["name"]));
		sql("lilac", "INSERT INTO nagios_host_custom_object_var (host, var_name, var_value) VALUES (?, 'DASHID', ?)", array($id[0][0], $result["uid"]));
	}
  
}

?>