<?php
/*
ESTRUCTURA DE UNA FUNCION
funtion nombre_de_mi_funcion(){
    INSTRUCCIONES;
}

LLAMAR FUNCION
nombre_de_mi_funcion($paramtetro);
*/

//Ejemplo 1
function nombres(){
    echo "Atzael <br/>";
    echo "Irigoyen <br/>";
    echo "Dev <br/>";
}

nombres();
nombres();
nombres();

//Ejemplo 2
// Multiplicacion
// function tabla($num1, $num2){
//     echo "<hr/>";
//     $tabla = $num1 * $num2;
//     echo  $tabla;
// }

// tabla(2, 5);

// Tabla de multiplicar mi metodo
// function tabla($num){
//     echo "<h3>Tabla de multiplicar del numero $num <br/>";
//     for($x = 1; $x <= 10; $x++){
//         echo "$num x $x = " . $num * $x . "<br/>";
//     }
// }

// tabla(2);

// Tabla de multiplicar Metodo Curso

function tabla($num) {
    echo "<h3> Tabla de multiplica del numero: $num </h3><br/>";
    for($i = 1; $i <= 10; $i++){
        $op = $num * $i;
        echo "$num x $i = $op <br/>";
    }
}

if(isset($_GET['num'])){
    tabla($_GET['num']);
} else {
    echo "<h3>Ingresar un numero para imprimir tabla</h3>";
}

for($i = 0; $i <= 10; $i++){
    tabla($i);
}

// Ejemplo 3
// echo "<h3> Calculadora Básica";
// function calc($num1, $num2){
//     $suma = $num1 + $num2;
//     $rest = $num1 - $num2;
//     $mult = $num1 * $num2;
//     $div = $num1 / $num2;

//     echo "Suma: $suma <br/>";
//     echo "Resta: $rest <br/>";
//     echo "Multiplicacion: $mult <br/>";
//     echo "Division: $div <br/>";
//     echo "<hr/>";
// }

// calc(10, 30);
// calc(15, 11);
// calc(100, 20);

// Parametros Opcionales
// function calc($num1, $num2, $negrita = false){
//     $suma = $num1 + $num2;
//     $rest = $num1 - $num2;
//     $mult = $num1 * $num2;
//     $div = $num1 / $num2;

//     if($negrita != false){
//         echo "<h1>";
//     }

//     echo "Suma: $suma <br/>";
//     echo "Resta: $rest <br/>";
//     echo "Multiplicacion: $mult <br/>";
//     echo "Division: $div <br/>";

//     if($negrita != false){
//         echo "</h1>";
//     }

//     echo "<hr/>";
// }

// calc(10, 30, true);
// calc(15, 11);
// calc(100, 20);

// Return

function devuelve($nombre){
    return "El nombre es: $nombre <br/>";
}

echo devuelve('Atzael Irigoyen');

// Calculadora con RETURN
function calc($num1, $num2, $negrita = false){
    $suma = $num1 + $num2;
    $rest = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
    $cadena = "";

    if($negrita != false){
        $cadena .= "<h1>";
    }

    $cadena .= "Suma: $suma <br/>";
    $cadena .= "Resta: $rest <br/>";
    $cadena .= "Multiplicacion: $mult <br/>";
    $cadena .= "Division: $div <br/>";

    if($negrita != false){
        $cadena .= "</h1>";
    }

    $cadena .= "<hr/>";
    
    return $cadena;
}

echo calc(10, 30, true);

// Ejemplo 4

// function fullName($firstName, $lastName){
//     $text = "El nombre es: $firstName" . "<br/>" . "El apellido es: $lastName";
//     return $text;
// }

// echo fullName('Atzael', 'Irigoyen');

function getFirstName($firstName){
    $text = "El Nombre es: $firstName";
    return $text;
}

function getLastName ($lastName){
    $text = "El apellido es: $lastName";
    return $text;
}

function fullName1() {
    echo getFirstName('Atzael') . '<br/>' . getLastName('Irigoyen') . '<br/>';
}

echo fullName1();

function fullName2($firstName, $lastName){
    echo getFirstName($firstName) . '<br/>' . getLastName($lastName) . '<br/>';
}

echo fullName2('Atzael', 'Irigoyen');

?>