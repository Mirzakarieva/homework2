<?php 

$x1 = $_POST["x1"] ;
$x2 = $_POST["x2"] ;
$x3 = $_POST["x3"] ;
$y1 = $_POST["y1"] ;
$y2 = $_POST["y2"] ;
$y3 = $_POST["y3"] ;


$ab = round( sqrt(pow($x2-$x1 , 2) + pow($y2-$y1 , 2)) , 2) ;
$bc = round( sqrt(pow($x3-$x2 , 2) + pow($y3-$y2 , 2)) , 2) ;
$ac = round( sqrt(pow($x3-$x1 , 2) + pow($y3-$y1 , 2)) , 2) ;
$p = $ab + $bc + $ac ;
$hp = $p / 2 ;
$s = round( sqrt($hp * ($hp-$ab) * ($hp-$bc) * ($hp-$ac)) , 2) ;

echo "The perimeter of the triangle is $p . <br>" ;
echo "The area of the triangle is $s . <br>";
?>