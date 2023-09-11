<?php 

$a = $_POST["a"] ;
$b = $_POST["b"] ;

$x = -$b / $a ;

if($a != 0){
    echo "<b>x=$x.</b>" ;
}else{
    echo "A can't be equal to 0!!!" ;
}

?>