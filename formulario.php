<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario que
se envía a insertar.php, el cual guardará
los datos
================================
*/
?>
<?php include_once "encabezado.php" ?>
<div class="row">
	<div class="col-12">
		<h1>Crear un Documento</h1>
		<form action="insertar.php" method="POST">

		<!--tipo de documento-->

  <div class="form-group">
                          <label  class="col-sm-2 control-label">Tipo de Documentos</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                <select class="form-control" name="tipo_documento">
                                <option value="Escoja una opcion">Escoja una opcion</option>
                                  <option value="Informe">Informe</option>
                                  <option value="Memorandum">Memorandum</option>
                                  <option value="Oficio">Oficio</option>
                                  <option value="carta">carta</option>
                                  <option value="Memorandum Cirular">Memorandum Cirular</option>
                                  <option value="Infome Interno">Infome Interno</option>
                                  <option value="Oficio Interno">Oficio Interno</option>
                                
                                </select>
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                              </div> 
                          </div>
                        </div>
<!--fin tipo de documento-->

<!--numero de documento-->

          <div class="form-group">
                          <label  class="col-sm-2 control-label">Num. Documento </label>
                          <div class="col-sm-10">
				   <input required name="num" type="text" id="edad" placeholder="000-2021-MDLP" class="form-control">
			</div>
<!--fin dumero de documento-->

 <!--Este codigo nos servira para generar un numero diferente para cada ticket*/-->
 <!--
  ?php
          $codigo = ""; 
          $longitud = 2; 
          for ($i=1; $i<=$longitud; $i++){ 
            $numero = rand(0,9); 
            $codigo .= $numero; 
          } 
          $num=$base_de_datos->prepare("SELECT * FROM documento");
          $numero_filas = pg_num_rows($num);

          $numero_filas_total=$numero_filas+1;
          $num_documento="00".$codigo."-2021-MDLP";
        <-  /*Fin codigo numero de ticket*/-->




<!--remitente-->

<div class="form-group">
                          <label  class="col-sm-2 control-label">Remitente</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                <select class="form-control" name="remitente">
                                <option value="Escoja una opcion">Escoja una opcion</option>
                                  <option value="EDWIN BENAVEMTE ORELLANA">EDWIN BENAVENTE ORELLANA</option>
                                  <option value="PERCY CONDORI">PERCY CONDORI</option>
                                  <option value="JUAN RAMON GARAY">JUAN RAMON GARAY</option>
                               
                                
                                </select>
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                              </div> 
                          </div>
                        </div>

<!-- fin  remitente-->

<!--area-->

<div class="form-group">
                          <label  class="col-sm-2 control-label">Area</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                <select class="form-control" name="area_remitente">
                                <option value="Escoja una opcion">Escoja una opcion</option>
                                  <option value="Unidad de Tecnologia de la Informacion ">Unidad de Tecnologia de la Informacion </option>
                                  <option value="Unidad de Contabilidad">Unidad de Contabilidad</option>
                                  <option value="Unidad de Tesoreria">Unidad de Tesoreria </option>
                               
                                
                                </select>
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                              </div> 
                          </div>
                        </div>

<!-- fin  area-->

<!--destinatario-->

<div class="form-group">
                          <label  class="col-sm-2 control-label">Destinatario</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                <select class="form-control" name="destinatario">
                                <option value="Escoja una opcion">Escoja una opcion</option>
                                  <option value="EDWIN BENAVEMTE ORELLANA">EDWIN BENAVENTE ORELLANA</option>
                                  <option value="PERCY CONDORI">PERCY CONDORI</option>
                                  <option value="JUAN RAMON GARAY">JUAN RAMON GARAY</option>
                               
                                
                                </select>
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                              </div> 
                          </div>
                        </div>

<!-- fin destinatario-->


<!--area-->

<div class="form-group">
                          <label  class="col-sm-2 control-label">Area</label>
                          <div class="col-sm-10">
                              <div class='input-group'>
                                <select class="form-control" name="area_destinatario">
                                <option value="Escoja una opcion">Escoja una opcion</option>
                                  <option value="Unidad de Tecnologia de la Informacion ">Unidad de Tecnologia de la Informacion </option>
                                  <option value="Unidad de Contabilidad">Unidad de Contabilidad</option>
                                  <option value="Unidad de Tesoreria">Unidad de Tesoreria </option>
                               
                                
                                </select>
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                              </div> 
                          </div>
                        </div>

<!-- fin  area-->


<!--ASUNTO-->


  <div class="form-group">
                          <label  class="col-sm-2 control-label">Ingresar Asunto </label>
                          <div class="col-sm-10">
				   <input required name="asunto" type="text" id="edad" placeholder="ingrese el asunto" class="form-control">
			</div>






<!--FIN ASUNTO-->

                          <div class="form-group">
                          <label  class="col-sm-2 control-label">Contenido del Documento </label>
                          <div class="col-sm-10">
                            <textarea class="form-control" rows="30" placeholder="Escriba el contenido del documento" name="contenido" required=""></textarea>
                          </div>
                        </div>


			
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar.php" class="btn btn-warning">Ver todas</a>


<a class="btn btn-default buttons-pdf buttons-html5 btn-sm btn-success" tabindex="0" aria-controls="DataTables_Table_0"><span>PDF</span></a>





		</form>
	</div>
</div>
<?php include_once "pie.php" ?>