<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body> 
    <h1>Formulario en PHP</h1>
    <!--<form method="GET" action="recibir.php">-->
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
        </p>

        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"/>
        </p>
        <input type="submit" value="Enviar Datos"/>
    </form>
    
</body>
</html>