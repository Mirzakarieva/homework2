<?php 
$a = $_POST["a"] ;
$b = $_POST["b"] ;

$c = pow($a**2 + $b**2 , 0.5) ;
$p = $a + $b + $c ;

echo "The hypotenuse of the triangle is $c sm <br>" ;
echo "The perimeter of the triangle is $p sm" ;
?>