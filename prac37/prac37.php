<!--
37. Reverse String using PHP + Form
Accept any word from HTML form. Use PHP strrev() to display reversed string. Apply CSS for form
styling.
Hint: echo strrev($_POST['word']);
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

    .inp {
        border: 2px solid tan;
        border-radius: 25px;
    }

    .btn {
        margin-left: 35%;
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
        <label for="uame"> String :</label>
        <input class="inp" type="text" name="strin" id="uname">

        <br><br>
        <input class="btn" type="submit" value="Reverse it">
    </form>
    <br>
    <hr style="width : 50%;">
</body>


</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $getStr = $_POST['strin'];
    $reversedStr = strrev($getStr);
    echo $reversedStr;
}
?>