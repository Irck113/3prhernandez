<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Registro de usuarios</title>
</head>
<body>
<?php
include_once("conexion.php");

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apPaterno = filter_var($_POST['apPaterno'], FILTER_SANITIZE_STRING);
$apMaterno = filter_var($_POST['apMaterno'], FILTER_SANITIZE_STRING);
$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING, [0-9]);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

if(!empty($nombre)||!empty($apPaterno)||!empty($apMaterno)||!empty($telefono)||!empty($email)){
        $comentario = "insert into usuarios (nombre,appaterno,apmaterno,telefono,email) values('$nombre','$apPaterno','$apMaterno','$telefono','$email')";
        $guarda_comentario = consulta($comentario);
        if($guarda_comentario == false){
                echo "Gracias por ingresar tus datos";
        }
        else{
                echo "Hubo un error al intentar guardar tus, intenta más tarde";
        }
}
else{
        echo "Los valores ingresados no son válidos";
}
?>
</body>
</html>

