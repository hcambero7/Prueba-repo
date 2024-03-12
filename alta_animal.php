<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugo Cambero</title>
</head>
<body>
    <h1>Alta de Animales</h1>
    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <label>Introduce el nombre: </label>
        <input type="text" id="nombre" name="Nombre">
        <hr>
        <label>Introduce la especie: </label>
        <input type="text" id="especie" name="Especie">
        <hr>
        <label>Introduce la edad: </label>
        <input type="number" id="edad" name="Edad"><hr>
        <input type="submit" value="Añadir Animal"><hr>
    </form>
    <?php
        function limpiar($valor){
            $valor=trim($valor);
            $valor=htmlspecialchars($valor);
            return $valor;
        }

        if(!empty($_POST['Nombre'])){
            $Nombre = limpiar($_POST['Nombre']);
        }else{
            $errors[]="Esta vacio el nombre";
        }
        
        if(!empty($_POST['Especie'])){
            $Especie = limpiar($_POST['Especie']);
        }else{
            $errors[]="Esta vacio la especie";
        }
        
        if(!empty($_POST['Edad'])){
            $Edad = limpiar($_POST['Edad']);
        }else{
            $errors[]="Esta vacio la edad";
        }

        if(!empty($errors)){
            echo "<p style='color:red;'>";
            foreach($errors as $e){
                echo $e."<br>";
            }
            echo "</p>";

        }else{
            echo "<p style='color:green;'>";
            echo "Esta todo correctamente";
            echo "</p>";

            $conex1 = new mysqli("localhost","Hugoadmin","7as)6.-KnB1LiEX_","hugo");
            if(mysqli_connect_errno()){
                printf("Conexión fallida %a\n", mysqli_connect_error());
                exit();
            }else{
                echo "Conectado <hr> ";

                $sql= "INSERT INTO animal(nombre,especie,edad) values ('$Nombre','$Especie','$Edad')";
                if($conex1->query($sql)== TRUE){
                    echo "INSERTADO OK <br>";
                }else{
                    echo "Error al insertar en la base de datos: ". $conex1->error;
                }
                $conex1->close();
            }
        }
    ?>
</body>
</html>