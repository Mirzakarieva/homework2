<?php
$r = $_POST["radius"] ;

$pi = round(pi(), 2) ;
$c = 2 * $pi * $r ;
$s = $pi * pow($r , 2) ;

echo "The circumference of the circle is $c sm<br>" ;
echo "The area of the circle is $s sq.sm" ;
?>