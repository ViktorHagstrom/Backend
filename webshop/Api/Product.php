<?php
include_once('arrays.php');

class Product{

    private $name;
    private $storage;
    private $description;
    private $image;
    private $price;
     
public function __construct($index){

    $this->storage = rand(1,50);
    $this->name= self::getName($index);
    $this->image = self::getImage($index); 
    $this->description = self::getDescription($index); 
    $this->price = self::getPrice($index);    
}
public static function getName($index){
  
    $name = $GLOBALS['nameArray'][$index];
    return $name;
}
public static function getImage($index){
     
    $image = $GLOBALS['imageArray'][$index];
    return $image;
}
public static function getDescription($index){
   
    $description = $GLOBALS['descriptionArray'][$index];
    return $description;
}
public static function getPrice($index){
   
    $price = $GLOBALS['priceArray'][$index];
    return $price;
}  
public function toArray(){
    
    $array = array(
        "name"          => $this->name,
        "storage"       => $this->storage,
        "image"         => $this->image,
        "description"   => $this->description,
        "price"         => $this->price
    );
    return $array;
}

}
