<?php

$urls = [
    'URL1',
    'URL2',
    'URL3',
    'URL4',
]; 

// Data file 
$dataFile = './count.txt';

// Read the data file and parse it into an array
$index = file_exists($dataFile) ? file_get_contents($dataFile) : -1;
if($index + 1 >= count($urls)){
    $index = -1;
}
$index = $index + 1;

// Save document
file_put_contents($dataFile, $index);

// Visit the corresponding URL
$url = $urls[$index];
// echo $url;
header("Refresh: 0.1;url=https://$url");
exit();
