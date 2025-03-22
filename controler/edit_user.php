<?php
if (!empty($_POST["btnguardar"])) {
    if (!empty($_POST["NombreApellido"]) and !empty($_POST["Usuario"]) and !empty($_POST["Email"]) and !empty($_POST["textComentario"])) {

        $id = $_POST["id"];
        $nombre = $_POST["NombreApellido"];
        $usuario = $_POST["Usuario"];
        $email = $_POST["Email"];
        $comentario = $_POST["textComentario"];
        $fecha = date('Y-m-d H:i:s');

        $sql = $conn->query("UPDATE usuarios SET nombreyapellido='$nombre', usuario='$usuario', email='$email', nota='$comentario', fechanota='$fecha' WHERE id=$id");
        if ($sql == 1) {
            header(header: "location: index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al actualizar los datos.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Debe llenar todos los campos.</div>";
    }
}
?>