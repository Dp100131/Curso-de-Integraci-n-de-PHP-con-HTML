<?php

$is_float = filter_var("Esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int = filter_var("Esto no es un int", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_THOUSAND);

$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);

$is_url = filter_var("platzi.com", FILTER_VALIDATE_URL);

//tambien para EMAIL


var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url); 