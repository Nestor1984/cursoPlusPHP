<?php

# La funcion strlen(): sirve para contar caracteres de un string
$cadena = "hola mundo";

$longitud = strlen($cadena);

echo "La cantidad de caracteres que tiene el mensaje (" . $cadena . ") es de: " . $longitud;

echo "<hr>";

# La funcion str_word_count(): sirve para contar palabras
$cadena2 = "Hola mundo php";

$palabras = str_word_count($cadena2);
echo "La cantidad de palabras que tiene el mensaje (" . $cadena2 . ") es de: " . $palabras;



?>