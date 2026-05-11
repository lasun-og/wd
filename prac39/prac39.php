<!--
39. Simple Marksheet with Grade (PHP + CSS)
Take marks of 3 subjects via HTML form. Use PHP to calculate total, percentage, and grade
(A/B/C/D/F). Display in styled table.
Hint: Grade: ≥75 A, ≥60 B, ≥45 C, ≥35 D, else F.
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
    <title>Student Mark Sheet</title>
</head>

<body>

</body>


</html>


<?php

$marks = [80, 78, 70];
$total = array_sum($marks);
$percentage = ($total / 300) * 100;

switch (true) {
    case ($percentage >= 75):
        $grade = "A";
        break;
    case ($percentage >= 60):
        $grade = "B";
        break;

    case ($percentage >= 45):
        $grade = "C";
        break;

    case ($percentage >= 35):
        $grade = "D";
        break;

    default:
        $grade = "F";
}

echo "
<table border='1'>
        <tr>
            <th>Total Marks</th>
            <th>Percentage</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>{$total}</td>
            <td>{$percentage}</td>
            <td>{$grade}</td>
        </tr>
    </table>
    ";

?>