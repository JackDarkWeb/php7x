<?php
if(file_exists('connexion.php')){

    include realpath('connexion.php');
}

$db = getInstance();

function post($name, $db){
    if(isset($_POST[$name])) return $db->real_escape_string($_POST[$name]);
}

if(!empty(post('nom', $db)) && !empty(post('address', $db)) && !empty(post('city', $db))){

   $id_client = $db->insert_id;
   $nom = post('nom', $db);
   $prenom = post('prenom', $db);
   $age = post('age', $db);
   $address = post('address', $db);
   $city = post('city', $db);
   $email = post('email', $db);

   //REQUEST SQL
    $request = "INSERT INTO users VALUES('$id_client','$nom', '$prenom', '$age', '$address', '$city', '$email')";

    $result = $db->query($request);
    if(!$result){
        echo $db->error;
        echo "<script> alert('Erreur : ".$db->error."')</script>";
    }else{

        echo "<script>alert('Vous êtes enregistré votre numéro de client est ".$db->insert_id."') </script>";

    }
    $db->close();
}else{
    echo "<h3>Formulaire a completer!</h3>";
}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Insertion</title>
</head>
<body>

<div class="container">
    <h1>Vos coordonnees</h1>

    <div class="mt-4">
        <form method="post" action="">

            <div class="form-group">
                <label for="formGroupExampleInput" class="text-info">Nom</label>
                <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2" class="text-info">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="formGroupExampleInput2" placeholder="Prénom">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" class="text-info">Age</label>
                <input type="text" name="age" class="form-control" id="formGroupExampleInput2" placeholder="Age">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" class="text-info">Adressse</label>
                <input type="text" name="address" class="form-control" id="formGroupExampleInput2" placeholder=" Enter your address">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" class="text-info">Ville</label>
                <input type="text" name="city" class="form-control" id="formGroupExampleInput2" placeholder="Enter your city">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2" class="text-info">Email</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email">
            </div>

            <input type="submit" class="btn btn-primary" name="submit"/>

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>