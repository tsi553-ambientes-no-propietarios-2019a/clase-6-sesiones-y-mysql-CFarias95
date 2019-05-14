<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” 
y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página 
de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del 
usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div>
        <center>
            <font color="green">
                <h2>Bienvenido</h2>
            </font>
            <div>
                <div class="wrapper fadeInDown">
                    <div id="formContent">

                        <form method="POST" action="PHP/login.php">
                            <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="usuario">
                            <input type="password" id="password" class="fadeIn third" name="password" placeholder="contraseña">
                            <br><br>
                            <input type="submit" class="fadeIn fourth" value="Entrar">
                        </form>

                    </div>
                </div>
            </div>
        </center>
    </div>
</body>

</html>