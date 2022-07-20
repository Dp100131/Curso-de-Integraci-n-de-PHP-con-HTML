<?php

$se_hablo_de_bruno = [true, false];
$i = rand(0, 1); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    
    <!-- Esto no se debe hacer -->
    <h1>Esto no deberías hacerlo</h1>
    <?php if($se_hablo_de_bruno[$i]) { 

        echo "😮";


     }else{

        echo "😃";

     } ?>

    <!-- Esto es aceptable -->
     <h1>Esto es aceotable</h1>
    <?php if (!$se_hablo_de_bruno[$i]) { ?>

        <h1>😮</h1>

    <?php }else{ ?>

        <h1>😃</h1>
    
    <?php }?>


    <h1>Esto si deberias hacerlo</h1>
    <?php if($se_hablo_de_bruno[$i]): ?>
    
        <h1>😮</h1>

    <?php else: ?>

        <h1>😃</h1>

    <?php endif; ?>

</body>
</html>