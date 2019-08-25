<?php
$paths = [realpath('start.php'), realpath('end.php')];
require $paths[0];

spl_autoload_register(function ($class){

    require_once $class.".php";
});

$register = new Books();

if(isset($_POST['submit'])){

    $first = $register->cleaningString($_POST['first'], "@ $ & * # ' ");
    $last  = $register->cleaningString($_POST['last'], "@ $ & * #  '");
    $email = $register->cleaningString($_POST['email']);
    $phone = $register->cleaningString($_POST['phone']);
    $password = $register->hash($_POST['password']);
    $confirm_password = $register->hash($_POST['confirm_password']);
    //$genre = $_POST['sexy'];
    $country = $_POST['country'];

    //Create the file database
    if(!file_exists("registers.txt")){
        $id = fopen('registers.txt',"w");
        fclose($id);
    }


    if(!empty($first) && !empty($last) && !empty($email) && !empty($phone) && !empty($password) && !empty($country)){

        if($register->verifyString($first) == 1){

            if($register->verifyString($last) == 1){

                if($register->numbers($phone) == 1){

                    if($register->verifyEmail($email) == 1) {
                        $tab = [];
                        $id = fopen("registers.txt", "r");
                        flock($id, 2);
                        $x = 1;
                        while ($line = fgetcsv($id, 300, ";")) {

                            $tab[] .= $line[2];
                            $x++;
                        }
                        flock($id, 3);
                        fclose($id);

                        if(in_array($email, $tab) == false){

                            if ($password === $confirm_password) {

                                if (isset($_POST['sexy'])) {

                                    $sexy = $_POST['sexy'];

                                    $upload = $register->uploadFile('file', "jpn", "jpg", "jfif");
                                    if ($upload[0] === "true") {

                                        $date = time();
                                        $data = $first . ";" . $last . ";" . $email . ";" . $password . ";" . $phone . ";" . $sexy . ";" . $country . ";" . $upload[1] . ";" . $date . "\n";
                                        if (file_exists("registers.txt")) {

                                            if ($id = fopen("registers.txt", "a")) {
                                                flock($id, 2);
                                                fwrite($id, $data);
                                                flock($id, 3);
                                                fclose($id);

                                                echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&time</button>you have been registered <a href='#' class='alert-link'>connect here</a></div>";
                                            } else {

                                                echo "<div class='alert alert-info alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>Can not access the log file</div>";
                                            }
                                        } else {

                                            $id = fopen("registers.txt", "w");
                                            fwrite($id, $data);
                                            fclose($id);
                                        }
                                    } else {

                                        echo "<div class='alert alert-danger'>$upload[0]</div>";
                                    }
                                } else {

                                    echo "<div class='alert alert-danger'>Select your genre</div>";
                                }
                            } else {

                                echo "<div class='alert alert-danger'>Your passwords are not the same</div>";
                            }

                        }else{

                            echo "<div class='alert alert-danger'>Your email already exists</div>";
                        }
                    }else{

                        echo "<div class='alert alert-danger'>Your mail is incorrect</div>";
                    }
                }else{

                    echo "<div class='alert alert-danger'>Enter number phone ex: 003366341425</div>";
                }
            }else{

                echo "<div class='alert alert-danger'>Your last name contains unauthorized characters</div>";
            }
        }else{

            echo "<div class='alert alert-danger'>Your first name contains unauthorized characters</div>";
        }
    }else{

        echo "<div class='alert alert-danger'>All fields are required</div>";
    }

    $upload = $register->uploadFile('file', "jpn", "jpg", "jfif");


}
require $paths[1];


