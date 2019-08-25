<?php
$path = realpath("Books.php");
require $path;

$code = new Books;

if(isset($_POST["submit"])){

    $file  = $_FILES["file"];
    $name = $file["name"];

    if(strlen($name) > 0){

        $detach = explode(".", $name);
        $ext = strtolower(end($detach));
        $extensions = ["jpg", "png", "gif"];

        if(in_array($ext, $extensions) == true){

            $size = $file["size"];

            if($size <= 3200000){

                $new_name = strtolower($code->alphaNumCode(5).".".$ext);
                $storage = "storage/".$new_name;
                $tmp_name = $file["tmp_name"];

                if(move_uploaded_file($tmp_name, $storage) == true){

                    $data = $new_name."\n";
                    if(file_exists("images.txt")){

                        if($id = fopen("images.txt", "a")){

                            flock($id, 2);
                            fwrite($id, $data);
                            flock($id, 3);
                            fclose($id);

                            echo "The file has been downloaded successfully";
                        }else{
                            echo "File access error";
                        }
                    }else{

                        $id = fopen("images.txt", "w");
                        fwrite($id, $data);
                        fclose($id);
                    }
                }else{
                    echo "There was a problem uploading";
                }
            }else{
                echo "The file must have 32MO maximum";
            }
        }else{
            echo "This extension is not acceptable";
        }
    }else{
        echo "Select your file";
    }
    //var_dump($_FILES["file"]);
}
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
    <title>Cours de Boostrap</title>
</head>
<body>
<div class="container">
    <form method="post" action="<?= $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/jpg, image/png, image/gif"/>
        <button name="submit">Upload</button>
    </form>
    <?php
          if(file_exists("images.txt")){

              if($id = fopen("images.txt", "r")){

                  flock($id, 2);
                  while($line = fgets($id, 30)){
                      //var_dump($line);
                      echo "<img src='storage/$line'/><br/>";
                  }
                  flock($id, 3);
                  fclose($id);

              }else{

                  echo "File access error";
              }
          }else{

              echo "The file do not exist";
          }
    ?>
</div>
</body>
</html>
