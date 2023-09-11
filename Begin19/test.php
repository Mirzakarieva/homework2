<?php 

$x1 = $_POST["x1"] ;
$x2 = $_POST["x2"] ;
$y1 = $_POST["y1"] ;
$y2 = $_POST["y2"] ;

$a = abs($x2 - $x1) ;
$b = abs($y2 - $y1) ;
$p = 2*($a + $b) ;
$s = $a *$b ;

echo "The perimeter of the rectangle is $p .<br>" ;
echo "The area of the rectangle is $s .<br>" ;

?>