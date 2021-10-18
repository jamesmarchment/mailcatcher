<?php

$file = "log.csv";
if(is_file($file)){
// file exists
$csv = fopen($file, "a");
}else { 
// file does not exist, create file
$csv =fopen($file, "a");

// create headers on first line to identify columns
$columnNames = array();
foreach($_POST as $key=>$value){
$columnNames[] = $key;
}
fputcsv($csv, $columnNames);
}

fputcsv($csv, $_POST);
fclose($csv);

var_dump($_POST);



?>