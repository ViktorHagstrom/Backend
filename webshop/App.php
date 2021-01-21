<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <?php
     $url = 'http://localhost/Inl%c3%a4mningar/webshop/start.php';
     $json =file_get_contents($url);
     $data = json_decode($json,true);

     /* echo '<pre>';
     print_r($data);
     echo '</pre>'; */

     foreach ($data as $key => $value) {
         //print_r($value['image']) ;
         $bild = "<img src='images/$value[image]' alt='Girl in a jacket'>";
         echo $value['description'];
         echo $bild;
     }
     /* echo "<img src='/Inlämningar/webshop/images/victoria.PNG' alt='Girl in a jacket'>";
 */
     



    ?>
    <!-- <img src="/Inlämningar/webshop/images/victoria.PNG" alt=""> -->
</body>
</html>