<?php 

$a = $_POST["firstpoint"] ;
$b = $_POST["secondpoint"] ;
$c = $_POST["thirdpoint"] ;

$ac = abs($c - $a) ;
$bc = abs($c - $b) ;
$sum =$ac +$bc ;


echo "The length of AC is $ac .<br>" ;
echo "The length of BC is $bc .<br>" ;
echo "The sum of lengths of AC and BC is $sum ." ;

?>