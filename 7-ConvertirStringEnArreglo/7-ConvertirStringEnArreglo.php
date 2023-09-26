<?php

$fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

/*
Sintaxis:
explode(delimitador, string, limitador);

*/

# Primer ejemplo
$array_fecha = explode("/", $fecha_1); # explode("caracterPorElCualQueremosSepararLosValores", variable);

echo $array_fecha[0] . ", " . $array_fecha[1] . ", " . $array_fecha[2];

echo "<hr>";

# Segundo Ejemplo
$array_fecha2 = explode("-", $fecha_2); # explode("caracterPorElCualQueremosSepararLosValores", variable);

echo $array_fecha2[0] . ", " . $array_fecha2[1] . ", " . $array_fecha2[2];

echo "<hr>";

# Tercer ejemplo
$array_numeros = explode(" ", $numeros);
foreach ($array_numeros as $key => $i) {
    echo $i . ", ";
}

?>