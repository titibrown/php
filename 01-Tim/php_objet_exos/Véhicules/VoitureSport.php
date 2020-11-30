<?php


/* Une VoitureDeCourse est une Voiture performante. Elle diffère d’une voiture classiquespour 2 raisons:
   -Une VoitureDeCoursen’accepte que des Moteurs de même marque oUne Voituredecourse «Renault»accepte
    des Moteurs «Renault»uniquement.-La formule de calcul de la vitesse maximale de la Voiture de course est 
    différente:oVoiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 5%).Uneopération permettra de retournerles 
    informations complètes d’une voiture de course:ex:«Renault F1, 450 Kg. Vitesse max:317km/h.
 */


class VoitureSport extends Voiture {

 private string $_configuration


public function __construct (string $marque, string $modele, string $, int $maxSpeed, int $poids)
 {
  
   parents__construct(string $marque,string $modele, string $poids, $maxSpeed, $poids);
  
   $this->setConfiguration($configuration);


  }

public function setConfiguration(string $configuration)
{
   if ($marqueMoteur === $marque)
   {
      $this->_configuration = $configuration;
   }else
   {
      echo "Vous disposer d'un modèle classique contenant un moteur de marque différente de celui de votre voiture  "
   }


}

public function getConfiguration() : string
{
   return $this->_configuration;
}


public function getMaxSpeed() : int
{
   return $this->Moteur->getMaxSpeed() - ($this->getPoids() * 5 / 100);
}


}