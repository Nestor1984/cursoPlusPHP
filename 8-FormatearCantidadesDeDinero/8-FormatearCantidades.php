<?php

# Formatear Numero o Cantidades de dinero en php

$cantidad_1 = 12732.5;
$cantidad_2 = 1931.81;

// number_format(cantidad, decimales, sep_decimal, sep_millar);

# Ejemplo 1
$cantidad_1 = number_format($cantidad_1, 2, " . ", " , ");

echo $cantidad_1;

echo "<hr>";

# Ejemplo 2
$cantidad_2 = number_format($cantidad_2, 2, " . ", " , ");

echo $cantidad_2

?>