<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Normalize-->
    <link rel="stylesheet" href="normalize/normalize.css">
    <!--Esstilos CSS-->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor galeria-rsponsive">
        <header>
            <nav class="navbar menu__navbar">
                <a class="logo" href="index.php">Written</a>
                <div class="menu-links menu__navbar">
                    <ul class="menu-lista-link">
                        <li><a class="link-active-red" href="inicio.php">Inicio</a></li>
                    </ul>
                    <a class="registro__btn" href="registro.php">Registrate</a>
                </div>
            </nav>
        </header>

        <div class="formulario">



            <form action="#" method="POST">
                <div class="contenedor-inputs">
                    <h2>
                        <span>Comienza a leer tus Novelas favoritas</span>
                    </h2>
                    <label for="nombre">Nombre de Usuario</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre de usuario">
                    <label for="email">Correo Electronico</label>
                    <input type="email" id="email" name="email" placeholder="Correo Electronico">
                    <label for="pass">Contraseña</label>
                    <span><a class="o-pass" href="olvidapass.php">Olvidastes tu contraseña?</a></span>
                    <input type="password" id="pass" name="pass" placeholder="Contraseña">
                    <label for="pass">Confirmar Contraseña</label>
                    <input type="password" id="pass" name="confPass" placeholder="Confirmar Contraseña">
                    <input type="submit" name="submit" value="Crear mi Cuenta">
                </div>

            </form>

            <div class="login-preg contenedor-inputs">
                <p class="desc-login">
                    Ya tienes una Cuenta
                    <a class="login" href="login.php">Inicia sesion</a>
                </p>
            </div>


        </div>

    </div>





    <footer class="footer">
        <div class="contenedor">
            <div class="menu-footer">
                <a class="logo" href="index.php">Written</a>

                <div class="icons-footer">
                    <a class="fac" href="#">Facebook</a>
                    <a class="tw" href="#">Twiter</a>
                    <a class="yt" href="#">Youtube</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>