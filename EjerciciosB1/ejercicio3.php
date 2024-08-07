<?php

$num = 1;
$sqr;

while($num <= 40){
    $sqr = $num * $num;
    echo '<h3>El cuadrado de ' . $num . ' = ' . $sqr . '</h3>';
    $num++;
}

for($x = 1; $x <= 40; $x++){
    $sqr = $x * $x;
    echo "<h2>El cuadrado de $x = $sqr</h2>";
}


?>