<head>
    <style>
        <?php include "./src/styles.css" ?>
    </style>
</head>

<main class="signUpPage">
    
    <h1>SIGNUP</h1>
        <form action="index.php" method="POST" class="signUpForm">
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
            <button class="goToLogin">GO TO LOGIN</button>
        </form>
</main>
    <?php 
        // include "./src/components/DB.php";
        include "./src/components/signUp.php"
    ?>