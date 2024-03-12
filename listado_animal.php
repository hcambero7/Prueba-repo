<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugo Cambero</title>
</head>
<body>
    <?php 
        $conex1 = new mysqli("localhost","Hugoadmin","7as)6.-KnB1LiEX_","hugo");
        if(mysqli_connect_errno()){
            printf("Conexión fallida %a\n", mysqli_connect_error());
            exit();
        }else{
            echo "Conectado <hr> ";
        }
        $query="SELECT id,nombre,especie,edad FROM animal";
        if($result = $conex1->query($query)){
            $result->data_seek(0);
            while($fila =$result->fetch_assoc()){
                printf("id: %s\n nombre %s\n especie %s\n edad %s\n <hr>", $fila['id'],$fila['nombre'],$fila['especie'],$fila['edad']);
            }
        }
    ?>
</body>
</html>