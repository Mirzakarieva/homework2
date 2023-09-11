<?php
$d = $_POST["diameter"] ;

$pi = round(pi(), 2) ;
$c = $pi * $d ;

echo "The circumference of the circle is $c sm" ;
?>