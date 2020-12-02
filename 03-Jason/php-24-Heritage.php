<?php

/*  Héritage */

class Mere
{

    protected $_name;

    public function __construct ($name)
    {
        $this->_name= $name;
    }

    public function hello()
    {
        echo 'coucou, je suis la Mere : '.$this->_name;
    }
}

// Final = Stop l'héritage apres Fille 

class fille extends Mere
{
    private $_otherName;

    public function __construct($name,$otherName){
        parent::__construct($name);
        $this->_otherName=$otherName
    }
    public function hello()
    {
        echo 'Je suius la fille : ' .$this->_name.' '.$this->_otherName. '<br>';
    } 

}


$mama = new Mere ('Katie');
$mama->hello();


$fifille = new Fille('maude', 'anissa');
$fifille->hello();


?>