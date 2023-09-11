<?php 

$a = $_POST["firstpoint"] ;
$b = $_POST["secondpoint"] ;
$c = $_POST["thirdpoint"] ;

$ac = abs($c - $a) ;
$cb = abs($b - $c) ;
$product =$ac * $cb ;

if($a < $c && $c < $b){
    echo "The length of AC is $ac .<br>" ;
    echo "The length of CB is $cb .<br>" ;
    echo "The product of lengths of AC and CB is $product ." ;
}else{
    echo "Follow the conditions!!! " ;
}
?>