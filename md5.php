

<?php include_once "encabezado.php" ?>
<div align="center" style="width:600px;">

<?php
echo '<h1> Encriptador JHR </h1>';

//comprobar si se han enviado las variables
if(isset($_POST['string'])){
	
	//encriptar a MD5
	$md5string = md5($_POST['string']);

}

//imprimir el formulario con las variables original y encriptada, inicialmente vacias

echo '<form method="post" action="md5.php">
		<textarea rows="2" name="string" style="width:49%; height:40px; float:left;">'.$_POST['string'].'</textarea>
		<textarea rows="2" disabled="disabled" style="width:49%; height:40px; float:right;">'.$md5string.'</textarea>
		<br />
		<input type="submit" value="Encriptar">
	  </form>'
?>



</div>
<?php include_once "pie.php" ?>

