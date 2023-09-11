<?php
$far = $_POST["far"] ;

$cel= round(($far - 32) * 5 / 9 , 2) ;

echo "<b>Temperature in degrees Celsius=$cel."
?>