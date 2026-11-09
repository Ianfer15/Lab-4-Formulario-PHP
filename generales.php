
<?php
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $contrasena = $_POST['contrasena'];
        $nacimiento = $_POST['yearNac'];
        $ecivil = $_POST['civil'];

        echo "Hola " . $nombre . " " . $apellido;
        echo " y usted es " . $ecivil . ". <br>";
        echo $nombre . ", usted nació en " . $nacimiento . "<br>";
        echo "La contraseña que introdujo fue " . $contrasena . "<br>";

        if (!empty($_POST['genero'])) {
            if ($_POST['genero'] == "fem") {
                echo "Usted es mujer.<br>";
            }
            else {
                echo "Usted es hombre.<br>";
            }
        }

        // Extraer todos los valores de checkbox utilizados
        if (!empty($_POST['frutas'])) {
            echo "Sus frutas preferidas son: <br>";

            foreach ($_POST['frutas'] as $value) {
                echo $value . ' <br>';
            }
        }
    }
?>
