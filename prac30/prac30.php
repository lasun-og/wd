<!--
30. Simple POST Form in PHP
Create an HTML form asking for user's name. On submit, PHP displays "Hello [name]". Use POST
method.
Hint: Use $_POST['name']. Check if($_SERVER["REQUEST_METHOD"] == "POST").
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>

<body>
    <form action="index.php" method="post">

        <label for="uname">Name :</label>
        <input type="text" name="uname" id="uname">
        <input type="submit" value="submit name">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['uname'];
    echo "Hello {$uname} <br>How are you today?";
}
?>