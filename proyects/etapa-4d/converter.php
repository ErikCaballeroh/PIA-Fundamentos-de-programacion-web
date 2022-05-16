<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de peso a dolar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grid-conteiner">
        <header class="navbar">
            <nav class="nav">
                <h1><i>MoneyConverter</i></h1>
                <ul class="nav_links">
                    <li><a href="">Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </nav>    
        </header>

        <div class="thumbnail">
            <img src="img/money.svg" alt="">
            <section class="box">
                <div class="centrar">
                    <form action="converter.php" method="POST">
                        <h4>Ingrese una cantidad</h4>
                        <input class="form__textbox"  name="cantidad" type="number" placeholder="$00">
                        <select class="form__select" name="moneda" id="">
                            <option value="peso">Peso</option>
                            <option value="dolar">Dolar</option>
                        </select>
                        <input class="form__btn" type="submit" value="Convertir">
                        <p class="converter">
                            <?php 
                            
                            if($_POST){
                                $moneda = $_POST['moneda'];
                                $cantidad = $_POST['cantidad'];

                                switch($moneda){
                                    case "peso": //Peso a Dolar
                                        echo $cantidad * 20;
                                        break;
                                    case "dolar": //Dolar a Peso
                                        echo $cantidad / 20;
                                        break;
                                    default: //Sin seleccion
                                        echo "Seleccione una moneda";
                                }
                            }
                            ?>
                        </p>
        
                    </form>
                </div>
            </section>
        </div>

    </div>
</body>
</html>