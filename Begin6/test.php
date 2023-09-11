<?php 
$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$v = $a * $b * $c ;
$s = 2* ($a*$b + $b*$c + $a*$c) ;

echo "The volume of the rectangle prism is $v cubic sm. <br>" ;
echo "The surface area of the rectangle prism is $s square sm." ;
?>