<?php
$x = $_POST["x"] ;
$a = $_POST["a"] ;
$y = $_POST["y"] ;
$b = $_POST["b"] ;

$choccost = $a / $x ;
$sweetcost = $b / $y ;
$difference = $choccost - $sweetcost ;

echo "<b>1 kg of chocolate = $choccost so'ms</b><br>" ;
echo "<b>1 kg of sweets = $sweetcost so'ms</b><br>" ;
echo "<b>Chocolate costs $difference so'ms more than sweets</b><br>" ;
?>