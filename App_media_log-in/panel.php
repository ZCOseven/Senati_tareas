<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos__formulario.css">
</head>
<body>
    <header id="cabecera__panel">
        <img src="img/logo-appmedia.png" alt="logo_app_media">
        <div>
            <h2>Hackathon en casa</h2>
            <p>Conoce que consejos seguir durante el estado de emergencia por el COVID-19</p>
        </div>
        <img src="img/hackathon.png" alt="hackathon__senati">
    </header>
    <section id="cuerpo__panel">
        <article class="articulo-izquierdo">
            <!---->
            <img src="imgdata.png" alt="Imagen-data" class="img__data"><br>
            <a href="iniciar.php">
                <button class="regresar">Cerrar sesión</button>
            </a>
        </article>
        <article class="articulo-principal">
            <nav class="barra__nav">
                <a href="panel.php">Inicio</a>
                <a href="">Registro</a>
            </nav>
            <h2>PANEL DE CONTROL</h2>
            <div class="mi-perfil">
                <h3>Mi perfil</h3>
                <!---->
                <img src="imgeditar-perfil.png"  alt="Imagen-editar-perfil" class="editar__perfil"><br>
                <a href="">Editar perfil</a>
            </div>
        </article>
        <article class="articulo-derecho">
        <?php
            $usuario = $_POST['usuario'];
            echo "Bienvenido<br>"."<strong>$usuario</strong>"."";
        ?>
        </article>
    </section>
</body>
</html>