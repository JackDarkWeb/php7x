<?php
use heritage\Actions;
//use heritage\Values;
use heritage\Emprunt;


require 'action.php';
require 'Actions.php';
require 'Emprunt.php';


use objects\action;
/**use heritage\Actions;
use heritage\Valeur;
use heritage\Emprunt;**/

echo action::PARIS."<br/>";

// instance

$action = "objects\action";
$test = new $action('Mont', "25");
if($test instanceof $action){

    echo "\$test est une instance de la class {$action}";
}else{

    echo "\$test n'est une instance de la class {$action}";
}

echo "<hr>";

echo $test->nom," est ";
echo "ouvert de {$test->bourse[1]} à {$test->bourse[2]} <br/>";

echo "<hr/>";

$client = "Jack";
$montendi = new action("Montendi", "2.15");
$montendi->nom = "Montendi";
$montendi->cours = 1.76;
$montendi->info();

echo action::test(3),"<br/>";
echo "Apres modification de la valeur  static pi<br/>";
action::$pi = 3.145;
echo action::test(3)," et pi a nouveau est  = ".action::$pi."<br/>";

echo "<hr/>";

$static = new action("Static", "1.23");
$static->pi = 10.1452;
echo "\$static->pi : ",$static->pi,"<hr/>";

echo "\$static->test() : ",$static->test(3);

echo "<hr/>";

echo "<h2>Ajouter des proprietes dynamiquement</h2>";

$add_propriete = new action("ajouter propriete", "0.25");
$add_propriete->date = "2019";
var_dump($add_propriete);

echo "<hr/>";
echo "<h2>Heritage des classes</h2>";

$action1 = new action("Alcatel", 9.76);
echo $action1->info();

$action2 = new Actions("BMI", 23.75, "New York");
echo $action2->getinfo();

$emprunt = new Emprunt("EdF", 1000, 4.5, 2021);
echo $emprunt->getinfo();



