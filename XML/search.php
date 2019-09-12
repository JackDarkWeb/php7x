<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Cours de Boostrap</title>
</head>
<body>

<form method="post" action="">
    <div class="form-group col-md-4">
        <label for="inputState">Rechercher tous les </label>
        <select id="inputState" class="form-control" name="choice">
            <option value="title">Titre</option>
            <option value="author">Auteurs</option>
            <option value="@editor">Editeurs</option>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="inputState">Dans les categories</label>
        <select id="inputState" class="form-control" name="category">
            <option value="//ouvrage/book/">Ouvrages</option>
            <option value="//music/disque/">Musique</option>
            <option value="//">Toutes</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Search</button>
</form>
</body>
</html>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $choice = $_POST['choice'];
    $category = $_POST['category'];

    $xml = simplexml_load_file('complexe.xml');
    $request = $category.$choice;
    $result = $xml->xpath($request);
    $result = array_unique($result);

    echo "<h3>Les resultats de la recherche des $choice</h3>";
    echo "<ol>";
           foreach ($result as $value){
               echo "<li><big>$value</big></li>";
           }
    echo "</ol>";

}
