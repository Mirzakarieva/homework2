<?php
$v = $_POST["v"] ;
$u = $_POST["u"] ;
$t1 = $_POST["t1"] ;
$t2 = $_POST["t2"] ;

$speedwithflow = $v + $u ;
$speedagainst = $v - $u ;
$s = $speedwithflow * $t1 + $speedagainst * $t2 ;

if($v>$u){
    echo "<b>The distance = $s km</b><br>" ;
}else{
    echo "<b>The speed of the river can't be more than the speed of the sheep</b>" ;
}

?>