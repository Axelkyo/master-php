<?php
// Solucion del Curso
echo "<table border='1'> <tr>"; //inicio de la tabla
    echo "<tr>"; //fila 1
        for($x = 1; $x <= 10; $x++){
            echo '<td>Tabla del ' . $x . '</td>';
        }
    echo "</tr>"; // cierre fila 1
    
    echo '<tr>';
        for($y = 1; $y <= 10; $y++){
            echo '<td>';
            for($z = 1; $z <= 10; $z++){
                echo "$y x $z = " . ($y*$z) . "<br>";
            }
            echo '</td>';
        }
    echo '</tr>';
echo '</table>';
    
?>