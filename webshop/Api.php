<?php
include_once'Product.php';

header('Content-type: application/json; charset=UTF-8');

$limit = isset($_GET['limit']) ? $_GET['limit'] : 10;

$min = 1;
$max = 10;

if (filter_var($limit, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {

  $products = array("error"=>"Limit must be between 1 and 10");
  
} else {
  
  $products = array();

  for ($i=0; $i <$limit; $i++) { 
     
    $productObject = new Product($i);
    $product = $productObject->toArray();
    array_push($products,$product);
  }
  
}
$json = json_encode($products,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
  echo $json; 
    
?>