<?php 

class PixelController {
    public function pixel () {
        require 'app/Views/pixel.view.php';

        $cols = $_GET['cols'] ?? 4;
        $rows = $_GET['rows'] ?? 4;
        $array =  $_GET['pixels'] ?? [];
        if($this->ValidateParameter($cols, $rows)){
            echo "<table>";
            for($i = 0; $i < $cols; $i++){
                echo "<tr>";
                    for($j = 0; $j < $rows; $j++)
                        if(in_array($i + 1 . "|" . $j + 1, $array))
                            echo "<td id=\"{$i}{$j}\" class=\"mark\"> </td>";
                        else
                            echo "<td id=\"{$i}{$j}\"> </td>";
                echo "</tr>";
            }
    
            echo "</table>";
            
            $this->Mark($array);
        }
        else
            echo "wrong parameters";

       
    }    

    function ValidateParameter($cols, $rows) {
        if((int) $cols != $cols || (int)$rows != $rows)
            return false;
        
        if($cols > 60 || $rows > 60)
            return false;

        if($cols < 1 || $rows < 1)
            return false;

        return true;
    }

    function Mark($array) {
        $dom = new DOMDocument;
        $dom->LoadHTMLFile('app/Views/pixel.view.php');

        // foreach($array as $id){
        //     $cell = $dom->getElementByID("{$id[0]}{$id[2]}")
        // }
    }
}

?>