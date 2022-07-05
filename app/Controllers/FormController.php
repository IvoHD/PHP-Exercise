<?php 

class FormController {

    public function form() {
        require 'app/Views/form.view.php';
    }

    public function validate() {
        $errorList = array();
        $hasInput = false;

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = trim($_POST['name']);
            $num_persons = trim($_POST['num_persons']);
            $phone =trim($_POST['phone']);
            $email =trim($_POST['email']);
            $shuttlebus = $_POST['shuttlebus'] ?? "";
            $hotel = $_POST['hotel'];
            $activity = $_POST['activity'];
            
            $hasInput = true;
        }

        if($_SERVER['REQUEST_METHOD'] == "GET"){
            $name = trim($_GET['name']);
            $email =trim($_GET['email']);
            $phone =trim($_GET['phone']);
            $num_persons = trim($_GET['num_persons']);
            $hotel = $_GET['hotel'] ?? "";
            $shuttlebus = $_GET['shuttlebus'];
            $activity = $_GET['activity'];

            $hasInput = true;
        }
        
        if($hasInput){
            if($name == "")
                array_push($errorList, "Bitte geben Sie einen Namen ein.");
            if($email == "")
                array_push($errorList, "Bitte geben Sie einen Email ein.");
            elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
                array_push($errorList, "Bitte geben Sie eine gültige Email adresse ein.");
            if($phone == "")
                array_push($errorList, "Bitte geben Sie einen Telefonnummer ein."); 
            elseif (!preg_match("/(\b(0041|0)|\B\+41)(\s?\(0\))?(\s)?[1-9]{2}(\s)?[0-9]{3}(\s)?[0-9]{2}(\s)?[0-9]{2}\b/", $phone)) 
                array_push($errorList, "Bitte geben Sie eine gültige Telefonnummer ein.");
            if($num_persons == "")
                array_push($errorList, "Bitte geben Sie die Anzahl teilnehmender Personen ein.");
            elseif(!filter_var($num_persons, FILTER_VALIDATE_INT))
            array_push($errorList, "Bitte geben Sie für die Anzahl eine ganzzahlige Zahl ein.");
            if($hotel == "")
                array_push($errorList, "Bitte wählen Sie ein Hotel für die Übernachtung aus.");
     
            if(Count($errorList) === 0) {
                echo "Daten erhalten";
            }
            else {
                foreach($errorList as $text)
                    echo $text . "<br>";
            }
        }
    }
}
    
?>