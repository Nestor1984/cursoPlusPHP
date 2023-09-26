<?php

/*

Include & Require

Incluide: inserta en nuestro script un codigo procedente de otro archivo, si no existe
dicho archivo o si contiene algun tipo de error nos mostrara un 'warning' por pantalla 
y el script seguira ejecutandose.

Require: hace la misma operacion que incluide, pero en caso de no existir el archivo o 
error en el mismo mostrara un 'fatal error' y el script no se sigue ejecutando

*/

/*
Sintaxis:
INCLUDE, INCLUDE_ONCE, REQUIRE & REQUIRE_ONCE

incluide("ruta_archivo.php");           require("ruta_archivo.php");
incluide "ruta_archivo.php";            require "ruta_archivo.php";

include_once("ruta_archivo.php");       require_once("ruta_archivo.php");
include_once "ruta_archivo.php";        require_once "ruta_archivo.php";

*/

/*
Diferencias de (incluide - incluide_once), (require - require_once)

- Incluide o require: Te puede incluir el codigo varias veces.
- Incluide_once o Require_once: Te puede incluir codigo una unica vez.

*/

// Incluimos el archivo por primera vez
include("carpetaExtra/archivoFor.php"); 
echo "<hr>";

echo "Segunda vez <br>";

// Incluimos el archivo por segunda vez
include("carpetaExtra/archivoFor.php"); 


?>