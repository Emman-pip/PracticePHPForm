<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <hr>
    <main>
        <form action="login.php" method="POST">
            <input type="email" name="email">
            <input type="password" name="pass">
            <button type="submit">LOGIN</button>
        </form>
    </main>
    <?php 
        include "./src/components/DB.php";
        include "./src/components/loginBackend.php";
    ?>
</body>
</html>