<?php


$age = 38;
$name= 'Gina';

function majorite (int $age){
   
    if ($age >= 18){

        return " $name Vous êtes Majeur";
    }
    
    else {
    
    return "Sorry vous êtes Mineur " ;

}


}

?>