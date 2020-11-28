<?php

$tableau = array('Reda','John','dahoud','Tim');

function PremierElementTableau (array $tableau){

    

    if(empty($tableau)){

        echo null;
    }
    else{

return $tableau[0];

    }

    echo $tableau;
}



?>