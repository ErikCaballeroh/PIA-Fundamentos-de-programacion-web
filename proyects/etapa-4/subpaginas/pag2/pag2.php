<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link rel="stylesheet" href="../../normalize.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="encabezado">
        <div class="titulo">
            <h1>Libreria</h1>
        </div>
        <div class="contenedor-nav">
            <nav class="navbar">
                <ul class="navbar-lista">
                    <li class="contendor-paginas"><a class="paginas" href="../pag1/pag1.php">Registro</a></li>
                    <li class="contendor-paginas"><a class="paginas" href="../pag2/pag2.php">Catalogo</a></li>
                    <li class="contendor-paginas"><a class="paginas" href="../pag3/pag3.php">Lector</a></li>
                    <li class="contendor-paginas"><a class="paginas" href="../pag4/pag4.php">Costos</a></li>
                    <li class="contendor-paginas"><a class="paginas" href="../pag5/pag5.php">Libros</a></li>
                    <li class="contendor-paginas"><a class="paginas" href="../pag6/pag6.php">Lista</a></li>
                </ul>   
            </nav>
        </div>
    </header>

<div class="cajita">
    <form action="pag2.php" method="post">
        <select class="controls" name="precio" id="">
            <option value="menor">Menor a mayor</option>
            <option value="mayor">Mayor a menor</option>
        </select>
        <input class="controls" type="submit" value="Seleccionar">
    </form>
    <div class="codigo">

    <?php 
        if($_POST){
            $libro = $_POST['precio'];

            switch($libro){
                case "menor":
                    echo "    
                <ul>
                    <li>Libro 1 - $150</li>
                    <li>Libro 2 - $150</li>
                    <li>Libro 3 - $180</li>
                    <li>Libro 4 - $180</li>
                    <li>Libro 5 - $185</li>
                    <li>Libro 6 - $190</li>
                    <li>Libro 7 - $210</li>
                    <li>Libro 8 - $210</li>
                    <li>Libro 9 - $240</li>
                    <li>Libro 10 - $250</li>
                </ul>
                ";
                break;
                case "mayor":
                    echo "               
                <ul>
                    <li>Libro 1 - $250</li>
                    <li>Libro 2 - $250</li>
                    <li>Libro 3 - $240</li>
                    <li>Libro 4 - $210</li>
                    <li>Libro 5 - $195</li>
                    <li>Libro 6 - $190</li>
                    <li>Libro 7 - $180</li>
                    <li>Libro 8 - $160</li>
                    <li>Libro 9 - $150</li>
                    <li>Libro 10 - $150</li>
                </ul>";
                break;
                default:
                    echo "Seleccione una opcion";
                break;
            }
        }
    ?>

    </div>

</div>
    

    <div class="redes">
        <footer class="redes__footer">
            <h3 class="redes__texto"> Redes Sociales y Contacto</h3>
            <ul class="redes__lista">
                <li class="redes__item"><a class="redes__link" href="https://facebook.com" target="_blank"><i class="redes_icono fab fa-facebook-square"></i></a></i>
                <li class="redes__item"><a class="redes__link" href="https://twitter.com" target="_blank"><i class="redes_icono fab fa-twitter-square"></i></a></li>
                <li class="redes__item"><a class="redes__link" href="https://instagram.com" target="_blank"><i class="redes_icono fab fa-instagram-square"></i></a></li>
                <li class="redes__item"><a class="redes__link" href="https://gmail.com" target="_blank"><i class="redes_icono fas fa-envelope-square"></i></a></li>
            </ul>
            <cite>
                <p class="redes__creditos"><i>Libreria BackYardigans© Todos los derechos reservados.</i></p>
            </cite> 
        </footer>
    </div>

    <script src="https://kit.fontawesome.com/ef3fed3990.js" crossorigin="anonymous"></script>
</body>
</html>