<?php
echo '<h1>' . $_GET['num1'] . '</h1>';
echo '<h1>' . $_GET['num2'] . '</h1>';
var_dump($_GET);
echo '</br>';

$sum = $_GET['num1'] + $_GET['num2'];
$rest = $_GET['num1'] - $_GET['num2'];
$mult = $_GET['num1'] * $_GET['num2'];
$div = $_GET['num1'] / $_GET['num2'];

echo "La suma de los numeros es = $sum";
echo '</br>';
echo "La resta de los numeros es = $rest";
echo '</br>';
echo "La multiplicacion de los numeros es = $mult";
echo '</br>';
echo "La division de los numeros es = $div";
echo '</br>';

?>