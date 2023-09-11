<?php 

$firstnum = $_POST["firstnum"] ;
$secondnum = $_POST["secondnum"] ;

$sum = $firstnum + $secondnum ;
$product = $firstnum * $secondnum ;
$square1 = pow($firstnum , 2) ;
$square2 = $secondnum ** 2 ;

if($firstnum != 0 && $secondnum != 0){
    echo "The sum of these numbers is $sum .<br>" ; 
    echo "The product of these numbers is $product .<br>" ;
    echo "The square of the first number is $square1 .<br>" ;
    echo "The square of the second numbers is $square2 .<br>" ;
}else{
    echo"None of numbers can be equal to 0." ;
}

?>