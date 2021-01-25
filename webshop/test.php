<?php 

include_once('App.php');

/* $array =array("error"=>"Limit must be between 1 and 10");
$json = json_encode($array,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
$json = json_decode($json,true); */

$url = "http://localhost/Inl%C3%A4mningar/webshop/Api.php?limit=54";
$json = file_get_contents($url);
$array = json_decode($json,true);

// print_r ($json);
echo App::checkData($array);

?>