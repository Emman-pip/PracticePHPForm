<?php
session_abort();
session_start();


$user = "./user.php";
if ($_POST){
    // echo "IN";
    if (
        isset($_POST['email']) &&
        isset($_POST['pass'])
        ) {
            $db = new FormCollection();
            $email = $_POST['email'];
            $pass =$_POST['pass'];

            $_SESSION["email"] = $email;
            // retrieve data for cheking here
            try {
                $res = $db->selectQuery("SELECT pass FROM credentials WHERE email = '$email'");
                if (count($res) < 1){
                    echo "<br>INVALID EMAIL<br>";
                    exit();
                }
                // echo "<br>res here: ";
                // var_dump($res);
                // echo "<br> PASS: " . $res[0][0] . "<br>";
                if ($res[0][0] == $pass) {
                    ECHO "SUCCESS";
                    header("Location: $user");
                    
                } else {
                    ECHO "INVALID PASSWORD";
                    exit();
                }
            } catch (Error $e){
                // header("Location: /lol.php");
                ECHO "An error occured. Please try again later. " . $e;
            }
        }

} 