<?php
//MÉTODO HTTP
echo"Método:";
echo$_SERVER['REQUEST_METHOD'];

//HEADERS
echo "\nHeaders";
$headers=getallheaders();
//print_r($headers);

//POST
echo "\nPost";
print_r($_POST);
