<?php
$tab_asso1 = array("Paris" => "75", "Lyon" => "69", "Marseille" => "13");
$tab_asso2 = array("Nantes" => "44", "Orleans" => "45", "Tours" => "37", "Paris" => "Capitale");

$var1 = ["Jack", "jack@yahoo.fr", 28, "+33663072142"];
$var2 = ["Paul", "paul@yahoo.fr", 28, "+33663072152"];

echo "<h3>Table associatif</h3>";
$tab = array_merge($tab_asso1, $tab_asso2);
var_dump($tab);

echo "<hr>";

$tab = array_merge_recursive($tab_asso1, $tab_asso2);
var_dump($tab);

echo "<hr>";
echo "<h3>Table indice</h3>";

$tabin = array_merge($var1, $var2);
var_dump($tabin);

echo "<hr>";

/**$db = new PDO("mysql:host=localhost; charset=utf8; dbname=royals", 'root', '');

$request = $db->prepare("SELECT * FROM articles");
$request->execute();

while($result = $request->fetchAll()){

    echo $result["id"],"<br/>";
}**/
echo "<h1>Tri des tab indices</h1>";

echo "<h3>Ordre croissant <b style='color:red'> sort()</b></h3>";
sort($var1);
var_dump($var1);

echo "<hr>";

echo "<h3>Ordre decroissant <b style='color:red'> rsort()</b></h3>";

rsort($var1);
var_dump($var1);

echo "<hr>";

echo "<h3>Ordre naturel <b style='color:red'> natsort()</b></h3>";

natsort($var1);
var_dump($var1);

echo  "<hr>";
echo "<h1>Tri des tab associatifs</h1>";

echo "<h3>Ordre croissant<b style='color:red'> asort()</b></h3>";

asort($tab_asso2);
var_dump($tab_asso2);


echo  "<hr>";

echo "<h3>Ordre decroissant<b style='color:red'> arsort()</b></h3>";

arsort($tab_asso2);
var_dump($tab_asso2);

echo  "<hr>";

echo "<h3>Ordre natural<b style='color:red'> natsort()</b></h3>";

natsort($tab_asso2);
var_dump($tab_asso2);

echo  "<hr>";

echo "<h3>Utilisationde la fonction <b style='color:red'> array_filter()</b></h3>";

$cities = ["Paris", "Nantes", "Pau", "Perpignan", "Marseille"];
function init($city){

    $type = ["p", "P"];

    if(in_array($city[0], $type)){

        return $city;
    }

}

$select = array_filter($cities, "init");
var_dump($select);

echo "<hr>";

echo "<h2>Passage des variable par reference</h2>";

function prod(&$tab, $coef){

   foreach ($tab as $clef => $val){

       if(is_numeric($tab[$clef])){

           $tab[$clef] *= $coef;
       }else{

           echo "Erreur: le tableau est non numeric";
           return FALSE;
       }
   }
    return $tab;
}
$tabnum = range(1,7);

echo "Les donnees de la tab avant l appel de la function <br/>",print_r($tabnum),"<br/>";

$result = prod($tabnum, 3.5);

echo  "Les donnees de la tab \$result <br/>",print_r($result),"<br/>";

echo  "Les donnees de la tab initial apres l appel de la function<br/>",print_r($tabnum),"<br/>";

