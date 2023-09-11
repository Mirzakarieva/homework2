<?php
$x = $_POST["x"] ;
$a = $_POST["a"] ;
$y = $_POST["y"] ;

$kg = $a / $x ;
$ykg = $y * $kg ;

echo "<b>$x kg = $a so'ms</b><br>" ;
echo "<b>1 kg = $kg so'ms</b><br>" ;
echo "<b>$y kg = $ykg so'ms</b><br>" ;
?>