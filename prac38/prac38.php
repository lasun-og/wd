<!--
38. Vowel Counter using PHP
Create a form to accept a sentence. Use PHP to count number of vowels (a, e, i, o, u) in it. Display count
with CSS styling.
Hint: Use strlen() and loop, or substr_count() with strtolower()
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
        <input class="btn" type="submit" value="Find vowels">
    </form>
    <br>
    <hr style="width : 50%;">
</body>


</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $getStr = $_POST['strin'];
    $lowerStr = strtolower($getStr);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vcount = 0;

    for ($i = 0; $i < strlen($getStr); $i++) {
        if (in_array($lowerStr[$i], $vowels)) {
            $vcount++;
        }
    }

    echo "No of vowels in Word {$getStr} is {$vcount}";
}
?>