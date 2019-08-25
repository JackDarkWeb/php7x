<?php
echo <<<__END
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Fichiers</title>
</head>
<body>

<div class="container">
<h6 class="display-4 text-center">Saisir les données dans un fichier</h6><br/>
<form method="post" action="">

   <div class="list-inline text-center">
     <div class="list-inline-item font-italic font-weight-bold text-danger">
        <label>Nom :</label><br/><br/>
        <label>Prénom :</label><br/><br/>
     </div>
     <div class="list-inline-item">
        <input type="text" name="last" /><br/><br/>
        <input type="text" name="first" /><br/><br/>
     </div>
     
   </div>
   
   <div class="text-center">
      <button type="submit" name="register" class="badge badge-success">Register</button>
      <button type="reset" class="badge badge-danger">Reset</button>
   </div>
   
</form>


</div>
<hr/>
</body>
</html>
__END;

if(isset($_POST["register"])){

    $last = $_POST['last'];
    $first = $_POST['first'];
    $date = time();

    if(!empty($last) && !empty($first)){

        if($id = fopen("read.txt", "a")){
            flock($id, 2);
            fwrite($id, $last." ; ". $first." ; ".$date."\n");
            flock($id,3);
            fclose($id);
            echo "<div class='alert alert-success'>Les informations ont été bien enregistés</div>";
        }else{
            echo "<div class='alert alert-danger'>Erreur d'accès au fichier</div>";
        }
    }else{

        echo "<div class='alert alert-danger'>Taper votre nom et prénom</div>";
    }
}
if(file_exists("db.txt")) {


    if ($id = fopen("db.txt", 'r')) {
        flock($id, 2);
        $i = 1;
        echo "<table class='table table-striped table-dark'>";
        echo "<thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Date</th>
               </tr>
            </thead>";
        echo "<tbody>";
        while ($line = fgets($id, 100)) {
            $tab = explode(";", $line);
            $time = intval($tab[2]);
            $date = date('d/m/Y H:i:s', $time);
            echo "<tr>
                         <td>$i</td>
                         <td>$tab[0]</td>
                         <td>$tab[1]</td>
                         <td>$date</td>
                   </tr>
           
       ";
            $i++;
        }
        echo " </tbody>";
        echo " </table>";
        flock($id, 3);
        fclose($id);
    } else {
        echo "Impossible d'ouvrir le fichier";
    }
}else{
    echo "Le fichier n'existe pas";
}












echo <<<__END
    <form method="post" action="">
    <button name="verify">Verify</button>
    </form><br/>
__END;

$open = <<<__END
    <form method="post" action="">
        <button name="openf">Open file</button>
    </form>
__END;

 $write = <<<__END
    <form method="post" action="">
        <textarea name="msg" rows="5" cols="50"></textarea>
        <button name="send">Send</button>
    </form>
__END;

$file = "test.txt";

if(isset($_POST["verify"])){

    if(!file_exists($file)){
        touch($file, time());
        echo "Le fichier a été créé!<br/>";
        //echo $open;
    }else{
        echo "Le fichier $file existe déjà<br/";
        echo $open;
    }
}

if(isset($_POST["openf"])){
    $id = fopen($file, "a");

    if(!$id){
        echo "Erreur d'accès au fichier $file";
    }else{

        echo "Vous pouvez taper votre message dans le fichier $file <br/>";
        echo $write;
    }
}





