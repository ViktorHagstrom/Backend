<?php include_once('App.php');  ?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>

<body>
    <!-- TODO 
1. Importera json, skapa en klass i App
    main(), skriv ut bilder på index-sida
2. Lägg till all felhantering förutom limit
3. -->


    <!-- Header med 3 menyval
     Home(index) - Visar produkter
     About - Lorem Ipsum 
     Contact - E-post formulär
     Footer med kanske ett datum? copy? -->


    <!-- Bild ovanför header -->
    <!--      <div class="header">
  <h1>Header</h1>
  <p>My supercool header</p>
  <a href="?category=index"  class="list-group-item">Home</a>
          <a href="?category=about"  class="list-group-item">About</a>
          <a href="?category=contact"  class="list-group-item">Contact</a>
</div> -->

            <div class='row'>
          <img class='thumbnail' src='images/barista.jpg' style="height:800px;">
            
            </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  " id="navbarText">
               
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                
                
                <span class="navbar-text">
                    Två Hippa Killar
                </span>
               
               

            </div>

        </div>
        
    </nav>

    <div class="row justify-content-center">

        <div class="col-6">
            <?php
            App::main();
            ?>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>