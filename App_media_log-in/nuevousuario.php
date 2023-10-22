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
            <form action="panel.php" method="post">
                <h2>CREAR NUEVO USUARIO</h2>
                <input type="text" name="nombre" placeholder="Ingrese su Nombre"  class="barra__datos" required><br>
                <input type="text" name="usuario" placeholder="Ingrese su Usuario"  class="barra__datos" required><br>
                <input type="password" name="contraseña" placeholder="Ingrese su Password"  class="barra__datos" required><br>
                <input type="text" name="edad" placeholder="Ingrese su edad"  class="barra__datos" required><br>
                <!-- botones  -->
                <a href="panel.php"><input type="submit" name="ingresar" value="Crear usuario" class="input__ingresar"></a>

                <a href="panel.php"><input type="submit" name="Iniciar sesión" value="Registrarse" class="input__registrar"></a>

                <a href="iniciar.php"><button class="regresar">Regresar</button></a>
            </form>
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