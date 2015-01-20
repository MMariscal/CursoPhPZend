<?php

$name = "Marcos";

echo gettype($name);

echo "<hr/>";

var_dump($name);

echo "<hr/>";

echo is_string($name);

echo "<hr/>";

echo "<pre>";
print_r($name);

echo "<hr/>";
echo true; // Muestra 1
echo "<hr/>";

echo "Hola $name";
echo "<hr />";
echo "Hola ".$name; // Lo correcto es esto

echo "<hr/>";

echo $name[0];

echo "<hr/>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER['DOCUMENT_ROOT'];

echo @name; // Escribe la variable por la pantalla pero el error lo envia al log de php