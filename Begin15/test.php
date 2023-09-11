<?php
$s = $_POST["s"] ;

$pi = round(pi(), 2) ;
$r = pow($s/$pi , 0.5) ;
$d = 2 * $r ;


echo "The radius of the circle is $r sm<br>" ;
echo "The diameter of the circle is $d sm" ;
?>