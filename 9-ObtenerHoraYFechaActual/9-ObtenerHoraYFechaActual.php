<?php

# En esta pagina puedes buscar mas informacion sobre la funcion date: https://www.php.net/manual/es/function.date.php
# En esta pagina puedes buscar tu zona horaria: https://www.php.net/manual/es/function.date-default-timezone-set.php

// date_default_timezone_set — Establece la zona horaria predeterminada usada por todas las funciones de fecha/hora en un script
date_default_timezone_set("America/La_Paz");

echo date("d");

?>