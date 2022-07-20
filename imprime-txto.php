<?php 

$gato = "Mister michi";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto con php</title>
</head>
<body>
    
    <header>

        <?php echo "<h1><b> Hola mamá estoy aprendiendo a integrar html con php. </b></h1> <br>" ?>

        <?= "<i>Esta es otra forma de imprimir texto con PHP 😪 </i> <br> <br>" ?>

    </header>

    <main>

        <h1>

            ¡Hola <?= $gato ?>! 😺

        </h1>

    </main>

</body>
</html>