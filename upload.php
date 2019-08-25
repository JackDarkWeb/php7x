<!DOCTYPE html>
<html>
<head>
    <title>Uploaded file</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<form method="post" action="<?= $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
    <input type="file" name="file" size="60" id="file" accept="image/gif, image/png, image/jpg, image/txt, image/doc"/><br/><br/>
    <button name="submit">Send</button>
</form>



<script>
    $(function(){
        //alert("ok")
    });
</script>
</body>
</html>

<?php
include"Books.php";

$books = new Books;
$books->getLengthOrCount("je suis fatigue");
echo "<hr>";


if(isset($_POST["submit"])) {

    $books->uploadFile("file", "jpg", "png", "gif", "txt", "doc");


    /*** $files = $_FILES["file"];
    $file_name = $files["name"];

    if (strlen($file_name) > 0) {

        $detach = explode(".", $file_name);
        $extension = strtolower(end($detach));
        $tmp_name = $files["tmp_name"];
        $type_file = ["jpg", "png", "txt", "gif", "doc"];

        if (in_array($extension, $type_file) == TRUE) {

           $size = $files["size"];

           if($size <= 3200000){

               $new_name = time().'.'.$extension;
               $storage = "upload/".$new_name;

               if(move_uploaded_file($tmp_name, $storage) == TRUE){

                   echo <<<__END
                   <script>
                       alert("Le fichier a été bien téléchargé ");
                   </script>
__END;
               }else{

                   echo <<<__END
                   <script>
                       alert("Le fichier n'a pas été téléchargé ");
                   </script>
__END;
               }
           }else{

               echo <<<__END
           <script>
               alert("Le fichier est trop volumineux ");
           </script>
__END;
           }
        } else {

            echo <<<__END
           <script>
               alert("Le fichier n'est pas accepté ");
           </script>
__END;
        }

    } else {

        echo <<<__END
           <script>
               alert("Selectionnez un fichier svp");
           </script>
__END;
    }***/
}

