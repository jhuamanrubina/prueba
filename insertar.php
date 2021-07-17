<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["tipo_documento"]) || !isset($_POST["remitente"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$tipo_documento = $_POST["tipo_documento"];
$num = $_POST["num"];
$remitente = $_POST["remitente"];
$area_remitente=$_POST["area_remitente"];
$destinarario=$_POST["destinatario"];
$area_destinatario=$_POST["area_destinatario"];
$contenido=$_POST["contenido"];
$asunto=$_POST["asunto"];


/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare("INSERT INTO documentos(t_documento,num_documento,remitente,area_remi,destinatario,area_dest,contenido,vistos ) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$tipo_documento,$num, $remitente ,$area_remitente , $destinarario,$area_destinatario, $contenido, $asunto ]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listar.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
