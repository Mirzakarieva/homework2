<?php 
$r1 = $_POST["r1"] ;
$r2 = $_POST["r2"] ;
$pi = round(pi(), 2) ;

$s1 = $pi * pow($r1, 2) ;
$s2 = $pi * pow($r2, 2) ;
$s3 = $s1 - $s2 ;

echo "The area of the big circle is $s1 sm <br>" ;
echo "The area of the small circle is $s2 sm <br>" ;
echo "The difference of areas of the big and the small circles is $s3 sm <br>" ;
?>