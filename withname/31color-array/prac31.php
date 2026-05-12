<!--
31. Print Array using PHP
Create an indexed array of 3 colors (Red, Green, Blue). Use PHP foreach loop to display them in an
unordered list.
Hint: $colors = array("Red", "Green", "Blue"); then echo <li> inside loop.
-->


<?php
$colors = array("Red", "Green", "Blue");

echo "<ol>";
foreach ($colors as $color) {
    echo "<li>{$color} </li>";
}
echo "</ol>";

?>