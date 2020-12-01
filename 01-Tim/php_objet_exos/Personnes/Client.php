<?php 


require 'Adresse.php';


'
/**
 * Classe client  
 * 
 * Cette classe représente un client
 * Exemple d'utilisation : 
 * $client  = new client ('nom', 'prenom', nex DateTime('2020-11-01'));
 * 
 * @author Tim
 * @version 0.0.1
 * @abstract
 * @copyright 2020 Tim, inc
 * @license MIT
 * Copyright 2020 <Tim, inc>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * 
 */


/* Consigne : Enrichissez la représentation précédente pour prendre en compte ces nouveaux éléments :
Un Client est une client  identifiée par un numéro de client et une adresse. Une adresse est caractérisée par un numéro de
rue, un nom de rue, un code postal et un nom de commune. Le numéro de client est défini à la construction de l’objet et n’est
plus modifiable ensuite.
  */

class Client extends Personne
{
    
    /** @var int */
    private int $_id;
    
    private Adresse $adresse;
    
    /**@var int */

    public function __construct(int $id, string $info)
    {

        

        $this->setId($id);

        $this->getInfo($info);


    }

    public function getId() : int
    {
        return self::$_id;

    }

   /* public function getAdresse() :string
    {

        return $this->_adresse ;

    }*/

    static function setId(int $id) 
    {

        self::$_id++;

    }


    /* public function __toString($adresse)
    {

        return $this->_adresse;
        
     }
        
    public function getInfo (int $id,string $nom, string $prenom,string $adresse)
    {

        $info = "Le client numéro $this->_id  $this->_prenom $this->_nom possède l'adresse suivant $this->_adresse ";
        

    }
    
        return $info;

    } */

  }


    



}