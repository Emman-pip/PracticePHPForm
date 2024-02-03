<?php 
session_start();
include "DB.php";

if ($_POST){
    if (
        isset($_POST['displayName']) && 
        isset($_POST['pass']) && 
        isset($_POST['email'])
    ) {
        $name = $_POST['displayName'];
        $pwd = $_POST['pass'];
        $email = $_POST['email'];
        
        // $query = "INSERT INTO Credentials(displayName, email, pass ) VALUES('$name', '$email', '$pwd')";

        $db = new FormCollection();
        try {
            $db->actionQuery("INSERT INTO Credentials(displayName, email, pass ) VALUES('$name', '$email', '$pwd')");
        } catch (mysqli_sql_exception $e){
            echo "CHANGE USERNAME OR EMAIL";
            exit();
        }
        echo "signup success";
        session_abort();
        header("Location:"  . $_SERVER['REQUEST_URI'], true, 303);
        exit();
    }
}

