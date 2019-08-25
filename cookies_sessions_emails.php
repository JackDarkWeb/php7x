<?php
$tabcook = ["prenom" => "Paul", "nom" => "Char", "ville" => "Paris", "cb" => "5612 1254 8745 1235"];
foreach($tabcook as $clef => $value){
    setcookie("client[$clef]", $value, time() + 7200);
}

echo "<h3>Lire les valeurs de cookies</h3>";
if(isset($_COOKIE)){

    foreach ($_COOKIE["client"] as $clef => $values){
        echo $clef," => ",$values,"<br/>";
    }
}
