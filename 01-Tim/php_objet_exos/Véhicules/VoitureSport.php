<?php


/* Une VoitureDeCourse est une Voiture performante. Elle diffère d’une voiture classiquespour 2 raisons:
   -Une VoitureDeCoursen’accepte que des Moteurs de même marque oUne Voituredecourse «Renault»accepte
    des Moteurs «Renault»uniquement.-La formule de calcul de la vitesse maximale de la Voiture de course est 
    différente:oVoiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 5%).Uneopération permettra de retournerles 
    informations complètes d’une voiture de course:ex:«Renault F1, 450 Kg. Vitesse max:317km/h.
 */


class VoitureSport extends Voiture 
{

   public function __construct (string $marque, string $modele, string $poids, Moteur $moteur, int $maxSpeed)
   {   
      parent::__construct($marque, $modele, $poids, $moteur, $maxSpeed, $poids);
   
      if($this->_marque !== $this->_moteur->getMarque()) {
         throw new Exception("La marque de la voiture et du moteurs sont différents");
      }
   }


   public function getMaxSpeed() : int
   {
      return $this->_moteur->getMaxSpeed() - ($this->getPoids() * 5 / 100);
   }


}