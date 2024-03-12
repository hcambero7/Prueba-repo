<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugo Cambero</title>
</head>
<body>
    <?php
        class Animal(){
            public $nombre;
            public $especie;
            public $edad;

            function __construct($nomb,$esp,$edd){
                $this->nombre = $nomb;
                $this->especie = $esp;
                $this->edad = $edd;
            }
            function getNombre() {
                return "El nombre del animal es: ". $this->nombre;
            }
            function getEspecie() {
                return "La especie de este animal es: ". $this->especie;
            }
            function getEdad() {
                return "La edad de este animal es: ". $this->edad . " años.";
            }
        }
    ?>
</body>
</html>