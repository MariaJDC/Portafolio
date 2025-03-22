<?php
if (!empty($_POST["btnguardar"])) {
    if (!empty($_POST["NombreApellido"]) and !empty($_POST["Usuario"]) and !empty($_POST["Email"]) and !empty($_POST["textComentario"])) {

        $nombre = $_POST["NombreApellido"];
        $usuario = $_POST["Usuario"];
        $email = $_POST["Email"];
        $comentario = $_POST["textComentario"];
        $fecha = date('Y-m-d H:i:s');

        $sql = $conn->query("INSERT INTO usuarios (nombreyapellido, usuario, email, nota, fechanota) VALUES ('$nombre', '$usuario', '$email', '$comentario', '$fecha')");

        if ($sql == 1) {
            echo "<div class='alert alert-success'>Los datos han sido guardados correctamente.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al guardar los datos.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Debe llenar todos los campos.</div>";
    }
}
?>