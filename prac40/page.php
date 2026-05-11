<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idk</title>
</head>

<body>

</body>

</html>


<?php

$fav = $_SESSION["sub"];
echo "MY FAV SUB IS : {$fav} <br><br>";
echo "<a href=\"./index.php\">Click to goto main page</a>";

?>