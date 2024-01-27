
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
    if (!empty($_POST["name"]) && !empty($_POST["pwd"])){
        $name = $_POST["name"];
        $pwd = $_POST["pwd"];
        $formCollect->actionQuery("INSERT INTO Credentials(NAME, PASSWORD ) VALUES('$name', '$pwd')");
    }
    $res = $formCollect->selectQuery("SELECT * FROM Credentials;");
    for ($i = 0; $i < count($res); $i++){
            for ($q = 0; $q < count($res[$i]); $q++){
                    echo  $res[$i][$q] . "   ";
        }
        echo "<br>";
    }
    header("../../index.php");
    ?>
        
</div>
    <script>
        <?php
        include "../script.js"
        ?>
    </script>