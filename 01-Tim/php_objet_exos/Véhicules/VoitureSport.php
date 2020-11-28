<?php


/* Une VoitureDeCourse est une Voiture performante. Elle diffère d’une voiture classiquespour 2 raisons:
   -Une VoitureDeCoursen’accepte que des Moteurs de même marque oUne Voituredecourse «Renault»accepte
    des Moteurs «Renault»uniquement.-La formule de calcul de la vitesse maximale de la Voiture de course est 
    différente:oVoiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 5%).Uneopération permettra de retournerles 
    informations complètes d’une voiture de course:ex:«Renault F1, 450 Kg. Vitesse max:317km/h.
 */


class VoitureSport extends Voiture {

 
   protected int $_maxspeedsport ;
   protected string $_configuration ;


public function __construct (int $maxspeedsport, string $configuration)
 {
  
  
   $this->setConfiguration($configuration);
   $this->setMaxSpeedSport($maxspeedsport);
 

  }

public function setConfiguration(string $_configuration)
{
   if ($moteur === $marque)
   {
      $this->_configuration = $_configuration;
   }else
   {
      echo "Vous disposer d'un modèle classique"
   }


}

public function getConfiguration() : string
{
   return $this->_configuration;
}


public function setMaxSpeedSport($maxspeedsport)
{
   Voiture.$this->$maxspeedsport=Moteur.vitesseMax-(Voiture.poidsx 5% 
}


}