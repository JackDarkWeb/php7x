<?php

namespace objects;
class action
{

   const PARIS = "Palais Brognard";
   const NEWYORK = "Wall Street";

   public $nom;
   public $cours;
   public $bourse = array("Paris", "9h00", "18h00");

   public static $pi = 3.14;

   public function __construct($nom, $cours)
   {
       $this->nom = $nom;
       $this->cours = $cours;
   }

    public function info(){
       global $client;

       echo "<h2>Bonjour $client, vous êtes sur le serveur {$_SERVER["HTTP_HOST"]}</h2>";
       echo "<h3>Informations en date du ", date("d/m/Y H:i:s"),"</h3>";
       echo "<h3>Bourse de {$this->bourse[0]} cotations de {$this->bourse[1]} à {$this->bourse[2]}</h3>";

       //Informations sur les horaires d ouverture

       $now = getdate();
       //var_dump($now); die(1);
       $hour = $now["hours"];
       $day  = $now["wday"];

       echo "<hr/>";
       echo "<h3>Heures des cotations</h3>";

       if(($hour >= 9 && $hour <= 17) && ($day != 0 && $day != 6)){

            echo "La bourse de Paris (",self::PARIS,") est ouvert <br/>";
       }else{

           echo "La bourse de Paris (",self::PARIS,") est fermée <br/>";
       }
       if(($hour >= 16 && $hour <= 23) && ($day != 0 && $day != 6)){

            echo "La bourse de New York (",self::NEWYORK,") est ouvert <hr/>";
       }else{

           echo "La bourse de New York (",self::NEWYORK,") est fermée <hr/>";
       }

       //Affiche du cours

       if(isset($this->nom) && isset($this->cours)){

           echo "<b>L'action $this->nom cotée à la bourse de {$this->bourse[0]} vaut $this->cours &euro;</b><br/>";
       }
    }

    static function test($var){
        return $var*self::$pi;
    }
}





