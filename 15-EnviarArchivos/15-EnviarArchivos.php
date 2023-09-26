<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <!--Para enviar archivos unicamente se puede utilizar el metodo post-->
    <form action="carga.php" method="post" enctype="multipart/form-data"> <!--enctype="multipart/form-data": con esto decimos que estamos enviando archivos desde este formulario-->
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg"> <!--accept="": Dentro de este atributo vamos colocando solamente el tipo de ficheros que queremos seleccionar con este input-->
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>