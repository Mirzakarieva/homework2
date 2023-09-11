<?php 
$alpha = $_POST["alpha"] ;

$pi = round(pi() , 2) ;
$radian = round($alpha * 180 / $pi, 2) ;

echo "<b>Alpha angle=$radian radians</b>" ;
?>