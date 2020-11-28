<?php

/*Une Voiturepossède toujours un Moteur. Chaque moteur est caractérisé par une moteur et une vitesse maximale
exprimée en kilomètres par heure (km/h).Chaque moteur ne peut-être rattaché qu’à une seule Voiture.
Une Voiture peut accepter des Moteur de toutes marques.Unevoiture possède une opération qui permet de 
 la vitesse maximale de la Voiture. La vitesse maximale de la voiture est calculée selon la vitesse
  maximale du moteur et le poids de la voiture.Formulesimplifiéede calculde la 
vitesse maximale d’une voiture:Voiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 30%) */

class Moteur
{
    private string $_marqueMoteur; 
    private int $_maxSpeed;

    ################## CONSTRUCTOR ##################

    public function __construct(string $marqueMoteur, int $maxSpeed)
    {
        $this->setMoteur ($marqueMoteur);
        $this->setMaxSpeed ($maxSpeed);
    }

    ################## SETTERS ##################
    public function setMoteur ($marqueMoteur)
    {
        if (empty($marqueMoteur))
        {s
            $this->_marqueMoteur = 'Indéfinie'; 
        }
        else
        {
            $this->_marqueMoteur = $marqueMoteur;
        }
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        if (empty($maxSpeed) || $maxSpeed < 0)
        {
            $this->_maxSpeeed = 0; 
        }
        else
        {
            $this->_maxSpeeed = $maxSpeed;
        }
    }

    ################## GETTERS ##################
    public function GetMoteur() : string
    {
        return $this->_marqueMoteur;
    } 

    public function getMaxSpeed() : int
    {
        return $this->_maxSpeed;
    }
}   