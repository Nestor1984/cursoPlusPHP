<?php

# Funcion is_null: Nos permite comprobar si una variable es nula, si la variable es nula devuelve true, si no false

$numero = null;
if (is_null($numero)) {
    echo "La variable es nula";
} else {
    echo "La variable no es nula";
}

echo "<hr>";

# Funcion empty(): Nos permite comprobar si una variable esta vacia o no
/*
Los siguientes valores son considerados como vacíos:

- "" (una cadena vacía)
- 0 (0 como un integer)
- 0.0 (0 como un float)
- "0" (0 como un string)
- null
- false
- array() (un array vacío)
*/
$numero2 = "";
if (is_null($numero2)) {
    echo "La variable esta vacia";
} else {
    echo "La variable no esta vacia";
}

echo "<hr>";

# Funcion isset(): Determina si una variable esta definida y no es null

$numero3 = "";
if (isset($numero3)) {
    echo "La variable esta definida y no es null";
} else {
    echo "La variable no esta definida y es null";
}
?>