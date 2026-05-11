<!--
32. Simple String Length using PHP
Accept a word from HTML form. Use PHP to display its length using strlen().
Hint: echo strlen($_POST['word']);
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length of word</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="word"> Word :</label>
        <input type="text" name="word" id="word">
        <br><br>
        <input type="submit" value="Find Length">
    </form>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $word = $_POST["word"];
    $length = strlen($word);
    echo "<hr> Length of {$word} is {$length} ";
}
?>