<?php 

$usuarios = array(
    array(
        "id" => 0,
        "username" => "Mr. Michi"
    ),
    array(
        "id" => 1,
        "username" => "Isa"
    ),
    array(
        "id" => 2,
        "username" => "Juancho"
    ),
);

$edad_de_pepito = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables php a JavaScript</title>
</head>
<body>

    <script>

        let users = JSON.parse('<?= json_encode($usuarios) ?>');
        let edad_de_pepito = <?= $edad_de_pepito ?>; 

    </script>

    <script src="./index.js"></script>
    
</body>
</html>