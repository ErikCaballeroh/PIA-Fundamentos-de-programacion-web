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

    <form action="pag3.php" method="post">
        <input type="number" name="libros" id="">
        <input type="submit">
    </form>

    <?php 
    
    

    if($_POST){
        $libros = $_POST['libros'];

        while($libros >= 20){
            echo "Cupon de descuento";
        }
    }

    ?>

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