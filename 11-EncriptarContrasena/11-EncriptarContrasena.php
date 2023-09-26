<?php

# 1-. hash();
/*
¿Que es un Hash y como funciona?
Una funcion criptografica hash- usualmente conocida como "hash"- es un algortimo
matematico que transforma cualquier bloque arbitrario de datos en una nueva serie 
de caracteres con una longitud fija.

Independientemente de la longitud de los datos de entrada, el valor hash de salida 
tendra siempre la misma longitud.

*/

$clave = "HolaMundo123";
/* Sintaxis de la funcion hash():

 hash("algoritmoPorElCualQueremosProcesarNuestroString", $clave); */
echo hash("md5", $clave) . "<br>";


// Algoritmos que soporta la funcion hash()
echo "<strong> Algoritmos que soporta la funcion hash: </strong> <br>";
foreach (hash_algos() as $algoritmos) { #hash_algos():Devuelve el array de algoritmos de hassin que soporta este hash
    echo $algoritmos . "<br>";
}

#2.- password_hash(); DOCUMENTACION: https://www.php.net/manual/es/faq.passwords.php#faq.password.storing-salts

/*Sintaxis de la funcion password_hash();

password_hash($clave, "algoritmoDeProcesamientoParaLaClave", modificamosElCost);

*/

# El cost: El coste las veces que implementamos la cadena de texto en nuestro string
$claveProcesada = password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]);

if (password_verify($clave, $claveProcesada)) { # password_verify($clave, $claveProcesada): Con la funcion password_verify(): Verificamos si la contrasena original coincide con la constrasena hash generada
    echo "Las claves coinciden";
}else{
    echo "Las claves no coinciden";
}



?>

