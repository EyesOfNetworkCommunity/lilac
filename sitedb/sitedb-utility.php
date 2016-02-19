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
include_once("sitedb/sitedb-general.php");

	function compare($a_aRow1, $a_aRow2, $a_lField = 0)
	{	
		GLOBAL $g_aaSortArray;

		$lCompareVal = 0;

		if ($a_lField < count($g_aaSortArray))
		{
			$sSortFieldName = $g_aaSortArray[$a_lField]['name'];
			$sSortFieldDir = $g_aaSortArray[$a_lField]['dir'];

			$vValue1 = eval('return $a_aRow1[' . $sSortFieldName . '];');
			$vValue2 = eval('return $a_aRow2[' . $sSortFieldName . '];');

			if ($vValue1 == $vValue2)
				$lCompareVal = compare($a_aRow1, $a_aRow2, $a_lField + 1);
			else
			{
				$lCompareVal = strtolower($vValue1) > strtolower($vValue2) ? 1 : -1;
				if (strtolower(substr($sSortFieldDir, 0, 4)) == 'desc')
					$lCompareVal = -$lCompareVal;
			}
		}

		return $lCompareVal;
	}

function convert_to_slash_date(&$the_date)
{

	$year = strtok($the_date,"-");
	$month = strtok("-");
	$day = strtok("-");
	
	$the_date = "$month/$day/$year";
}

function convert_to_sql_date(&$the_date)
{
	$month = strtok($the_date,"/");
	$day = strtok("/");
	$year = strtok("/");
	$the_date = "$year-$month-$day";
}

// doesn't seem to work
function array_csort() {  //coded by Ichier2003
  $args = func_get_args();
   $marray = array_shift($args);

  $msortline = "return(array_multisort(";
   foreach ($args as $arg) {
       $i++;
       if (is_string($arg)) {
          foreach ($marray as $row) {
               $sortarr[$i][] = $row[$arg];
           }
       } else {
          $sortarr[$i] = $arg;
       }
       $msortline .= "\$sortarr[".$i."],";
   }
   $msortline .= "\$marray));";

   eval($msortline);
   return $marray;
}
// Function: csort
// This was taken directly from a php.net manual comment
// on the array_multisort function
// dkampkas@ix.urz.uni-heidelberg.de
function csort(&$array, $column,$sort_order=ASC){    
 /*$i=0;
for($i=0; $i<count($array); $i++){
  $sortarr[]=$array[$i][$column];
 }
 
array_multisort($sortarr, $sort_order,SORT_STRING, $array);  
   
return($array);
*/
	sortRows($array,array(array('name' => $column, 'dir' => $sort_order)));
}

function sortRows(&$a_aaRows, $a_aaSortCriteria)
{
	GLOBAL $g_aaSortArray;
	
	$g_aaSortArray = $a_aaSortCriteria;
	usort($a_aaRows, 'compare');
}

function checkdateformat($datestring) {
	if(strlen($datestring) < 8 || strlen($datestring) > 12)
		return 0;
	// Tokenize and check
	$token = strtok($datestring,"/");
	$year = $token;
	$token = strtok("/");
	$month = $token;
	$token = strtok("/");
	$day = $token;

	if(strlen($month) < 1 || strlen($day) < 1 || strlen($year) <> 4)
		return 0;
	return 1;	// It's a miracle, we got here!
}
?>
