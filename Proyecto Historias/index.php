<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--Normalize-->
    <link rel="stylesheet" href="normalize/normalize.css">
    <!--Estilos css-->
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <header>
        <div class="contenedor">
            <nav class="navbar menu__navbar">
                <a class="logo" href="index.php">Written</a>

                <div class="menu-links menu__navbar">
                    <ul class="menu-lista-link">
                        <li class="active-btn-red">
                            <a href="#" class="link-active-red">Caracteristicas</a>
                        </li>
                        <li>
                            <a href="#" class="link-biblioteca">Contacto</a>
                        </li>
                        <li>
                            <a href="#" class="link-biblioteca">Blog</a>
                        </li>
                    </ul>
                    <a href="registro.php" class="registro__btn">Registrate</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="index-main">
        <section class="interior-cont new-interior">
            <div class="media discover">
                <div class="column-wrapper">
                    <div class="content_wrapper wrap">
                        <div class="title">
                            <h2 class="home-bienv">Bienvenidos</h2>
                            <h3>Millones de Historias, documentales de televisión y personas por descubrir. Explora
                                ahora.</h3>
                        </div>
                        <div class="buscador-history">
                            <form action="#" class="form-search">
                                <label>
                                    <input type="text" class="search"
                                        placeholder="Buscar una Historia, documenatal de televisión, persona......">
                                </label>
                                <button type="submit" class="submit">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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