<?php
include_once'Api.php';

header("Content-type: application/json; charset=UTF-8");

 $products = array();

for ($i=0; $i <10 ; $i++) { 
   
    $productObject = new Product($i);
    $product = $productObject->toArray();
    array_push($products,$product);
}
$json = json_encode($products,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $json; 



?>