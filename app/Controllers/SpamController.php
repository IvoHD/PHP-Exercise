<?php

class SpamController
{
	public function index()
	{	
		require 'app/Views/spam.view.php';

        $input = [
            'Neue Aktionen von Ihrem Computerteile-Händler.',
            'Vergrössern Sie jetzt ihr SPAM mit SPAM.',
            'SPAM kann ihnen dabei helfen wieder ruhig zu schlafen.',
            'Kennen Sie Justin Bieber? Finden Sie andere Singles in Ihrer Nähe.',
            'Wenn spam zum Problem wird, haben Sie ein Problem.'
        ];
        
        foreach( $input as $index => $sentence) {
            echo "Satz {$index} ist ";
            if(strpos($sentence, "SPAM") === false)
                echo "OK <br>";
            else 
                echo "SPAM <br>";
                
        }
        // ValidateSpam();
	}
	
    public function ValidateSpam(){
       
    }
}

?>