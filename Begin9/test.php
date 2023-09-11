<?php 

$firstnum = $_POST["firstnum"] ;
$secondnum = $_POST["secondnum"] ;

$posNum1 = abs($firstnum) ;
$posNum2 = abs($secondnum) ;

$middle = pow($posNum1*$posNum2 , 0.5) ;

echo "The geometric mean of these numbers is $middle ." ;
?>