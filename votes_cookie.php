<?php
//print_r($_COOKIE);
if(isset($_POST["submit"])){

    if(isset($_POST["choix"])) {

        if (isset($_COOKIE["votant"]) && isset($_COOKIE["vote"])) {

            $vote = $_COOKIE["vote"];
            ?>
            <script>
                alert("Vous avez déja voté pour <?= $vote?> !");
            </script>
            <?php
        } else {

            //$vote = $_COOKIE["vote"];
            setcookie("votant", "true", time() + 300);
            setcookie("vote", "{$_POST['choix']}", time() + 300);

            if (file_exists("sondages.txt")) {

                if ($id = fopen("sondages.txt", "a")) {
                    flock($id, 2);
                    fwrite($id, $_POST["choix"]."\n");
                    flock($id, 3);
                    fclose($id);
                } else {
                    echo "Fichier inaccessible";
                }
            } else {

                $id = fopen("sondages.txt", "w");
                fwrite($id, $_POST["choix"]."\n");
                fclose($id);
            }
        ?>
            <script>
                alert('Merci de votre vote pour <?= $_POST["choix"]?> !');
            </script>
        <?php
        }
    }else{
        echo "Veuillez choisir une technologie";
    }
}
$result = ["PHP/MySQL" => 0, "ASP.Net" => 0, "JSP" => 0];

if($id = fopen("sondages.txt", "r")) {
    flock($id, 2);
    while ($line = fgets($id, 10)) {

        switch ($line) {
            case "PHP/MySQL":
                $result["PHP/MySQL"]++;
                break;
            case "ASP.Net":
                $result["ASP.Net"]++;
                break;
            case "JSP":
                $result["JSP"]++;
                break;
            default:
                break;
        }
    }
}
echo "<br/>";
$total = ($result["PHP/MySQL"] + $result["ASP.Net"] + $result["JSP"])/100;
$tri = $result;
arsort($tri);
foreach ($tri as $nom => $score){
    echo $nom," a ",$score," voix soit ",number_format($score/$total,2),"%<br/>";
}
flock($id, 3);
fclose($id);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Vote avec cookie</title>
</head>
<body>

<div class="container">
    <h3>Bienvenue sur le site de PHP7</h3>
    <div class="center">
        <p>Votez pour votre technologie Internet préférée</p>
        <form method="post" action="">
            <table class="">

                <tbody>
                <tr>
                    <td class="font-italic font-weight-bolder text-danger">Choix 1 : PHP/MySQL</td>
                    <td><input type="radio" name="choix" value="PHP/MySQL"/></td>
                </tr>
                <tr>
                    <td class="font-italic font-weight-bolder text-danger">Choix 2 : ASP.Net</td>
                    <td><input type="radio" name="choix" value="ASP.Net"/></td>
                </tr>
                <tr>
                    <td class="font-italic font-weight-bolder text-danger">Choix 3 : JSP</td>
                    <td><input type="radio" name="choix" value="JSP"/></td>
                </tr>
                <tr>
                    <td><b>Votez !</b></td>
                    <td><input type="submit" name="submit" value="ENVOI"/> </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>
