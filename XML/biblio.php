<?php

use function Sodium\increment;

$book = realpath('biblio.xml');
$xml = simplexml_load_file($book);
$tab = get_object_vars($xml);

echo "Le nombre de object <b style='color: red'>simplexml_element</b> est ", count($tab),"<hr/>";

foreach ($xml->book as $clef => $value){
    static $i = 1;
    echo ucfirst($clef)," $i : $value->title de $value->author paru en $value->date <hr/>";
    $i++;
}

echo "<h1>Lecture des attributs</h1>";
echo "L'éditeur du titre <b style='color:blue'>", $xml->book[1]->title, "</b> et le prix sont <b style='color:green'></b><br/>";
foreach ($xml->book[1]->attributes() as $clef => $value){
    echo $clef, " : " ,$value." ";
}


foreach ($xml->book as $value){

    echo "<h3><b style='color:blue'>$value->title</b> de $value->author</h3> <b> Paru en $value->date </b>";

    foreach ($value->attributes() as $clef => $value_attr){
        echo "<b> $clef  :  $value_attr</b>";
    }
}

echo "<h1>Lecture d'un fichier à structure complexe</h1>";

$xml_complex = simplexml_load_file('complexe.xml');

$obj = get_object_vars($xml_complex);
echo count($xml_complex),"<br/>";

$children = $xml_complex->children();
var_dump($children);

echo "<hr/>";

foreach ($children as $element => $val){

    echo "<h3>", ucfirst($element), ": $val </h3>";

    foreach ($val->children() as $elt => $v){
        echo "<p>$elt : <b> $v</b></p>";

        foreach ($v->children() as $e => $value){
            echo "&nbsp;&nbsp; $e : <b>$value</b><br/>";
        }
    }
}

echo "<h1>Modification et Enregistrement</h1>";

$xml->book[1]->title = 'Ritournelle de la faim';
$xml->book[1]->date = "2009";

$chxml = $xml->asxml('biblio.xml');
if($chxml) echo "Success";

echo "<h1>Recherche dans un fichier</h1>";

$result_editor = $xml_complex->xpath("//book/@editor");
$result_editors = $xml_complex->xpath("//@editor");
$result_title = $xml_complex->xpath("//book/title");
$result_titles = $xml_complex->xpath("//title");
var_dump($result_titles);
echo "<hr/>";

include 'search.php';