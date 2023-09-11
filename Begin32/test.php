<?php
$cel = $_POST["cel"] ;

$far= round(($cel * 9 / 5) + 32 , 2) ;

echo "<b>Temperature in degrees Fahrenheit=$far."
?>