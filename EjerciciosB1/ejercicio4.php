

<!-- Mi solucion 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body> 
    <h1>Formulario en PHP</h1>
    <form method="GET" action="ejercicio4get.php">
        <p>
            <label for="num1">Primer Numero</label>
            <input type="number" name="num1"/>
        </p>

        <p>
            <label for="num2">Segundo Numero</label>
            <input type="number" name="num2"/>
        </p>
        <input type="submit" value="Enviar Datos"/>
    </form>    
</body> -->

<?php
// Solucion del Curso
// Modificar la URL al final con "?num1=1&num2=2"
if(isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo 'La suma de los numeros es: ' . ($num1 + $num2) . '</br>';
    echo 'La resta de los numeros es: ' . ($num1 - $num2) . '</br>';
    echo 'La Multiplicacion de los numeros es: ' . ($num1 * $num2) . '</br>';
    echo 'La division de los numeros es: ' . ($num1 / $num2) . '</br>';
}

?>