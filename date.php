<?php
include "Books.php";

echo "Aujourd'hui, ".(new Books)->dateFr()->date. " à ".(new Books)->dateFr()->hour;
echo "<hr>";


echo "Le timestamp a l instant est ", time();

echo "<hr>";
echo "<h3>Temps GMT</h3>";

$now = getdate();
//var_dump($now);
$gmt = gmmktime($now["hours"], $now["minutes"], $now["seconds"], $now["mon"], $now["mday"], $now["year"]);
echo "L heure gmt est ", date("d/m/Y a H:i:s", $gmt);