<?php 

class BeerController {
    public function beer(){
        require 'app/Views/beer.view.php';

        for($i = 99; $i > 0; $i--)
            echo $i . " bottle" . (($i == 1) ? "" : "s") . " of beer on the wall, " . $i . " bottle" . (($i == 1) ? "" : "s") . " of beer. <br>
            Take one down and pass it around, " .  (($i - 1 > 0) ? $i - 1 : "no more ") . " bottle" . (($i == 1) ? "" : "s") . " of beer on the wall.<br><br>";


        echo "No more bottles of beer on the wall, no more bottles of beer. <br>
        Go to the store and buy some more, 99 bottles of beer on the wall.";
    }
}

?>