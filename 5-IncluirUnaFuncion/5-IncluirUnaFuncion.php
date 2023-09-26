<?php

# Como incluir y llamar una funcion desde otro archivo php

function promedio_alumno($nota_1, $nota_2, $nota_3){
    $promedio = ($nota_1 + $nota_2 + $nota_3)/3;
    return $promedio;
}

?>