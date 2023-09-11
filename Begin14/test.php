<?php
$c = $_POST["c"] ;

$pi = round(pi(), 2) ;
$r = $c /(2 * $pi) ;
$s = $pi * pow($r , 2) ;

echo "The radius of the circle is $r sm<br>" ;
echo "The area of the circle is $s sq.sm" ;
?>