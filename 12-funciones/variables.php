<?php
/*
Variables Locales: son las que se definen dentro de una funcion y no pueden ser usadas fueras de la funcion, solos estan disponibles dentro de la funcion a menos de que se use el return

Variables Globales: son las que se definen fuera de las funciones y estan disponibles dentro y fuera de las mimas.
*/
// Variable Global
$frase = "Ni los genios son tan genios, ni los tontos tan tontos";

echo $frase;

function helloWorld(){
    global $frase;
    echo "<h1>$frase</h1>";

    $year = '2024';
    echo "<h2>$year<h2/>";

    return $year;
}

echo helloWorld();

function goodMorning(){
    return "<h1>Buenos dias</h1>";
}
function goodAfternoon(){
    return "<h1>Buenas Tardes</h1>";
}
function goodNight(){
    return "<h1>Buenas Noches</h1>";
}

$hello = "goodNight";
echo $hello();

$dayTime = 'Morning';
$hello2 = 'good' . $dayTime;
echo $hello2();
echo 'good' . $dayTime();

$schedule = $_GET['schedule'];
$hello3 = 'good' .$schedule;
echo $hello3();

?>