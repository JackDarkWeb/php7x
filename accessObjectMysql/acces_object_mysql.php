<?php
// mysqli
//mysqli_result
// mysql_stmt
if(file_exists('myparam.inc.php')){
    include 'myparam.inc.php';
}
$db = new mysqli(host, user, password, dbname, port);

// insert in articles

$insert = "INSERT INTO articles('title', 'content') VALUES('Article 1','super content')";
$ins = $db->query($insert);
if(!$ins){
    echo $db->error.'<br/>';
    echo $db->errno;
}else{
    echo "<script> alert('Numero client est '. $db->insert_id)</script>";
    $db->close();
}

echo "<hr/>";



//Send the request
$request = 'SELECT * FROM articles';
$result = $db->query($request);

$nbr = $result->num_rows;

echo " le nombre d article est $nbr <br/>";

if(!$result){
    echo "Lecture impossible";
}else{
    $posts = [];
    while($rows = $result->fetch_array(MYSQLI_ASSOC)){
        $posts[] = $rows;
    }
    foreach ($posts as $post){
        echo $post['title'].'<br/>';
    }
    $result->free();
}
//close the connexion
$db->close();


//change the dbname
   //$db->select_db('ffs');
  // /print_r($db->ping());