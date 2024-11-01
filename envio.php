<html>
<body>

Hola <?php echo htmlspecialchars($_POST["nombre"]); ?>!<br>
Tu correo es <?php echo htmlspecialchars($_POST["correo"]); ?><br>
Has enviado el siguiente mensaje: <p><?php echo nl2br(htmlspecialchars($_POST["mensaje"])); ?></p>
Tu respuesta a si deseas recibir respuesta: <?php echo htmlspecialchars($_POST["envioEmail"]); ?><br>
Eres: <?php echo htmlspecialchars($_POST["tipoUsuario"]); ?> 

</body>
</html>