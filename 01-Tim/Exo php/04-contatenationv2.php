<?php

// concatenationV2


//$firstname = ("Timothy") ;
//$lastname = ("Brown");
//$lastname = strtoupper($lastname);
//$firstname =ucfirst($firstname);
//echo  $firstname. " " .$lastname;


function concatenationV2 ($lastname, $firstname){


    return strtoupper($lastname) . " " .strtolower ($firstname);
}

echo concatenationV2('Brown','Timothy')


?>