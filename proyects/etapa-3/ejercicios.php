<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="condicionales">
    <h2>Estructuras condicionales</h2>
    <div class="if">
        <h3>Estructura condicional If</h3>
        <p>
            Las condiciones if, else y elseif permiten condicionar la ejecución
            de un bloque de sentencias al cumplimiento de una condición.
        </p>
        <br>
        <p><b>Ejemplo:</b></p>
        <img src="img/if.png" alt=""><br>
        <?php 
            $a = 8;
            $b = 3;
            If($a < $b){
                echo "<b>a</b> es menor que <b>b</b>";
            }
            else{
                echo "<b>a</b> NO es menor que <b>b</b>";
            }
        ?>
    </div>
    <div class="switch">
        <h3>Estructura condicional switch</h3>
        <p>
            La sentencia switch es equivalente a una construccion if ...elseif... en 
            las que las expresiones son comparaciones de igualdad de la misma expresion
            con valores distintos.
        </p>
        <br>
        <p><b>Ejemplo:</b></p> 
        <img src="img/switch.png" alt=""><br>
        <?php 
            $posicion = "arriba";
            switch($posicion){
                case "arriba": //Bloque 1
                    echo "La variable contiene ";
                    echo "el valor <b>arriba</b>";
                    break;
                case "abajo": //Bloque 2
                    echo "La variable contiene ";
                    echo "el valor <b>abajo</b>";
                    break;
                default: //Bloque 3
                echo "La variable contiene otro valor ";
                echo "<b>distinto</b> de arriba y abajo";
            }
        ?>
    </div>
</div>

<div class="bucles">
    <h2>Bucles</h2>
    <div class="while">
        <h3>Ciclo While</h3>
        <p>
            La expresion se evalúa al principio de cada iteración: si el resultado es 
            TRUE se ejecuta el bloque de sentencias; si el resultado es FALSE el bucle 
            se termina.
        </p>
        <br>
        <p><b>Ejemplo:</b></p>
        <img src="img/while.png" alt=""><br>
        <?php 
            $i = 0;
            While($i < 10){
                echo "El valor de <b>i</b> es", $i,"<br>";
                $i++;
            }
        ?>
    </div>
    <div class="dowhile">
        <h3>Ciclo Do While</h3>
        <p>
            El ciclo do while es muy similar al bucle while, la principal diferencia es 
            que en el bucle do while el bloque de sentencias se ejecuta por lo menos una 
            vez mientras que en el bucle while  depende de si la expresión es cierta o no 
            la primera vez que se evalúa.
        </p>
        <br>
        <p><b>Ejemplo:</b></p>
        <img src="img/dowhile.png" alt=""><br>
        <?php 
            $i = 0;
            do {
                print "<p>$i</p>\n";
                $i++;
            }while($i < 5)
        ?>
    </div>
    <div class="for">
        <h3>Ciclo For</h3>
        <p>
            La  expresión inicial se evalúa siempre. La expresión final se evalúa al 
            principio de cada iteración: si el resultado es TRUE se ejecuta el bloque 
            de sentencias y la expresión de paso y se evalúa nuevamente la expresion 
            final; si el resultado es FALSE el bucle se termina. 
        </p>
        <br>
        <p><b>Ejemplo:</b></p>
        <img src="img/for.png" alt=""><br>
        <p>Inicio</p>
        <?php 
            for($i = 0; $i < 10; $i++){
                echo "El valor de <b>i</b> es", $i, "<br>";
            }
        ?>
        <p>Final</p>
    </div>
    <div class="foreach">
        <h3>Ciclo For Each</h3>
        <p>
            El ciclo foreach es muy util para recorrer matrices cuyo tamaño se desconoce
            o matrices cuyos índices no son correlativos o numéricos (matrices asociativas).
        </p>
        <img src="img/foreach.png" alt=""><br>
        <?php 
            $matriz = array(0, 1, 10, 100, 1000);
            foreach($matriz as $valor){
                print "<p>$valor</p>\n";
            }
        ?>

    </div>
</div>
 
</body>
</html>