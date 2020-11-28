<?php 

require 'Client.php';
require 'Intervenant.php';

class Intervention 
{
    
private DateTime $_datetime;
private string $_description;

public function __construct(DateTime $datetime, string $_description )
{
 $this->setDateTime($datetime);
 $this->setDescription($description);


}


public function setDateTime(Datetime $datetime)
{
    $this->_datetime = $datetime;
}


public function setDescription(string $_description) 
{
    $this->_description = $description;
}



public function getDateTime() : getDateTime
{
    return $this->_datetime;
}

public function getDescription () : string
{
    return $this->_descritpion;
}


}