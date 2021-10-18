<?php

$file = "log.csv";

// check if there is an existing log file
if(is_file($file)){
	// file exists
$csv = fopen($file, "a");
}else { 
	// file does not exist, create file
$csv =fopen($file, "a");
	// create headers on first line to identify columns
	$columnNames = array();
	// make array of keys
	foreach($_POST as $key=>$value){
		$columnNames[] = $key;
			}
	// write as first line of CSV
	fputcsv($csv, $columnNames);
}

// write submitted data to CSV
fputcsv($csv, $_POST);

fclose($csv);
var_dump($_POST);

?>