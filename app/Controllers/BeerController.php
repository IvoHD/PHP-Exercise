<?php 

class BeerController {
    public function beer(){
        require 'app/Views/beer.view.php';

        for($i = 99; $i > -1; $i--)
        echo $i . " bottles of beer on the wall, " . $i . " bottles of beer. <br>
        Take one down and pass it around, " .  (($i - 1 > 0) ? $i - 1 : "No more ") . " bottles of beer on the wall.<br><br>"
        ;
    }
}

?>