<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imrpimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - <?php echo "Atzael Irigoyen"; ?></h1>
        <?="Bienvenidos al curso de PHP";?>
        <?php
            // Titulo de la seccion
            echo "<h3>Listado de Videojuegos</h3>";
            /*  
                esta es una 
                lista de videojuegos 
            */
            echo "<ul>"
                    . "<li>Final Fantasy VII - Rebirth</li>"
                    . "<li>Spider-Man 2</li>"
                    . "<li>Call Of Duty Modern Warefare III</li>"
                . "</ul>";
            echo "<p>Este es un ejemplo de concatenacion" . " - " . "con varios strings</p>"
        ?>
        
    </body>
</html>