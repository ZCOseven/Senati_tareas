<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos__formulario.css">
</head>
<body>
    <section id="form">
        <main class="contenido-formulario">
            <h2>INICIAR SESIÓN</h2>
            <form action="panel.php" method="post">
                <input type="text" name="usuario" placeholder="Ingrese su Usuario"  class="barra__datos" required><br>
                <input type="password" name="contraseña" placeholder="Ingrese su Password"  class="barra__datos" required><br>
                <input type="submit" name="ingresar" value="Ingresar" class="input__ingresar"><br><br>
            </form>
                <!-- botones  -->
                <a href="nuevousuario.php"><input type="submit" name="registrar" value="Registrarse" class="input__registrar"></a><br><br>
                <a href="index.html"><button class="regresar">Regresar</button></a>
        </main>
    </section>
<?php
if (isset($_POST['ingresar'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
}
?>
</body>
</html>