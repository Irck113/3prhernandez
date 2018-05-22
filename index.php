<!DOCTYPE html>

<html>
        <head>
                <meta charset = "utf-8"/>
                <meta name = "viewport" content = "width=device-width"/>
                <link rel = "stylesheet" href = "css/main.css"/>
                <script src="jquery-3.3.1.js"></script>
        </head>

        <body>
                <div class = "pagina">
                <h1>Registro de usuarios</h1>
                </br>
                <p>El siguiente formulario sirve para registrarse en el sistema</p>
                </br>

                <div class = "formulario">
                <form method = "post" action="registro.php">
                        <legend>Formulario de registro</legend>
                        <fieldset>
                                <label for = "nombre">Nombre: </label>
                                <input name = "nombre" type = "text" required/>
                                </br>
                                <label for = "apellidoP">Apellido paterno: </label>
                                <input name = "apPaterno" type = "text" required/>
                                </br>
                                <label for = "apellidoM">Apellido materno: </label>
                                <input name = "apMaterno" type = "text"/>
                                </br>
                                <label for = "telefono">Tel&eacute;fono: </label>
                                <input name = "telefono" type = "text" required/>
                                </br>
                                <label for = "email">Correo electronico: </label>
                                <input name = "email" type = "email" required/>
                                </br>
                                <input type = "submit" name = "enviar" value = "Enviar"/>
                        </fieldset>
                </form>
                </div>  
                <a href = "contacto.php">Inicio</a>
		<a href = "contacto.php">Contacto</a>
		<a href = "consulta.php">Consulta</a>
		<a href = "creditos.php">Creditos</a>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://www.facebook.com/FilosoraptorPaginaOficial/" data-width="40" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
        </body>
</html>

