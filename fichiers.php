<?php

echo "<h3>Compteur de visite à l'aide d'un fichier</h3>";
if(file_exists("compteur.txt")){

    if($id_file = fopen("compteur.txt", "r")){
        flock($id_file, 1);
        $nb = fread($id_file, 10);
        $nb++;
        fclose($id_file);

    }else{
        echo "Fichier introuvable";
    }
}else{

}


echo "<hr>";

echo "<h3>Creation d un fichier vide </h3>";

echo <<<__END
    <form method="post" action="">
    <input type="text" name="doc" size="30" pattern="^[a-z0-9]{3,5}" />
    <button name="create">Create file</button><br/><br/>
    </form>
__END;

$open = <<<__END
    <form method="post" action="">
    <button name="openf">Open file</button>
    </form>
__END;


echo <<<__END
    <form method="post" action="">
    <button name="read">Read</button>
    </form>
__END;


if(isset($_POST["create"])){

    $doc = htmlspecialchars(trim($_POST["doc"]));

    if(!empty($doc)){
        $doc = $doc.'.txt';
        if (!file_exists($doc)) {
            touch($doc, time());
            echo $open;
        }else{
            echo "Le fichier <b>$doc</b> existe deja! et vous pouvez ouvrir<br/><br/>";
            echo $open;
        }
    }else{
        echo "Entrer le nom de fichier";
    }

}elseif(isset($_POST["openf"])){

    $id_file = fopen("doc.txt", "a");

    if(!$id_file){
        echo "Erreur d acces au fichier doc.txt";
    }else{
        echo "doc.txt est ouvert en ecriture";
        fwrite($id_file, "Par les oeuvres de la Croix par Jesus Christ ma femme Nataliia KHRUSHKOVA est revenue a moi");
        flock($id_file, 1);
        flock($id_file, 3);
        fclose($id_file);
    }
}

if(isset($_POST["read"])){
    $id = fopen("doc.txt", "r");
    if(!$id){
        echo "Erreur d'accès au fichier $id<br/>";
    }else{
        echo "En cours de lecture :<br/>";
        $nb = fread($id, 100000);
        echo "<b>$nb</b>";
    }
}


