<?php

require'Moteurs.php';

class Voiture{
   protected string $_marque;
   protected string $_modele;
   protected string $_poids;
   private Moteur $_moteur;
   // protected int $_maxspeed ;

   ################## CONSTRUCTOR ##################
   public function __construct (string $marque, string $modele, int $poids, string $marqueMoteur, int $maxSpeed)
    {
      $this->SetMarque($marque);
      $this->SetModele($modele);
      $this->SetPoids($poids);
      $this->SetMoteur($marqueMoteur, $maxSpeed);
   }

   ################## SETTERS ##################
   public function SetMarque (string $marque)
   {
      if (empty($marque)){
         $this->_marque = 'Cette marque est inconnue'; 
      }
      else {
         $this->_marque = $marque;
      }
   }

   public function SetModele(string $modele)
   {
      if (empty($modele)){
         $this->_modele = 'Le modèle en question ne peut être trouvé ';
      }
      else {
         $this->_modele= $modele;
      }
   }

   public function SetPoids(int $poids)
   {
      if (empty($poids)){
         $this->_poids = 1000;
      } 
      else 
      {
         $this->poids = $poids;
      }
   }
   
   public function SetMoteur(string $marqueMoteur, int $maxSpeed)
   {
      $this->
   }

   ################## GETTERS ##################
   public function GetMarque() : string
   {
      return $this->_marque;
   }

   public function GetModele() : string
   {
      return $this->_modele;
   }

   public function GetPoids() : int
   {
      return $this->_poids;
   }

   ################## METHODS ##################
   public function GetInfo()
   {
      return "Marque : $this->_marque\nModele : $this->_modele\nPoids : $this->_poids";
   }
}

#Consignes

/*  Une Voiture  est caractérisée  par  une  marque  et  un  modèle.  Il  est  également  possible  de  définir  le poids
du  véhiculeen kilogrammesmais ce n’est pas obligatoire(dans ce cas, le poids par défaut d’une voiture est 1000 Kg).
Une opération permet de retourner l’ensemble des informations(ex:«Renault Mégane, 750 Kg»).Tous les attributs 
sont «protected»et sont disponiblesvia desaccesseurspublics(«getters»et «setters»)

Une Voiturepossède toujours un Moteur. Chaque moteur est caractériséparune marque et une vitesse maximale
exprimée en kilomètres par heure (km/h).Chaque moteur ne peut-être rattaché qu’à une seule Voiture.
Une Voiture peut accepter des Moteur de toutes marques.Unevoiture possède une opération qui permet de 
 la vitesse maximale de la Voiture. La vitesse maximale de la voiture est calculée selon la vitesse
  maximale du moteur et le poids de la voiture.Formulesimplifiéede calculde la 
vitesse maximale d’une voiture:Voiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 30%)

Une VoitureDeCourse est une Voiture performante. Elle diffère d’une voiture classiquespour 2 raisons:
   -Une VoitureDeCoursen’accepte que des Moteurs de même marque oUne Voituredecourse «Renault»accepte
    des Moteurs «Renault»uniquement.-La formule de calcul de la vitesse maximale de la Voiture de course est 
    différente:oVoiture.vitesseMax=Moteur.vitesseMax-(Voiture.poidsx 5%).Uneopération permettra de retournerles 
    informations complètes d’une voiture de course:ex:«Renault F1, 450 Kg. Vitesse max:317km/h.


*/


        //  $this->Voiture.maxspeed=Moteur.vitesseMax-(Voiture.poidsx 30%)













?>


