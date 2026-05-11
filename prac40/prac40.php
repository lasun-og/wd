<!--
40. Favorite Subject Storage using Session (PHP + HTML + CSS)
Create a form to enter favorite subject. Use PHP session to store it and display "Your favorite subject
is [subject]" on next page. Add basic CSS.
Hint: Start session_start(). Store $_SESSION['subject'] = $_POST['subject']. Retrieve and display
-->

<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fav Subject</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="subject">Enter the name of your fav subject : </label>
        <input type="text" name="fav" id="fav">
        <br><br>
        <input type="submit" name="sub" id="sub">
    </form>

    <a href="./page.php">Click to goto next page</a>
</body>

</html>


<?php

if (isset($_POST["sub"])) {
    $_SESSION['sub'] = $_POST["fav"];
    header("page.php");
}

?>