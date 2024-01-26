<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text">
    </form>
    <?php 
    include "DB.php";
    $formCollect = new FormCollection();
    $createTable = "CREATE TABLE ClientInfo(ID INT PRIMARY KEY AUTO_INCREMENT, NAME VARCHAR(90));";
    
    $formCollect->actionQuery(); // use mysqli_escape_string for security;
    var_dump($formCollect->selectQuery("SHOW TABLES;"));
    ?>
</body>
</html>