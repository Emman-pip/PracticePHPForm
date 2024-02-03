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
<main class="indexHero">
    <main class="signUpPage">
        
        <h1>SIGNUP</h1>
            <form action="signUpPage.php" method="POST" class="signUpForm">
                <label for="displayName">
                    display name: 
                </label>
                <input type="text" name="displayName" minlength="5">
                <label for="email">
                    email: 
                </label>
                <input type="email" name="email" minlength="5" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                <label for="pass">
                    pass: 
                </label>
                <input type="password" name="pass" minlength="8">
                <input type="submit" name="submit" value="SIGNUP">
                <form action="signUpPage" method="POST">
                    <button name="goToLogin">GO TO LOGIN</button>
                </form>
            </form>
    <?php 
        // include "./src/components/DB.php";
        if (isset($_POST['goToLogin'])){
            header("Location: " .  "/login.php", true, 303);
            session_abort();
            exit();
        }
        include "./src/components/signUp.php";
    ?>
    </main>
</main>
</body>
</html>
