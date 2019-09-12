<?php
    if(file_exists('connexion.php')){

        include realpath('connexion.php');
    }

    $db = getInstance();

    function post($name, $db){
        if(isset($_POST[$name])) return $db->real_escape_string($_POST[$name]);
    }

    if(isset($_POST['submit'])){
        if(!empty(post('code', $db))){
           $code = post('code', $db);
           setcookie('code_client', $code, time() + 300);
           header('Location:update.php');
        }else{
            echo "<script> alert('Saisissez votre code client') </script>";
        }
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
    <h1>Saisissez votre code client pour modifier vos coordonnees</h1>

    <div class="mt-4">
        <form method="post" action="">

            <div class="form-group">
                <label for="formGroupExampleInput" class="text-info">Code client</label>
                <input type="text" name="code" class="form-control" id="formGroupExampleInput" placeholder="Code client">
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Update"/>

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
