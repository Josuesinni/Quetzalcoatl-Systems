<!DOCTYPE html>
<html lang="en">
<?php require "head.html"?>
<body class="fondo-contacto">
    <?php require "header.html"?>
    
    <div class="car-correo">
    <section class="formulario">
    <!--Formulario-->
    <!--Realiza las funciones que hay en ese documento/Guarda los datos con ese metodo-->
        <form action="enviar.php" method="post">
            <!--caja de texto-->
            <input type="text" name="nombre" placeholder="Nombre:" class="caja-1" required="Por favor rellena ese campo">
            <input type="email" name="email" placeholder="Email:" class="caja-2">
            <input type="text" name="asunto" placeholder="Asunto:" class="caja-3">
            <textarea name="mensaje" id="" cols="30" rows="10" class="caja-4" placeholder="Deja tu mensaje aqui"></textarea>
            <!--Si se pueden poner 2 clases que locura eh?, a si tambien se crea un botón-->
            <button type="submit" class="enviar-a correr">Enviar</button>
        </form>
    </section>
        <div class="correo">
            <p>quetzalcoatlSystem37@gmail.com</p>
        </div>
    </div>
</body>
</html>