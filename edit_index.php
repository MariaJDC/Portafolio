<?php

    include "model/conn.php";
    $id = $_GET["id"];
    $sql = $conn->query(" select * from usuarios where id = $id ")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuario</title>
</head>
<body>

    <div class="container-fluid row">
        <form class="col-3 p-4 m-auto" method="post" action="">
                <h1 class="text-center">Editar Usuario</h1>
                <input type="hidden" name="id" value ="<?= $_GET["id"]?>">
                <?php
                    include "controler/edit_user.php";
                    while($datos = $sql->fetch_object()) {
                ?>
        
                <div class="mb-3">
                    <label for="NombreApellido" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="NombreApellido" value="<?= $datos->nombreyapellido?>">
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="Usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="Usuario" value="<?= $datos->usuario?>">
                </div>
                
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email" value="<?= $datos->email?>">
                </div>

                <div class="textArea">
                    <label for="Comentario" class="form-label">Comentario</label>
                    <input type=text class="form-control" name="textComentario" 
                    value="<?= $datos->nota?>"> <!-- Ay profe no me funcionó con el textArea :(  ) -->
                </div>

                <?php
                    include "model/conn.php";
                    include "controler/new_user.php";
                ?>

                <?php 
                    } 
                ?>
                <button type="submit" class="btn btn-warning" name="btnguardar" value="okys">Guardar</button>
         </form>
    </div>
</body>
</html>