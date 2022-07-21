<?php

var_dump($_POST);
die(); 

$name = htmlentities($_POST["nombre"]);
$username = htmlentities($_POST["username"]); 
$correo = htmlentities($_POST["correo"]); 
$onlywords = preg_replace("/\d/", "", $username); 
$onlynumbers = preg_replace("/\D/", "", $username); 
$email = filter_var($correo, FILTER_SANITIZE_EMAIL);
$age = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

/* echo"<br>";

if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){

    echo"¡Hola {$_POST['nombre']}!";

}else{

    echo "No mandaste nada 😑.";

}

if(isset($_POST["form"])){

    echo "Todo el formulario fue enviado";

}else{

    echo "No se mando todo el formulario";

} */