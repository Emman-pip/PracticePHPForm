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
        <?php 
        include "./src/components/DB.php";
        include "./src/components/signUp.php";
        ?>
    </main>
    <script>
        <?php include "./src/script.js"?>
    </script>
</body>
</html>