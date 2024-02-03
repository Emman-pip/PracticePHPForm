<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "./src/styles.css" ?>
    </style>
</head>
<body>
    <main class="loginPage">
        <h1>LOGIN</h1>
        <hr>
        <form action="login.php" method="POST">
            <label for="email">Email: </label>
            <input type="email" name="email">
            <label for="pass">Password: </label>

            <input type="password" name="pass">
            <button type="submit">LOGIN</button>
            <form action="login.php" method="POST">
                <button name="goToSignUp">GO TO SIGNUP</button>
            </form>
        </form>
    </main>
    <?php 
        if (isset($_POST['goToSignUp'])){
            header("Location: index.php", true, 303);
            exit();
        }
        include "./src/components/DB.php";
        include "./src/components/loginBackend.php";
    ?>
</body>
</html>