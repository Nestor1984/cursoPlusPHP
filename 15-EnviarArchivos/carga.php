<?php
#La variable global $_FILES['fichero']: sirve para recibir archivos de tipo file
/*
echo $_FILES['fichero']['name'] . "<br>"; #$_FILES['nombreDelInput']['recibirNombre'];
echo $_FILES['fichero']['tmp_name'] . "<br>"; #$_FILES['nombreDelInput']['recibirLaRutaDondeSeEncuentraElArchivoTemporalParaLuegoMoverloAUnaCarpetaDeElProyectoQueNosotrosQueramos'];
echo $_FILES['fichero']['type'] . "<br>"; #$_FILES['nombreDelInput']['tipoDeArchivoQueEstamosEnviando'];
echo $_FILES['fichero']['error'] . "<br>"; #$_FILES['nombreDelInput']['ElErrorSiHaSidoCargadoBienONo'];
echo $_FILES['fichero']['size'] . "<br>"; #$_FILES['nombreDelInput']['ElTamanoQueRecibeEnBytes'];
*/
# Tipos de mime: https://www.lifewire.com/file-extensions-and-mime-types-3469109
# La funcion mime_content_type(): Lo que hace es devolver el tipo de fichero en formato de mime
if (mime_content_type($_FILES['fichero']['tmp_name']) != "image/jpeg" && 
mime_content_type($_FILES['fichero']['tmp_name']) != "image/png" ) {  // Si el archivo es distinto al formato jpeg y es distinto a png, quiere decir q no estamos cargando un archivo permitido
    echo "Tipo de fichero no admitido";
    exit();
}

// Limitamos la carga de archivos a 3 megabytes
if ( ($_FILES['fichero']['size'] / 1024) > 3072 ) { // Si el peso del archivo es mayor a 3 megabytes
    echo "El archivo supera el peso permitido";
    exit();
}





// file_exists(): Comprueba si existe un fichero o directorio
if ( !file_exists("archivos") ) {  // Si el directorio no existe
    
    // mkdir — Crea un directorio
    # mkdir("nombreDelNuevoDirectorio", permisosPorDefecto)
    if (!mkdir("archivos", 0777)) {  // En caso no podamos crear la carpeta
        echo "Error al crear el directorio";
        exit(); // Exit(): detiene la ejecucion del script
    }

}


/* Mover archivo */

chmod("archivos", 0777); // Sirve para darle permisos de escritura a una carpeta o un archivo

# move_uploaded_file — Mueve un archivo subido a una nueva ubicación

# move_uploaded_file(El nombre de archivo del archivo subido, El destino del archivo movido.)
if (move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos/" . $_FILES['fichero']['name'])) {
    echo "Archivo subido con exito";
} else {
    echo "Error al subir el archivo";
}


?>