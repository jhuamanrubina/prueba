<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php

#Salir si alguno de los datos no está presente
if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["edad"]) ||
    !isset($_POST["id"])
) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

$tipo_documento = $_POST["tipo_documento"];
$num = $_POST["num"];
$remitente = $_POST["remitente"];
$area_remitente=$_POST["area_remitente"];
$destinarario=$_POST["destinatario"];
$area_destinatario=$_POST["area_destinatario"];
$contenido=$_POST["contenido"];
$asunto=$_POST["asunto"];

$sentencia = $base_de_datos->prepare("UPDATE documentos SET t_documento= ?, num_documento = ?, remitente = ?, area_remi=?, destinatario=?, area_dest=?,vistos=?,contenido=? WHERE id = ?;");
$resultado = $sentencia->execute([$tipo_documento, $num,$remitente,$area_remitente,$destinarario,$area_destinatario,$contenido,$asunto, $id]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
