<!--
34. Student Result Display using PHP Array
Store marks for 3 subjects in a PHP indexed array. Calculate total and percentage. Display in HTML
table with CSS styling.
Hint: Use array(70, 80, 65). Total = array_sum(). Percentage = (total/300)*100.
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

    tr:nth-child(even) {
        background-color: tan;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
</head>

<body>

</body>

</html>


<?php

$markArr = array(70, 80, 65);

$markTotal = array_sum($markArr);
$percentage = ($markTotal / 300) * 100;

echo "<table border='1'>
        <tr>
            <th>Total</th>
            <th>Percentage</th>
        </tr>
        <tr>
            <td>" . $markTotal . "</td>
            <td>" . $percentage . "%</td>
        </tr>
    </table>";

?>