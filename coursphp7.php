<?php
require_once "Form.php";
$form = new Form;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Cours de php7</title>
</head>
<body>
<div class="container">
    <h2>Aujourd'hui <?= date("d/m/Y à h:m:s")?></h2>
    <h3> <?= "Bienvenu sur mon site de php7" ?></h3>

    <form method="post" action="">
        <input type="text" name="sex" placeholder="Enter your sex"/>
        <button name="submit">Submit</button><br/><br/>
    </form><br/><br/>

    <div class="row">
        <div class="col-sm">
            <form method="post" action="">
                <?= $form->input("text", "email", "Enter your email");?>
                <?= $form->button("subemail", "Tester");?>
            </form>
        </div>
        <div class="col-sm">
            <form method="post" action="">
                <?= $form->textarea("text", "Saisir le text");?>
                <?= $form->button("subtext", "Search");?>
            </form>
        </div>
        <div class="col-sm">
            <?php
                $tab = range(1,10);
                echo count($tab).'<br/>';
                foreach ($tab as $value){
                    echo $value.' ';
                }
            ?>
        </div>
        <div class="col-sm">


        </div>
    </div>

<form method="post" action="<?= $_SERVER["PHP_SELF"];?>">
    <fieldset>
        <legend>Titre du formulaire</legend>
    </fieldset>
</form>


</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php
require_once "GenerateCode.php";


echo __FILE__ ."<br/>";
$a = 2;
$b = "test";
$l = 's';

echo $a."+" .$b."<br/>";
echo $a + $b."<br/>";
#echo $($a);

$l .= 'e';
$l .= 'n';
$l .= 'a';
echo $l.'<br/>';

$c = 'PHP';
$$c = 'Open source';
echo $c.'<br/>';
echo ${$c}.'<br/>';
echo $$c.'<br/>';
echo "$c est ${$c} <br/>";

echo $GLOBALS["c"]. ' est '. $GLOBALS["$c"].'<br/>';

define("PI", 3.141592, TRUE);

echo "La valeur de pi vaut ".PI."<br/>";

if(defined("pi")){
    echo "true <br/>";
}else{
    echo "false<br/>";
}

echo gettype(PI)."<br/>";

$nbr = +38025474;
if(is_int($nbr)){
    echo "integer <br/>";
}else{
    echo "no integer<br/>";
}

$int = 73;
if(is_integer($int)){
    $int++;
    echo "la valeur vaut $int<br/>";
}

$gretting = "Bonjour";
if(is_string($gretting)){
    $gretting .= " à tous<br/>";
    echo $gretting;
}

$var = "32 km";
echo $var1 = (int)$var."<br/>";

$null = NULL ;
if(isset($null)){
    echo "la valeur exist <br/>";
}else{
    echo "la valeur do not exist <br/>";
}

$a  =  80;
$b = ($a < 95);
echo "b vaut $b<br/>";

$tab = ['PHP', 'MySQL'];

$MySQL = "BASE";
echo ${$tab[1]}."<br/>";
echo ${$tab[1]}[1]."<br/>";



#print_r(get_defined_constants());

/**if(isset($_POST["submit"])){

    $sex = htmlspecialchars(ucfirst($_POST["sex"]));
    if(!empty($sex)){

        $ch = "Bonjour ";
        $ch .= ($sex == "Femme" || $sex == "F")? "Madame" : "Monsieur";
        echo "<b>$ch</b>";
    }else{
        echo "Please enter your sex";
    }

}**/

#EXO3
if(isset($_POST["submit"])){
    $nbr = htmlspecialchars($_POST["sex"]);
    $nbr = (int)$nbr;
    if(!empty($nbr)) {
        switch ($nbr) {
            case ($nbr % 3 == 0 && $nbr % 5 == 0):
                echo $nbr, " est multiple de 3 et de 5";
                break;
            case $nbr % 3 == 0:
                echo $nbr, " est multiple de 3";
                break;
            case $nbr % 5 == 0:
                echo $nbr, " est multiple de 5";
                break;
            default:
                echo $nbr, " n'est ni multiple de 3 ni de 5";
                break;

        }
    }else{
        echo "Please, enter the vnumber<br/>";
    }
}

#echo chr(2);
$ch1 = "Mathias";
$ch2 = "Nataliia";
$strlen = printf("Christ Jesus est avec vous et a beni votre mariage %s et %s <br/>", $ch1, $ch2);
printf("La longueur totale de \$strlen est %s <br/>", $strlen);
echo ord("k"),"<br/>";
echo chr(107),"<br/>";

#CREATION D UN MOT DE PASSE
$code = "";
for($i = 0; $i < 6; $i++){
    $nbr = rand(65,90);
    $code .= chr($nbr);
}
printf("Votre mot de passe est : %s<br/>", $code);
echo ucwords($ch2),"<br/>";

$space = "...Mathias et Nataliia___---";
echo trim($space, ' . _-'),"<br/><br/><br/>";
$chr = "<script>alert('salut'); history.back();</script>";
echo strip_tags($chr),"<br/>";

$code = new GenerateCode;
echo "Votre code alpha est <b>",$code->alphaCode(6, 65, 90),"</b><br/>";
echo "Votre code num est <b>",$code->numCode(6, 0, 9),"</b><br/>";
echo "Votre code alphanum est <b>",$code->alphaNumCode(3),"</b><br/>";

$strstr = "Je travaille pour prepare mon depart de l ukraine et assure ma formation";
echo strstr($strstr, "pour"),"<br/>";
echo substr($strstr, 4),"<br/>";
echo substr_count($strstr, "p"),"<br/>";
echo str_replace(["l ukraine", "prepare"], ["l'Ukraine", "preparer"], $strstr),"<br/>";

$tab = explode(" ",$strstr);
foreach($tab as $val){
    echo $val,"<br/>";
}

$slug  = implode('-', $tab);
echo $slug,"<br/>";


echo "<hr/>";
echo "<h4>Les expressions regulieres</h4>";

$model = "/\.com|\.net|.fr/";
echo (preg_match($model, "www.etude.com"))? "Site est valide<br/>" : "Site non valide<br/>";

echo <<<__END
       <form method="post" action="">
        <input type="text" name="test" placeholder="Enter your text"/>
        <button name="sub">Submit</button><br/><br/>
      </form>
__END;

$preg = "/[[:alpha:]]/";  # equivalent de "/[a-zA-Z]/"

if(isset($_POST["sub"])){
    $test = htmlspecialchars(trim($_POST["test"], " . - _ * $ @"));
    if(!empty($test)){

        echo (preg_match($preg, $test))? "<b style='color:green'>$test</b> est valide<br/>" : "<b style='color:red'>$test</b> non valde<br/>";

    }else{
        echo "Taper l'adresse du site<br/>";
    }
}

echo <<<__END
       <form method="post" action="">
        <input type="text" name="url" placeholder="Enter your url"/>
        <button name="suburl">Submit</button><br/><br/>
      </form>
__END;

$preg = "/\.com|\.fr|\.net/";

if(isset($_POST["suburl"])){

    $url  = htmlspecialchars(trim($_POST["url"], ' . - _ @ $'));
    echo (preg_match($preg, $url))? "Site valide<br/>" : "Site non valide";
}

$preg_email = "/\.com$|\.fr$|\.ru$/";

if(isset($_POST["subemail"])){
    $email = $_POST["email"];
    //var_dump(preg_match($preg_email, $email));
    echo (preg_match($preg_email, $email))? "<script>alert('Email valide')</script>" : "<script>alert('Email non valide')</script>";
}

// RECHERCHE DES LETTRE AVEC LE CARACTERE POINT(.)
$search = "/math.|nat./"; // seuls les mots suivi d un caractere au moins
$searchs = "/math.*|nat.*/"; // seuls les mots suivi ou non dun caractere

if(isset($_POST["subtext"])){

    $text = $_POST["text"];
    $word = explode(" ", $text);
    $tab = [];
    //$result = [];

    foreach($word as $key => $val){

        if(preg_match($search, $val, $res) === 1){

           $tab[] .=  $val;
        }

        //preg_match($search, $val, $tab);
    }

    echo "Les mots commençant par nat et math sont : <br/>";
    for($i = 0; $i < count($tab); $i++){
        $result = ucfirst($tab[$i]);
        echo "<b style='color: green'>$result<br/></b>";
    }
    echo "Le nombre total est ".count($tab);
    //$nb = substr_count($text, );
}

// CHAPITRE 4
    #EXO 1
    $chaine = "jE t'aiMe mAtHIas, Je t'AimE ausSi Nataliia";
    echo strtoupper($chaine)."<br/>";

/**  $mode = "/([[:alpha:]]+) ([^0-9])/";
$nam = "Mathias";
//var_dump();
echo (preg_match($mode, $nam))? "TRUE" : "FALSE"; **/

echo "<hr>";
echo "<h3>Les tableaux</h3>";

function countValueTab($tab = []){

    $nb_val = 0;

    for($i = 0; $i < count($tab); $i++){

        if(gettype($tab[$i]) == "array"){

            $nb_val += count($tab[$i]);

        }else{

            $nb_val++;
        }
    }
    return $nb_val;

}
$tabdiv = [['1990', 'Sena']];

// tableau de deux dimensions

    echo "Le nombre total de valeurs est ".countValueTab($tabdiv)."<br/>";

    for($i = 0; $i < sizeof($tabdiv); $i++){
        
        for($j = 0 ; $j < count($tabdiv[$i]); $j++){

            echo $tabdiv[$i][$j]."<br/>";
        }
    }

    echo "<h2>Manipuler des tableaux</h2>";

    //$tab = [range(1,10)];
    $tab = [1,2,3,4,8];
    array_push($tab, 25);
    array_unshift($tab, -1, 0);
    var_dump($tab);
    $stab = array_slice($tab, 2,-1);
    $stab = array_slice($tab, -2,-1);
    //var_dump($stab);
    //echo "<b>sizeof($stab)</b>";

        $var = 28;
        $var2 = &$var;
        echo $var2."<br/>";
        

$tab =  range("c", "x");
var_dump($tab);

//Ajouter a la fin

$add_push = array_push($tab, "y", "z");
var_dump($tab);

//Ajouter au debut

$add_unshift = array_unshift($tab, "a", "b");
var_dump($tab);

// move a partir du debut
    $moved = array_shift($tab);
    var_dump($tab);

// move a la fin
    $movef = array_pop($tab);
    var_dump($tab);

// delete une indice

    unset($tab[11], $tab[12]);
    var_dump($tab);

// Fusionner des tableaux

    echo "Tableaux indices <br/>";
    $tab1 = array("Paris", "Lyon", "Marseille");
    $tab2 = array("Nantes", "Orleans", "Tours", "Paris");
    $tab= array_merge($tab1, $tab2);
    echo "array_merge donne : ";
    var_dump($tab)."<br/>";

    echo "<b>Obtenir un tableau unique</b>";

    $tab_unique = array_unique($tab);
    var_dump($tab_unique);

    echo "<hr/>";

    // Fusion des tableaux associatifs

        $tab_asso1 = array("Paris" => "75", "Lyon" => "69", "Marseille" => "13");
        $tab_asso2 = array("Nantes" => "44", "Orleans" => "45", "Tours" => "37", "Paris" => "Capitale");

       $tabasso = array_merge($tab_asso1, $tab_asso2);

        echo "array_merge donne : ";
        var_dump($tabasso);

        echo "<b>Obtenir un tableau recursive</b>";
        $tabasso_excursive = array_merge_recursive($tab_asso1, $tab_asso2);

        var_dump($tabasso_excursive);


        echo "<hr/> <br/><br/><h2>Tri des tableaux indices</h2>";

        $tab_sort = array("Nantes", "Orleans", "Tours", "Paris");

        sort($tab_sort);
        var_dump($tab_sort);

        $tab2 = array("Nantes", "Orleans", "Tours", "Paris");

        var_dump($tab2);
        $tabinverce = array_reverse($tab2);
        var_dump($tabinverce);


        $values = "";
        $fields = ['email', 'password'];
        $x = 1;
        foreach($fields as $field){

            $values .= "?";
            if($x < count($fields)){

                $values .= ",";
            }
            $x++;
        }
        echo $values;

        echo "<hr/>";

        echo "<h2>Operer une selection des elements</h2>";

        $cities = ["Paris", "Perpignan", "Marseille", "Pau", "Nantes", "Lilles"];

        function init($city){

            if($city[0] == "P" || $city[0] == "p"){
                return $city;
            }
        }

        $select = array_filter($cities, "init");
        var_dump($select);

    echo "<hr/>";
    echo "<h2>L objet ArrayObject</h2>";

        $tab = array("Linux", "Apache");
        $objecttab = new arrayObject($tab);

        $objecttab -> append("MySQL");
        $objecttab -> setFlags(ArrayObject::ARRAY_AS_PROPS);

        echo $objecttab->prop1;

