<?php 

$a = $_POST["a"] ;
$b = $_POST["b"] ;
$c = $_POST["c"] ;

$d = $b**2 - 4*$a*$c ;
$x1 = (-$b + sqrt($d)) / 2*$a ;
$x2 = (-$b - sqrt($d)) / 2*$a ;

if($a != 0 && $d > 0){
    echo "<b>x1=$x1.</b><br>" ;
    echo "<b>x2=$x2.</b>" ;
}else{
    echo "Discriminant can't be less than 0!!!" ;
}


?>