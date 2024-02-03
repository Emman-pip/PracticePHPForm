<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    include "./src/components/DB.php";
    $db = new FormCollection();
    $email = $_SESSION['email'];
    $data = $db->selectQuery("SELECT id, displayName FROM credentials WHERE email = '$email'");

    echo "WELCOME " . $data[0][1];
    ?>
    <form action="user.php" method="POST">
        <button type="submit" id="#logout" name="logout">LOGOUT</button>
    </form>
    <?php
    if ($_POST){
        if (isset($_POST['logout'])){
            header("Location: index.php");
            session_abort();
            exit();
        }
    }
    ?>
</body>
</html>