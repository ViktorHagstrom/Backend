
    <?php

    class App
    {
        private static  $endpoint = 'http://localhost/Inl%C3%A4mningar/webshop/Api.php';



        public static function Main($limit)
        {
            //metodanrop här


            self::$endpoint = self::$endpoint . "?limit=$limit";

            try {

                $array = self::getData();

                if (self::checkData($array) == true) {
                    self::viewData($array);
                } else {
                    self::$endpoint = "http://localhost/Inl%C3%A4mningar/webshop/Api.php";
                    $array = self::getData();
                    self::viewData($array);
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        //Testa om json innehåller ett värde
        public static function checkData($array)
        {
            foreach ($array as $sub_array) {
                if (@$sub_array['error']) {
                    return false;
                    break;
                }
                return true;
            }
        }

        //Getdata

        public static function getData()
        {
            $json = @file_get_contents(self::$endpoint);
            if (!$json) {
                throw new Exception('Ingen access till slutpunkten ' . self::$endpoint);
            }

            return json_decode($json, true);
        }

        //Viewdata
        // Lägg till en isset(category) för index, about och contact
        // skriv ut about och contact här nedan. 
        public static function viewData($array)
        {

            $list = "<div class='row'>";

            foreach ($array as $key => $value) {

                $list .= "             
<!-- Card -->
<div class=' col-sm-6 col-md-4 col-lg-3 col-xl-2 card bg-light mb-3 border-dark mb-3' style='width: 20rem;height 18rem;'>
                    <img class=' img-thumbnail' style='height: 18rem;'  src='images/$value[image]' alt='$value[name]' '>
                   
    <!-- Card-body -->
    <div class='card-body'>
                   <h5 class='card-title' style ='text-align:center;'>$value[name]</h5>
    
                   <!-- Läs mer -->
                   <div style = 'text-align:center;'><button type='button' class='btn btn-outline-dark' data-toggle='modal' data-target=#modal$key>Läs mer</button></div> 
    
                   <!-- Pris -->
                   <div class='bottom_aligner' style='text-align: center;'><p>$value[price]kr/kg</p></div> 
                   
        <!-- Modal -->
        <div class='modal fade' id=modal$key tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>

            <div class='modal-dialog' role='document'>

                <div class='modal-content'>

                    <div class='modal-header'>
                        <h5 class='modal-name' id='exampleModalLabel' '>$value[name] </h5>
                                            <!-- Stäng(Kryssa ner) Modal -->
                        <button type='button' class='close btn btn-outline-dark' data-dismiss='modal' aria-label='close'><span aria-hidden='true'>&times;</span></button>
                    </div> <!-- Modal Header-->

                       <div class='modal-body'>
                                                <!-- Bild i Modal -->
                                <div> <img class = 'img-thumbnail'src='images/$value[image]' alt='$value[name]' '></div>
                            <p style ='text-align:center;'>$value[description]</p>
                            <p style ='text-align:center;'>Kvar i lager: $value[storage]kg</p>    

                        </div> <!-- ModalBody -->
                                                <!-- Stäng Modal -->
                            <div style ='text-align:center;'><button type='button' class='btn btn-outline-dark' data-dismiss='modal'>Stäng</button></div>
                </div> <!-- Modal content -->
            </div> <!-- Modal Dialog-->
        </div> <!-- Modal -->
    </div> <!-- Card Body -->
</div> <!-- Card -->
                ";}
                $list .= '</div> ';  // row
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
 