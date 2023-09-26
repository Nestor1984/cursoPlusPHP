<?php

// Eliminamos la cookie

setcookie("Idioma", "es", time()-60,"/", "localhost", false, true); #time()-60: La cookie se elimino hace 60 segundos