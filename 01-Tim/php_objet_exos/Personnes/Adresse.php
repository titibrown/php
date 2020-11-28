<?php


class Adresse  {

    private int $_numero;
    private string $_rue;
    private string $_codepostal;
    private string $_commune;
    private string $_bis;


    public function __construct(int $numero,string $rue,string $codepostal, string $commune, string $bis = '')
    {
    
        $this->setNumero($numero);
        $this->setRue($rue);
        $this->setCodePostal($codepostal);
        $this->setCommune($commune);
        
    }

   ################## GETTERS ##################

    Public function getNumero() : int
    {

        return $this->_numero;

    }

    public function getRue()  : string 
    {

        return $this->_rue;
    }

    public function getCodePostal() : string
    {
        
        return $this->_codepostal;
    }

    public function getCommune() : string
    {

        return $this->_commune;
    }


   ################## SETTERS ##################


    public function setNumero(int $numero)
    {
        if(empty($numero))
        {
            $this->_numero =' Le numéro de rue est vide';
        }else
        {
            $this->_numero = $numero;
        }

    }

    public function setRue(string $rue)
    {
        if(empty($rue))
        {
            $this->_rue =' Le nom de la rue est vide';
                
        }else
        {
            $this->_rue = $rue;
        }
    }
    public function setCodePostal (string $_codepostal)
    {
        if (preg_match (" /^[0-9]{3,6}[a-z]/ ", $codepostal)) // / debut regex
        throw new Exception ("Code postal invalide")
        
        }else
        {
            $this->_codepostal = $codepostal;
        }

    }

    public function setCommune (string $_commune)
    {
        if(empty($commune))
        {
            $this->_commune='la commune est vide'
        }else
        {
            $this->_commune = $commune;
        }
    }
    
    }
    #######Get Info ###########


    public function getInfoAdresse (int $numero,string $rue, string $codepostal,string $commune)
    {

        $info = '  ' . $numéro . ' ' . $rue . ' ' . $codepostal . ' ' . $commune .;
        
        return $info;
    }
    
        

    }
}
}
