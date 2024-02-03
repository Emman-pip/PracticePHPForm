
<form action="userWindow.php" method="POST">
    <input type="submit" value="user window" name="submit">
</form>
<script>
    <?php
    // include "../refreshState.js" 
    ?>
</script>
<?php
if (isset($_POST["submit"])){
    echo "clicked";
    // header("Location: /src/components/signUp.php");
}