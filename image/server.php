<?php 

/* 
echo "<pre>";
var_dump($_FILES);
echo "<pre>";
*/

$basename = $_FILES["image"]["name"];
$url_image_temp = $_FILES["image"]["tmp_name"];
$ruta_a_subir = "images/$basename";

move_uploaded_file($url_image_temp, $ruta_a_subir);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>
<body>

    <img src="<?= $ruta_a_subir ?>" alt="css.png">
    
</body>
</html>