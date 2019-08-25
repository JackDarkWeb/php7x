<?php
declare(strict_types=1);

require "Books.php";

function ladate($name){

    echo "Bonjour $name, aujourd'hui ".date("d/m/Y \i\l \\e\s\\t H:i:s");
}

@ladate("Jack");

echo "<br/><br/>";

if(function_exists("ladate")){

    echo "TRUE";

}else{

    echo "FALSE";
}
echo "<br/>";

function table(int $x, int $y){
    return $x*$y;
}

echo table(4, 8),"<br/>";


function somme(string $a, string $b) : float{

    return $a + $b;
}

echo somme("2.5", "11")."<br/>";

// Calculde nombre de nombre complexe

function modarg($reel,$imag){

    $n = func_num_args();

    $mod = sqrt($reel + $imag);
    $arg = atan2($imag, $reel);

    return array("module" => $mod, "argument" => $arg, 'arg' => $n);

}

$complex = modarg(5, 8);
echo "Le nombre complexe 5 + 8i a pour solution module = ".$complex['module']." et argument ".$complex['argument']."<br/>ainsi le nombre d argument est ".$complex['arg']."<br/><br/>";

echo "<h3>Utilisation des functions <b style='color:red'>func_num_args()</b>, <b style='color:red'>func_get_arg</b> et <b style='color:red'>func_get_args()</b></h3>";

function produit(){

    //determiner le nombre de arg de la function
    $n = func_num_args();
    echo "Le nombre d'argument de la function produit est <b style='color:blue'>$n</b><br/>et ces arguments sont :<br/>";

    $get_args = func_get_args();
    foreach($get_args as $arg){

        echo $arg."<br/>";
    }
    /**
     * ou on peut utiliser func_get_arg()

    for($i = 0; $i < $n; $i++){

        $get_arg = func_get_arg($i);
        echo $get_arg,"<br/>";
    }**/
}

produit(5,4.5, "jack");

echo "<hr>";

function test(){
    $nb = func_num_args();
    $get_args = func_get_args();

    return array('n' => $nb, 'arg' => $get_args);
}

$test = test("Jack", 28, "jack@yahoo.fr");

echo "Le nombre d'argument est ".$test['n']." et ces arguments sont :<br/>";
foreach($test["arg"] as $val){
    echo $val."<br/>";
}

echo "<br/>";

function prod($var, ... $tab){

    foreach($tab as $val){

        $var *= $val;
    }

    echo "Le produit vaut ";
    return $var;
}

echo prod(2,3,5,7);


echo "<hr>";
echo "<h3>La portee des variables</h3>";

function porte($machin){

    global $truc;
    $machin = $GLOBALS['intro']." je suis $truc $machin <br/>";
    $truc = "zzzzzzzzzzzzzzzz";
    return $machin;
}

$intro = "Ne me cherche pas";
$truc = "parti";
echo porte('a Londres');
//porte();
//echo "Mon prenom est ".$GLOBALS['name'];


echo "<hr>";

function getLengthTab(array $tab){

    $count = 0;
    foreach($tab as $val){

        if(gettype($val) == "array"){

            $count += count($val);
        }else {

            $count++;
        }
    }

    return $count;
}

$tab = ['1', 'jack', 'email'];
echo getLengthTab($tab);

echo "<hr>";

$count = new Books;

$count->getLengthOrCount(["text", 14, array(12, "jack")]);