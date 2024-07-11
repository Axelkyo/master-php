<?php
// Operadores aritmeticos
$numero1 = 55;
$numero2 = 33;
$numero3 = 67;

echo 'La suma es: ' . ($numero1 + $numero2);
echo '<br/>';
echo 'La resta es: ' . ($numero1 - $numero2);
echo '<br/>';
echo 'La multiplicaion es: ' . ($numero1 * $numero2);
echo '<br/>';
echo 'La division es: ' . ($numero1 / $numero2);
echo '<br/>';
echo 'El reste de una division es: ' . ($numero1 % $numero2);
echo '<br/>';
echo 'El reste de una division es: ' . ($numero3 % $numero2);
echo '<br/>';

// Operadores de incremente y decremento

$year = 2024;
echo '<h1>' . $year . '</h1><br/>';
$year++;
echo '<h1>' . $year . '</h1><br/>';
$year--;
echo '<h1>' . $year . '</h1><br/>';
++$year;
echo '<h1>' . $year . '</h1><br/>';
--$year;
echo '<h1>' . $year . '</h1><br/>';

// Operadores de asignacion
$edad = 35;
echo $edad . '<br/>';
echo($edad += 5) . '<br/>';
$edad = 35;
echo $edad . '<br/>';
echo($edad -= 5) . '<br/>';
$edad = 35;
echo $edad . '<br/>';
echo($edad *= 5) . '<br/>';
$edad = 35;
echo $edad . '<br/>';
echo($edad /= 5) . '<br/>';
$edad = 35;
echo $edad . '<br/>';
echo($edad %= 5) . '<br/>';

?>