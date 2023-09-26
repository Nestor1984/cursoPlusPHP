<?php

$materias = $_POST['asignatura']; # $_POST['asignatura']: es el array que estamos enviando por el metodo post

foreach ($materias as $asignatura) {
    echo $asignatura . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$fresa = $_POST['frutas']; # Recibimos el array frutas del formulario
foreach ($fresa as $fruta) {
    echo $fruta . "<br>";
}


?>