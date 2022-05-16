<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <form action="formulario.php" method="POST">
            <div class="formulario__contenedorimg">
                <img class="formulario__imagen" src="fondo-formulario-copia.jpg" alt="">
            </div>
            <div class="formulario__contenido">
                <div class="formulario__contenedortitulo">              
                    <h2 class="formulario__titulo">Solicitud de empleo</h2>
                    <h3 class="formulario__subtitulo">Datos personales</h3>
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="nombre"  placeholder="Nombre">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="apellidopa"  placeholder="Apellido paterno">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="apellidoma"  placeholder="Apellido materno">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="edad"  placeholder="Edad" min="18" max="60">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="correo"  placeholder="Correo electronico">
                </div>
                <div class="formulario__centrar select">
                        <p class="formulario__label">Sexo</p>
                        <br>
                        <select class="formulario__select" name="sexo" id="">
                                <option value="">Hombre</option>
                                <option value="">Mujer</option>
                        </select>
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="domicilio"  placeholder="Domicilio">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="colonia"  placeholder="Colonia">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="municipio"  placeholder="Municipio">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="estado"  placeholder="Estado">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="telefono"  placeholder="Telefono">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="nacionalidad"  placeholder="Nacionalidad">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="estatura"  placeholder="Estatura">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="peso"  placeholder="Peso">
                </div>
                <div class="formulario__centrar select">
                        <p class="formulario__label">Estado civil</p>
                        <br>
                        <select class="formulario__select" name="estadocivil" id="">
                                <option value="">Soltero</option>
                                <option value="">Casado</option>
                        </select>
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="puesto"  placeholder="Puesto solicitado">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="fecha"  placeholder="Fecha en la que llenaste el formulario">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="motivo"  placeholder="Motivo por el cual quieres trabajar">
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__txt" type="text" name="sueldo"  placeholder="Sueldo que solicita">
                </div>
                <div class="formulario__centrar select">
                        <p class="formulario__label">Nivel de educacion</p>
                        <br>
                        <select class="formulario__select" name="educacion" id="">
                                <option value="">Primaria</option>
                                <option value="">Secundaria</option>
                                <option value="">Preparatoria</option>
                                <option value="">Universidad</option>
                        </select>
                </div>
                <div class="formulario__centrar">
                        <input class="formulario__btn" type="submit" name=""  placeholder="Codigo postal">
                </div>
            </div>
        </form>

        <div class="resultado">
                <?php 
                        
                        if($_POST){
                                echo "<p>Los resultados fueron enviados</p>";
                                echo "Nombre: " , $_POST['nombre'] , "<br>";
                                echo "Apellido aterno: " , $_POST['apellidopa'] , "<br>";
                                echo "Apellido materno: " , $_POST['apellidoma'] , "<br>";
                                echo "Edad: " , $_POST['edad'] , "<br>";
                                echo "Correo: " , $_POST['correo'] , "<br>";
                                echo "Sexo: " , $_POST['sexo'] , "<br>";
                                echo "Domicilio: " , $_POST['domicilio'] , "<br>";
                                echo "Colonia: " , $_POST['colonia'] , "<br>";
                                echo "Municipio: " , $_POST['municipio'] , "<br>";
                                echo "Estado: " , $_POST['estado'] , "<br>";
                                echo "Telefono: " , $_POST['telefono'] , "<br>";
                                echo "Nacionalidad: " , $_POST['nacionalidad'] , "<br>";
                                echo "Estatuara: " , $_POST['estatura'] , "<br>";
                                echo "Peso: " , $_POST['peso'] , "<br>";
                                echo "Estado civil:"  , $_POST['estadocivil'] , "<br>";
                                echo "Puesto: " , $_POST['puesto'] , "<br>";
                                echo "Fecha en que se lleno el formulario: " , $_POST['fecha'] , "<br>";
                                echo "Motivo por le cual quieres trabajar: " , $_POST['motivo'] , "<br>";
                                echo "Sueldo solicitado: " , $_POST['sueldo'] , "<br>";
                                echo "Nivel de edcuacion: " , $_POST['educacion'] , "<br>";
                        }


                ?>
        </div>
    </div>
</body>
</html>