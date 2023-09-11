<?php 

$firstnum = $_POST["firstnum"] ;
$secondnum = $_POST["secondnum"] ;

$sum = $firstnum + $secondnum ;
$product = $firstnum * $secondnum ;
$modulus1 = abs($firstnum) ;
$modulus2 = abs($secondnum) ;

if($firstnum != 0 && $secondnum != 0){
    echo "The sum of these numbers is $sum .<br>" ; 
    echo "The product of these numbers is $product .<br>" ;
    echo "The modulus of the first number is $modulus1 .<br>" ;
    echo "The modulus of the second numbers is $modulus2 .<br>" ;
}
else{
    echo"None of numbers can be equal to 0." ;
}
?>