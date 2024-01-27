<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>
<body>
    <main>
        <div class="signInPrompt">
            <form action="index.php " method="POST">

                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
                <label for="pwd">Password: </label>
                <input type="password" name="pwd" id="pwd">
                <input type="submit" value="Save to DB">
            </form>
            <?php 

            include "DB.php";
            $formCollect = new FormCollection();
            if (isset($_POST["name"]) && isset($_POST["pwd"])){
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
            ?>
        
        </div>
    </main>
</body>
</html>