<!--
36. Simple Login Check (PHP + HTML + CSS)
Create a login form (username: "admin", password: "12345"). Use PHP to check credentials and
display success or error message. Style with CSS.
Hint: Hardcoded check: if($user == "admin" && $pass == "12345").
-->


<!DOCTYPE html>
<html lang="en">
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .btn {
        margin-left: 45%;
    }

    p {
        background-color: teal;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length of word</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="uame"> Username :</label>
        <input type="text" name="uname" id="uname">
        <br><br>
        <label for="pass"> Password :</label>
        <input type="password" name="pass" id="pass">
        <br><br>
        <input class="btn" type="submit" value="Login">
    </form>
    <br>
    <hr style="width : 50%;">
</body>


</script>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["uname"];
    $pass = $_POST["pass"];

    if ($username == "admin" && $pass == "12345") {
        echo "<script>alert('Login Successfull')</script>";
    } else {
        echo "<script>alert('Wrong Username or Password')</script>";
    }
}
?>