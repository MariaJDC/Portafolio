<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="nube.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Sigmar&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <meta name="Maria Rojas" content="Portafolio sobre mi">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/883fdf1db1.js" crossorigin="anonymous"></script>
    <title>Mi portafolio</title>
</head>

<body>
    
    <header>
        <nav>                
            <img src="imagenes/nube.png" alt="">
            <ul>

                <li><a href="#presentacion">Presentación</a></li>
                <li><a href="#sobreMi">Sobre Mí</a></li>
                <li><a href="#experienceIng">Mi Experiencia en Ingenieria</a></li>
                <li><a href="#comentarios">Comentarios</a></li>
            </ul>
        </nav>
    </header>

    <section id="presentacion">
        <div class="contenedorImagenText">
            <img class="imagen_presentacion" src="imagenes\Imagen de WhatsApp 2025-03-21 a las 23.47.54_6de07940.jpg">
            <div class="textos">
                <h1>Holis! Mi nombre es Maria Rojas</h1>
            </div>
        </div>
    </section>

    <section id="sobreMi">
        <div class="contenedorImagenText">
            <img class="imagen_presentacion" src="imagenes/fotoPresentPort.jpg">
            <div class="textos">
                <h1>Un Poco Sobre Mi</h1>
                <p> Holis! </p>        
                <p>Bueno, para comenzar... Mi nombre es María Jesús Rojas Marcano, soy estudiante de Ingeniería de Sistemas 
                    en la Universidad de Margarita y actualmente curso el séptimo trimestre. <br><br>

                    Nací el 29 de agosto de 2005, por lo que tengo 19 años. Tengo una familia pequeña compuesta por mis padres, mi hermano, 
                    mi perro Milo y mis dos gatos (tres mascotas muy amorosas y especiales).<br><br>
                    
                    Aunque ya estoy encaminada en esta carrera, no fue una de mis primeras opciones. De hecho,
                     hasta un año antes de ingresar a la universidad, ni siquiera tenía una computadora propia. 
                     Esto me hacía ver la ingeniería como un obstáculo, por lo que consideré otras opciones como medicina, diseño y arquitectura,
                      sintiendo mayor inclinación hacia el diseño.<br><br>
                    
                    Con el tiempo, me sentía abrumada por no saber qué carrera elegir y tenía miedo de tomar una mala decisión.
                     Fue entonces cuando mi hermano y mi madre me ayudaron y orientaron. Mi hermano, que es ingeniero de sistemas, 
                     me explicó y asesoró lo mejor que pudo sobre lo que implica esta carrera. Quedé fascinada con todo lo que entendí, 
                     sintiéndome especialmente atraída hacia el área de la programación. </p>

            </div>
        </div>
    </section>
    <section id="experienceIng">
        <div class="contenedorImagenText">
            <img class="imagen_presentacion" src="imagenes/imgMiExp.jpg">
            <div class="textos">        
                <h1>Experiencia en ingenieria</h1>
                <p> Cuando empecé la carrera, la verdad es que no me fue muy bien. 
                    Cometí muchos errores y sentía miedo porque no estaba acostumbrada a estar sola, a tener que construir nuevas relaciones y 
                    dejar atrás a mis amigos de toda la vida. 
                    Además, me fue bastante mal en las primeras materias prácticas durante los primeros trimestres,
                    tanto que en más de una ocasión consideré abandonar la carrera;
                    pensaba que simplemente no era para mí y me sentía frustrada al no ver progreso. <br> <br>
                    Sin embargo, todo cambió en el trimestre en el que comencé a estudiar técnicas de programación. 
                    Ahí fue cuando empecé a motivarme más con la carrera, 
                    por al fin ver una materia que realmente estaba relacionada con lo que quería hacer. 
                    Me di cuenta de que no todo se trataba de números, y eso despertó mi interés. 
                    Finalmente, encontré una motivación que me hizo enamorarme de todo lo que venía en los trimestres siguientes. <br> <br>
                    También me costó integrarme, sobre todo por ser una de las pocas mujeres en ingeniería. 
                    Mis grupos solían estar formados principalmente por mujeres y, a lo sumo, un hombre, pero con el tiempo,
                    logré hacer amistades que hoy son una parte muy importante y valiosa de mi vida, 
                    siendo un gran apoyo en este camino.
            </div>
        </div>
    </section>

<section id="comentarios">    
    

    <div class="contenedorComentarios">
    
    <div class="container-fluid row">    
        <form class="col-3" method="post" action="">
           <h1 class="comentarioTitulo">Realice un Comentario</h1>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nombre y Apellido" name="NombreApellido">
            </div>

            <div class="mb-3" class="form-floating">
                <input type="text" class="form-control" placeholder="Usuario" name="Usuario">
            </div>
            
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" name="Email">
            </div>

            <div class="textArea">
                <textarea class="form-control" placeholder="Comentario" name="textComentario"></textarea>
            </div>

            <?php
                include "model/conn.php";
                include "controler/new_user.php";
            ?>

            <button type="submit" class="btn btn-warning" name="btnguardar" value="okys">Guardar</button>
        </form>

    <div class= "col-9 p-4">
        <table class="table table-bordered">
            <thead>
                <tr class= "text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Fecha y Hora</th>
                </tr>
            </thead>
   
            <tbody class="text-center p-4">
                <?php
                include "model/conn.php";
                $sql = $conn->query(query: " select * from usuarios "); 
                while ($datos = $sql->fetch_object())  { ?>
                    <tr>
                        <th><?=$datos->id?></th>
                        <td><?=$datos->nombreyapellido?></td>
                        <td><?=$datos->usuario?></td>
                        <td><?=$datos->email?></td>
                        <td><?=$datos->nota?></td>
                        <td><?=$datos->fechanota?></td>
                        <td><a href="edit_index.php?id=<?= $datos->id ?>"  class="fa-solid fa-pen"></a></td>
                    </tr>
                
                <?php } ?>
                
            </tbody>
        </table>
    </div>
        </div>
        </div>
    </section>


    <footer>                    
        <p class="miPortafolio"> Mi Portafolio</p>
        <img src="imagenes/nube.png" alt="">

        <div class="otroTextFooter">
            <p>© 2023 Portafolio</p>
        </div>

        <div class="imagenRedes">
            <a href="https://www.instagram.com/mar_j.29/"><img src="imagenes/instagram.png" alt=""></a> 
            <a href="https://www.facebook.com/profile.php?id=100008202854715"><img src="imagenes/facebook.png" alt=""></a>
            </div>                
                <div class="textFooterContactos">
                <p><a href="https://wa.me/584120960684">Contacto</a></p>
                <p>Correo: mrojas.7441@unimar.edu.ve</p>
                <img src="" class="img_footer">          
        </div>
            </div>

    </footer>
</body>
</html>