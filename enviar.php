<!DOCTYPE html>
<html>
<head>
	<title>enviado</title>
</head>
<body>
<?php
   $destino= "edgardavid131@gmail.com"
   $edad = $POST["edad"];
   $hombre = $POST["hombre"];
   $mujer = $POST["mujer"];
   $otro = $POST["otro"];
   $user = $POST["user"];
   $nombre = $POST["nombre"];
   $correo = $POST["correo"];
   $mensaje = $POST["mensaje"];
   $contenido = "edad: " . $edad . "hombre: " . $hombre . "mujer: " . $mujer . "otro: " . $otro . "user" . $user . "nombre" . $nombre . "\nCorreo" . $correo . "\nMensaje: " . $mensaje;
   mail($destino, $mensaje, $contenido)
   header("location:gracias.html);
   
   </body>
   </html>")
?>
</body>
</html>
