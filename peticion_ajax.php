<?php

<?php

$nombre = $_POST[‘name’];

$ciudad = $_POST[‘city’];

//No olvidar la sanitización de variables

//Esta sección sólo imprime en pantalla, pero puede
insertar en BD, consultar otra aplicación, hacer uso
de sesiones, etc.

echo “Hola ”.$nombre.”. Esperamos que vivas feliz
en: ”.$ciudad;

?>

?>
