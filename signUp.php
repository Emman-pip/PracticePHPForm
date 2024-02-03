<?php session_start() ?>
<div class="signInPrompt">
    <form action="signUp.php " method="POST">
        <div class="signUpTitle">CREATE AN ACCOUNT</div>
        <input type="email" name="name" id="name" placeholder="EMAIL" pattern="\S+@\S+" required>
        <input type="password" name="pwd" id="pwd" placeholder="PASSWORD" minlength="8" required>
        <input type="password" name="pwd" id="pwd2" placeholder="RETYPE PASSWORD" minlength="8" required>
        <input type="submit" value="SIGN UP" id="signUpBtn">
    </form>

    <?php
    include "./DB.php";
    $formCollect = new FormCollection();
    if ($_POST){
        if (!empty($_POST["name"]) && !empty($_POST["pwd"])){
            $name = $_POST["name"];
            $pwd = $_POST["pwd"];
            $formCollect->actionQuery("INSERT INTO Credentials(NAME, PASSWORD ) VALUES('$name', '$pwd')");
            $NAME = $name;
            // header("./userWindow.php");
            header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
            // header('Location:/src/components/userWindow.php', false, 303);
            // header('Location:/src/components/userWindow.php', false, 303);

            echo $_SERVER['SCRIPT_NAME'];
            
            // exit();
        }
    }
    // $res = $formCollect->selectQuery("SELECT * FROM Credentials;");
    // for ($i = 0; $i < count($res); $i++){
    //         for ($q = 0; $q < count($res[$i]); $q++){
    //                 echo  $res[$i][$q] . "   ";
    //     }
    //     echo "<br>";
    // }
    ?>
        
</div>
    <script>
        <?php
        include "../script.js"
        ?>
    </script>