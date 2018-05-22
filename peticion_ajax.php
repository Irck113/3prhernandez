<?php
include_once("conexion.php");

$usuarios = "SELECT nombre FROM usuarios";
$guarda_usuario = consulta($usuarios);

echo "</p>Nombres - Departamento - Sueldo</p> \n";
while($row = $guarda_usuario){
	echo "<p>".$row['nombre']."</p> \n";
}
?>
