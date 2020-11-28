<?php



function PasswordLength( string $password ) 
{

if (strlen($password) >= 8){
    return true;



}
else{


    return false;
}

}




?>