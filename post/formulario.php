<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por post</title>
</head>
<body>

    <form action="./server.php" method="post">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad">

        <button type="submit">Enviar formulario</button>
        
    </form>
    
</body>
</html>