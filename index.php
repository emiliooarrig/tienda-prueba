<!DOCTYPE html>
<html>
<head>
    <title>Enviar Notificación por Correo</title>
</head>
<body>
    <h1>Presiona el botón para recibir una notificación por correo</h1>
    <form action="send_email.php" method="post">
        <input type="text" placeholder="name" name = "name" required = "">
        <input type="email" placeholder="email" name = "email" required = "">
        <input type="submit" name="enviar" value="Enviar Notificación">
    </form>

    <?php include("send_email.php") ?>
</body>
</html>
