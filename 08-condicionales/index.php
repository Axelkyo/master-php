<?php
/* 
CONDICIONALES
IF:
    if(condicion){
        instrucciones
    } else {
        otras instrucciones
    }

Operadores:
== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

Operadores Logicos:
&& AND Y
|| OR O
! NOT NO
and, or
*/

$color = 'azul';
if($color == 'rojo'){
    echo 'El color es rojo';
    echo '<br/>';
} else {
    echo "El color no es rojo";
    echo '<br/>';
}

$year = 2019;
if($year == 2019) {
    echo 'Estamos en el año 2019';
    echo '<br/>';
} else {
    echo 'No estamos en el 2019';
    echo '<br/>';
}

$year = 2019;
if($year < 2019) {
    echo 'Es un año anterior a 2019';
    echo '<br/>';
} else {
    echo 'Es el año 2019 o un año posterior';
    echo '<br/>';
}

$year = 2018;
if($year != 2019) {
    echo 'Es un año diferente al 2019';
    echo '<br/>';
} else {
    echo 'Es el año 2019';
    echo '<br/>';
}

$year = 2018;
if($year <= 2019) {
    echo 'Es el año 2019 o un año anterior';
    echo '<br/>';
} else {
    echo 'Es un año mayor a 2019';
    echo '<br/>';
}

// Operadores de comparacion
$nombre = 'Atzael';
$ciudad = 'Durango';
$continente = 'europa';
$edad = 20;
$mayor_edad = 18;

if($edad >= $mayor_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    echo '<h1>' . $nombre . ' es mayor de edad' . '</h1>';
    if($continente == 'america'){
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo "<h2>Es de otro continente, es de $continente</h2>";
    }
} else {
    echo "<h2>$nombre es menor de edad</h2>";
}

// Else if
echo '<hr/>';
$dia = 8;

if($dia == 1) {
    echo 'Es Lunes';
} else {
    if($dia == 2){
        echo 'Es Martes';
    } else {
        if($dia == 3){
            echo ' Es Miercoles';
        } else {
            if($dia == 4){
                echo 'Es Jueves';
            } else {
                if($dia == 5){
                    echo 'Es Viernes';
                } else {
                    if($dia == 6){
                        echo 'Es Sabado';
                    } else {
                        if($dia == 7){
                            echo 'Es Domingo';
                        } else {
                            echo 'El dia es incorrecto, no pertenece a ningun dia de la semana';
                        }
                    }
                }
            }
        }
    }
}
echo '<hr/>';

if($dia == 1){
    echo 'Es Lunes';
} elseif ($dia == 2){
    echo 'Es Martes';
} elseif ($dia == 3){
    echo 'Es Miercoles';
} elseif ($dia == 4){
    echo 'Es Jueves';
} elseif ($dia == 5){
    echo 'Es Viernes';
} elseif ($dia == 6){
    echo 'Es Sabado';
} elseif ($dia == 7){
    echo 'Es Domingo';
} else {
    echo 'El dia es incorrecto, no pertence a ningun dia de la semana';
}
echo '<hr/>';

// Switch
switch($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
    default:
        echo 'El numero ingresado no pertenece a ningun dia de la semana';
}
echo '<hr/>';

// Operadores Logicos
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 10;
if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Es apto para trabajar';
} else {
    echo 'No cumple con la edad requerida';
    echo '<hr/>';
}

$pais = 'EUA';

if($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia'){
    echo 'En este pais se habla el Español';
} else {
    echo 'En este pais NO se habla el Español';
}

//GOTO
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

marca: 
echo '<h1>Me he saltado 4 echos</h1>';

?>
