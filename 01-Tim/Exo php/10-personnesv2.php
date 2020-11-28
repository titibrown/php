<?php


$age= 48;
$annee= $retraite-$age ;

function CalculRetraite (int $age){
    
    $retraite = 60;

    if ($age < 0) {
        echo 'Wtf Dude, you are not even born yet';
    }

    else if ($age === $retraite){

        return 'Congrats it s over' ;
    }
    
}

?>