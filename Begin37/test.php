<?php
$v1 = $_POST["v1"] ;
$v2 = $_POST["v2"] ;
$t = $_POST["t"] ;
$s = $_POST["s"] ;

$lS = $s - ($v1 + $v2) * $t ;

echo "<b>Distance left = $lS km</b><br>" ;
?>