<?php  
include_once 'conexion.php';
$sql = "SELECT
    U.id_usuario,
    U.nombre, U.apaterno, U.amaterno,
    U.email,
    U.telefono, U.email
FROM
    usuarios U
;";
$usuarios = queryPSQL($sql);
?>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<table class="table">
            <thead>
                <tr>
                    <th>Usuario Id</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($usuario = pg_fetch_assoc($usuarios)) :
                    ?>
                    <tr>             
                        <td><?php echo $usuario['id_usuario']; ?></td>
                        <td><?php echo $usuario['apaterno']; ?></td>
                        <td><?php echo $usuario['amaterno']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['telefono']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                    </tr>
                    <?php
                endwhile;
                 ?>
            </tbody>
        </table>
?>
