<!--
35. Even-Odd Checker (PHP + CSS)
Create a number input form. Use PHP to check if number is even or odd. Style the output with colored
background using CSS.
Hint: Use modulo $num % 2 == 0. Apply CSS class dynamically
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

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
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
        <label for="number"> Number :</label>
        <input type="text" name="number" id="number">
        <br><br>
        <input type="submit" value="Find odd or even">
    </form>
    <br>
    <hr style="width : 50%;">
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST['number'];
    $parity = ($number % 2 == 0);

    if ($parity) {
        echo "<p>Even number</p>";
    } else {
        echo "<p>ODD number</p>";
    }
}
?>