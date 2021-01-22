
    <?php

    class App
    {
        private static  $endpoint = 'http://localhost/Inl%C3%A4mningar/webshop/Api.php';
        public static function Main()
        {
            //metodanrop här
            try {
                $array = self::getData();

                self::viewData($array);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        //Getdata

        public static function getData()
        {

            $json = @file_get_contents(self::$endpoint);
            if (!$json)
                throw new Exception('Ingen access till slutpunkten ' . self::$endpoint);
            return json_decode($json, true);
        }

        //Viewdata
        // Lägg till en isset(category) för index, about och contact
        // skriv ut about och contact här nedan. 
        public static function viewData($array)
        {

            $list = "<ol> <div class='row'>";
            foreach ($array as $key => $value) {

                $list .= "
                <div class=' col-sm-6 col-md-4 col-lg-3 col-xl-2 card' style='width: 20rem;height 18rem;'>
                <img class=' img-thumbnail' style='height: 18rem;'  src='images/$value[image]' alt='$value[name]' '>

                <div class='card-body'>
               <h5 class='card-title' style ='text-align:center;'>$value[name]</h5>

               <div style = 'text-align:center;'>
               <button type='button' class='btn btn-primary' data-toggle='modal' data-target=#modal$key>
                   Läs mer
               </button>
               </div>

               <div class='bottom_aligner' style='text-align: center;'>
               <p>$value[price]kr/kg</p>
               </div>
               
               <!-- Modal -->
               <div class='modal fade' id=modal$key tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
               <div class='modal-dialog' role='document'>
                   <div class='modal-content'>
                   <div class='modal-header'>
                       <h5 class='modal-name' id='exampleModalLabel'>$value[name]</h5>
                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                       <span aria-hidden='true'>&times;</span>
                       </button>
                   </div>
                   <div class='modal-body'>
                   <div>
                   <img class = 'img-thumbnail'src='images/$value[image]' alt='$value[name]' '>
                   </div>
                   <p>$value[description]</p>
                   
                      
                   </div>
                   <div style ='text-align:center;'>
                       <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                       
                   </div></div></div></div></div></div>
                    ";
            }

            $list .= '</div> </ol>';  // row
            echo $list;
        }

        // viewAbout
        /*
public function viewAbout(){
    $about = "<h1>Lorem, ipsum dolor.</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis hic facilis, quibusdam ullam aperiam? Itaque laborum possimus aspernatur perspiciatis laudantium sit delectus ipsam vero facilis alias. Illo et totam numquam, error maiores mollitia voluptates excepturi temporibus inventore? Pariatur, architecto.</p>";

    echo $about;
}
// Viewcontact
public function viewContact(){
    $contact ="<form action=''>
    Ditt Namn: <input type='text'>
    Din Epost: <input type='email'>
    Skriv din fråga <textarea name='#' id='#' cols='30' rows='10'></textarea>
    </form>";

    echo $contact;
}
*/
    }
    ?>
 