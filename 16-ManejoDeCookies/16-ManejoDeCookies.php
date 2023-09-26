<!--Las cookies son un mecanismo por el que se alamcenan datos en el navegador
Se deben crear antes del Doctype-->

<?php
    #setcookie("NombreDeLaCookie", valor, fechaDeExpiracion, directorio, dominio, secure: sirve para crear la cookie cuando la conexion sea segura, httponly: sirve para definir si la cookie podra ser leida unicamente por el protocolo)
    setcookie("Idioma", "es", time()+60*60*24*365,"/", "localhost", false, true); #es: espanol, time()+60Segundos*60Minutos*24Horas*365dias, "/":Disponible en la carpeta raiz, ""
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1><?php echo $_COOKIE['Idioma'];?></h1> <!--$_COOKIE['nombreDeLaCookie'] -->
</body>
</html>