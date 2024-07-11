<?php
/*
TIPOS DE DATOS:
Entero (int / integer) = 99
Coma Flotante / decimales (float / double) = 3.45
Cadenas (string) = 'Hola esta es una cadena string'
Booleano (bool) = true, false
null
Array (Coleccion de datos)
Objetos
*/

$numero = 100;
$decimal = 27.9;
$texto = 'Soy un Texto';
$verdadero = false;
$nula = null;

echo gettype($numero) . '<br/>';
echo gettype($decimal). '<br/>';
echo gettype($texto). '<br/>';
echo gettype($verdadero). '<br/>';
echo gettype($nula). '<br/>';

echo "Imprimir un texto mas una variable con comillas dobles $numero <br/>";
echo 'Imprimir un tesde mas una variable con comillas simples ' . $numero . '<br/>';

// Debugear
$mi_nombre = 'Atzael Irigoyen';
var_dump($mi_nombre)

?>