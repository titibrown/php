<?php

/*Une Voiturepossède toujours un Moteur. Chaque moteur est caractérisé par une moteur et une vitesse maximale
exprimée en kilomètres par heure (km/h).Chaque moteur ne peut-être rattaché qu’à une seule Voiture.
Une Voiture peut accepter des Moteur de toutes marques.Unevoiture possède une opération qui permet de 
 la vitesse maximale de la Voiture. La vitesse maximale de la voiture est calculée selon la vitesse
  maximale du moteur et le poids de la voiture.Formulesimplifiéede calculde la 
vitesse maximale d’une voiture:Voiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 30%) */

class Moteur
{
    private string $_moteur; 
    private int $_maxSpeed;
    

    ################## CONSTRUCTOR ##################

    public function __construct(string $moteur, int $maxSpeed)
    {
        $this->setMoteur ($moteur);
        $this->setMaxSpeed ($maxSpeed);
    }

    ################## SETTERS ##################
    public function setMoteur ($moteur)
    {
        if (empty($moteur))
        {
            $this->_moteur = 'Indéfinie'; 
        }
        else
        {
            $this->_moteur = $moteur;
        }
    }

    public function setMaxSpeed(int $maxSpeed) : void
    {
        if (empty($maxSpeed) || $maxSpeed < 0)
        {
            $this->_maxSpeed = 0; 
        }
        else
        {
            $this->_maxSpeed = $maxSpeed;
        }
    }

    ################## GETTERS ##################
    public function GetMoteur() : string
    {
        return $this->_moteur;
    } 

    public function getMaxSpeed() : int
    {
        return $this->_maxSpeed;
    }

public function getMarque()
    {
        return $this->_moteur;
    }
)

}   