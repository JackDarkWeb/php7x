<!DOCTYPE html>
<html lang="<?= $_SERVER["HTTP_ACCEPT_LANGUAGE"]?>">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Sondage en ligne : VOTE FOOT</title>
</head>
<body style="background-color: #ffcc00;">
   <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
       <fieldset>
           <legend><b>Votez pour votre joueur préféré!</b></legend>
           <p>
               <?php
               $joueurs = ["messi" => "Messi", "cr7" => "Cristiano", "drogba" => "Drogba"];
               ?>
               Messi<input type="radio" name="vote" value="messi"/><br/>
               Cristiano<input type="radio" name="vote" value="cr7"/><br/>
               Drogba<input type="radio" name="vote" value="drogba"/><br/><br/>
               <input type="submit" value="Voter"/>
               <input type="submit" value="Afficher les résultats" name="Affiche"/>
           </p>
       </fieldset>
   </form>
<!-- Enregistrement -->
   <?php
   if(isset($_POST["vote"])){

       $vote = $_POST["vote"];
       echo "<h2>Merci de votre vote pour ".$joueurs[$vote]."</h2>";

       if(file_exists("votes.txt")){

           if($id = fopen("votes.txt", "a")){
               flock($id, 2);
               fwrite($id, $vote."\n");
               flock($id, 3);
               fclose($id);
           }else{

               echo "Fichier inaccessible";
           }
       }else{

           $id = fopen("votes.txt", "w");
           fwrite($id, $vote."\n");
           fclose($id);
       }
   }else{
       echo "<h2>Complètez le formulaire puis cliquez sur 'Voter'</h2>";
   }

   //Afficher les resultats
   // initialisation du tableau des resultats

   $result = ["Messi" => 0, "Cristiano" => 0, "Drogba" => 0];

   // Afficher les resultats

   if(isset($_POST["affiche"])){
       if($id = fopen("votes.txt", "r")){
           while($line = fread($id, 12)){

           }
       }
   }
   ?>
</body>
</html>
<?php
