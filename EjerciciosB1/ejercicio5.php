<?php


if(isset($_GET['num1']) && isset($_GET['num2'])) {
    if($_GET['num1'] < $_GET['num2']){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
    
        for($x = $num1; $x <= $num2; $x++){
            echo $x . ', ';
        }
    } else {
        echo 'El primer valor debe ser mayor al segundo!!!';
    }
} else {
    echo 'Ingresar correctamente los valores en la URL';
}

?>