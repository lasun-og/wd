<!--
33. Simple Interest Calculator (PHP + HTML + CSS)
Create a styled HTML form (principal, rate, time). On submit, calculate simple interest using PHP and
display result on same page.
Hint: Formula: ($p * $r * $t)/100. Use isset($_POST['submit']).
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length of word</title>
</head>
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
</style>

<body>
    <form action="index.php" method="POST">
        <label for="principal"> Principal Amount :</label>
        <input type="number" name="pword" id="pword">
        <br>
        <label for="rate"> Rate Amount :</label>
        <input type="number" name="rword" id="rword">
        <br>
        <label for="principal"> Time :</label>
        <input type="number" name="tword" id="tword">
        <br>
        <br><br>
        <input type="submit" value="Calculate Simple Interest">
    </form>
    <hr style="width: 50%;">
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = $_POST['pword'];
    $r = $_POST['rword'];
    $t = $_POST['tword'];

    $sInterest = ($p * $r * $t) / 100;

    echo "Simple Interest for Principal Amount of {$p} with a rate of {$r}% with time of {$t} years is {$sInterest}";
}
?>