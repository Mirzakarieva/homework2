<?php 

$firstdot = $_POST["firstpoint"] ;
$seconddot = $_POST["secondpoint"] ;

$distance = abs($seconddot - $firstdot) ;

echo "The distance between these two points is $distance .<br>" ;

?>