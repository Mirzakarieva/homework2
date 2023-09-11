<?php 

$a1 = $_POST["a1"] ;
$b1 = $_POST["b1"] ;
$c1 = $_POST["c1"] ;
$a2 = $_POST["a2"] ;
$b2 = $_POST["b2"] ;
$c2 = $_POST["c2"] ;

$d = $a1*$b2 - $a2*$b1 ;
$x = ($c1*$b2 - $c2*$b1) / $d ;
$y = ($a1*$c2 - $a2*$c1) / $d ;

    echo "<b>x=$x.</b><br>" ;
    echo "<b>y=$y.</b>" ;
?>