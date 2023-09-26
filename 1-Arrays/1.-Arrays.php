<?php

// PHP soporta tanto arrays escalares (indice numerico), arrays asociativos (indice por clave) y arrays multidimensionales

// Arrays Escalares
$estudiantes = array("Carlos", "Jose", "Vanessa", "Katy");
$vacio = array(); // array vacio

echo $estudiantes[2];

# Notacion [] a partir de PHP 5.4
$estudiantes2 = ["Nestor", "Jhoel", "Carla", "Yoselin"];
$vacio2 = []; // array vacio

echo "<br>" . $estudiantes2[0];
echo "<hr>";

// Arrays Asociativos
$tutor = ["nombre"=>"Nestor", "apellido"=>"Mamani", "edad"=>19];

echo $tutor["nombre"];

echo "<hr>";

// Arrays Multidimensionales
# Son arrays que llevan otros arrays dentro de el (matrices)
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

# Imprimimos la matriz
for ($i = 0; $i < count($matriz); $i++) {
    
    for ($j = 0; $j < count($matriz[$i]); $j++) {
      echo $matriz[$i][$j] . " ";
    }
    echo "<br>"; 
  }

?>