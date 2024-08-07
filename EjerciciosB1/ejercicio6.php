<!-- Mi Solucion -->
<div style="display: flex">
<?php
    if(isset($_GET['tablas']) && isset($_GET['mult'])){
        if($_GET['tablas'] && $_GET['mult'] > 0){
            $lim1 = $_GET['tablas'];
            $lim2 = $_GET['mult'];
            for($x = 1; $x <= $lim1; $x++){
                echo '<table border="1" style="margin-right: 10px">';
                echo '<tr>';
                    echo '<th colspan="3">Tabla del ' . $x . '</th>';
                echo '</tr>';
                    for($y = 1; $y <= $lim2; $y++){
                            echo '<tr>';
                                echo '<td>';
                                    echo '<p>' . $x . ' x ' . $y . '</p>';
                                echo '</td>';
                                echo '<td>';
                                    echo '<p> = </p>';
                                echo '</td>';
                                echo '<td>';
                                    echo '<p>' . $x*$y . '</p>';
                                echo '</td>';
                            echo '</tr>';
                    }
                    echo '</table>';
                }
        } else {
            echo 'Nigun valor puede ser 0';
        }
    } else {
        echo 'Ingresa los valores correctos en la URL';
    }
?>
</div>