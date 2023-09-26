<?php

/*
El operador ternario puede considerarse como una instruccion if de una sola linea.
Sintaxis:

<operator>? <true value>: <false value>;

*/

(9>7)? $total = 10*7: $total = 10*5; // Nota: En un operador ternario no podemos imprimir con echo

echo $total;

?>