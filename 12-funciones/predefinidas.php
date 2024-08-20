<?php

// Debugger
$nombre = 'Atzael Iriogyen';
var_dump($nombre);
echo '<br/>';

//Fechas
echo date('m-d-y');
echo '<br/>';
echo time();
echo '<br/>';

// Matematicas
echo "Raiz cuadrada de 10: " . sqrt(10);
echo '<br/>';
echo "Numero aleatorio entre 10 y 40: " .rand(10, 40);
echo '<br/>';
echo "El valor de pi es: " . pi();
echo '<br/>';
echo "Redondear " . round(7.891234, 2);
echo '<br/>';

// Funciones Generales
echo gettype($nombre);
echo '<br/>';

// Detectar tipado
if(is_string($nombre)){
    echo 'La variable es un string';
}
echo '<br/>';
if(!is_float($nombre)){
    echo 'La variable no es un numero con decimales es: ' . gettype($nombre);
}
echo '<br/>';

// Comprobar que la variable existe o si es null
$edad;
if(isset($edad)){
    echo 'La variable si existe';
} else {
    echo 'La variable no existe o es NULL';
}
echo '<br/>';

// Limpiar espacios
$frase = '          espacios antes y despues           ';
var_dump(trim($frase));
echo '<br/>';

// Eliminar variables o Indices de arrays
$year = 2024;
var_dump($year);
unset($year);
// var_dump($year);
echo '<br/>';

// Comprobar si una variable esta vacia
if(empty($edad)){
    echo 'La variable esta vacia';
} else {
    echo 'La variable TIENE UN VALOR';  
}
echo '<br/>';

// Contar caracteres de un String
$cadena = '12345';
echo strlen($cadena);
echo '<br/>';

// Encontrar caracter
$frase = 'La vida es bella';
echo strpos($frase, 'i');
echo '<br/>';

// Reemplazar palabras en un String
$frase = str_replace('vida', 'moto', $frase);
echo $frase;
echo '<br/>';

// Mayusculas y Minusculas
$cadena = 'STRtoLOWER';
echo strtolower($cadena);
echo '<br/>';
echo strtoupper($cadena);

?>