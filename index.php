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
    <main>
        <form action="index.php" method="POST">
            display name: <input type="text" name="displayName"><br>
            email: <input type="email" name="email"><br>
            pass: <input type="password" name="pass"><br>
            <button type="submit" name="submit">Sign UP</button>
        </form>
        <button class="goToLogin">GO TO LOGIN</button>
    </main>
    <?php 

        include "./src/components/DB.php";
        include "./src/components/signUp.php"
    ?>
    <script>
        <?php include "./src/script.js"?>
    </script>
</body>
</html>