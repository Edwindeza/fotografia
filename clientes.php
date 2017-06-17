<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
</head>
<body>
<?php include 'tpl/header.php'; ?>
<div class="col-xs-12 buscador_clientes">



	<div class="container">
		<button type="button" class="Registrar_usuario btn btn-info1" data-toggle="modal" data-target="#registrar_cliente">Registrar Nuevo Cliente</button>
		<!--button type="button" class="btn btn-info btn-lg col-md-3 col-xs-12" data-toggle="modal" data-target="#registrar_cliente2">Modificar Cliente</button-->
		<!-- Modal -->
		<div class="modal fade" id="registrar_cliente" role="dialog">
			<div class="modal-dialog">
		    
		      <!-- Modal content-->
		      	<div class="modal-content">
		        	<div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h1 class="modal-title"><b>Registrar nuevo cliente</b></h1>
		        	</div>
		        	<div class="modal-body">
			         <form action="" style="padding-bottom: 40px;">
						<div class=" col-xs-12 col-md-12 input-content sinpa_sm">
							<h4 style="float: left;" class="col-md-5"><b>Nombres </b><span>:</span></h4>
							<input name="" class="col-md-6" id="nombres_completos" style="float: left;" cols="30" rows="1">
						</div>
						<div class=" col-xs-12 col-md-12 input-content sinpa_sm">
							<h4 style="float: left;" class="col-md-5"><b>Apellido Paterno </b><span>:</span></h4>
							<input name="" class="col-md-6" id="nombres_completos" style="float: left;" cols="30" rows="1">
						</div>
						<div class=" col-xs-12 col-md-12 input-content sinpa_sm">
							<h4 style="float: left;" class="col-md-5"><b>Apellido Materno </b><span>:</span></h4>
							<input name="" class="col-md-6" id="nombres_completos" style="float: left;" cols="30" rows="1">
						</div>
						<div class=" col-xs-12 col-md-12 input-content sinpa_sm" >
							<h4 style="float: left;" class="col-md-5"><b>Tipo de Documento </b><span>:</span></h4>
							<select class="col-md-6" id="tipo_documento">
								<option value="0">Seleccionar Documento</option>
								<option value="1">DNI</option>
								<option value="2">RUC</option>
								<option value="3">PTP</option>
							</select>
						</div>
						<div class=" col-xs-12 col-md-12 input-content sinpa_sm" >
							<h4 style="float: left;" class="col-md-5"><b>N° Documento </b><span>:</span></h4>
							<input type="text" class="col-md-6"  maxlength=506" name="" style="float: left;" id="num_documento" rows="1">
						</div>
						<div class=" col-xs-12 col-md-12 input-content sinpa_sm" >
							<h4 style="float: left;" class="col-md-5"><b>Celular </b><span>:</span></h4>
							<input type="text" class="col-md-6"  maxlength="20" name="" style="float: left;" id="num_documento" rows="1">
						</div>
						<!--div class=" col-xs-12 col-md-6 input-content sinpa_sm">
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><b>Tipo de Servicio</b>
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="#">Foto Carnet</a></li>
							    <li><a href="#">Pasaporte</a></li>
							    <li><a href="#">Foto Jumbo</a></li>
							  </ul>
							</div>		
						</div-->
					</form>
					<br><br><br><br><br>
			        </div>
			        <div class="modal-footer">
			          <a href="#">Registrar</a>
			        </div>
		      	</div>
		   	</div>
		</div>
	</div>
	<div class="modal fade" id="agregarServicio" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h1 class="modal-title">Agregar Servicio al cliente</h1>
	        </div>
	        <div class="modal-body">
	          	<form class="col-xs-12">
	          		<div class="col-xs-12 agregarServicio_info sinpa">
	          			<div class=" col-xs-12 col-md-6 input-content ">
							<h4><b>Nombres Completos</b></h4>
							<input class="col-xs-12" name="" disabled="true" id="nombres_completos" cols="30" rows="1" value="Edwin Junior Deza Culque"/>
						</div>
						<div class=" col-xs-12 col-md-6 input-content ">
							<h4><b>Tipo de Servicio</b></h4>
							<input class="col-xs-12" type="text" disabled="true" maxlength="16" name="" id="dni_cliente" rows="1" value="71834023"/>
						</div>
	          		</div>
					<div class=" col-xs-12 multiselec_service ">
						<select id="tipo" name="tipo"  class="col-xs-12">
						    <option value="bodas">-- Selecciones el tipo de Servicio --</option>
						    <option value="bodas">Fotografía</option>
						    <option value="otros">Fotografía Pasaporte</option>
						    <option value="otros">Sesión Fotográfica</option>
						</select>
					</div>
				</form>
	          	<br><br>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Atrás</button>
	          <button >Siguiente</button>
	          
	        </div>
	      </div>
	    </div>
	  </div>


	<div class="modal fade" id="buscarCliente" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h1 class="modal-title">Introduzca Intervalos de Fecha</h1>
	        </div>
	        <div class="modal-body">
	          	<form class="col-xs-12">
	          		<div class="col-xs-12 agregarServicio_info sinpa">
	          			<div class=" col-xs-12 col-md-6 input-content ">
							<h4><b>Nombres Completos</b></h4>
							<input class="col-xs-12" name="" disabled="true" id="nombres_completos" cols="30" rows="1" value="Edwin Junior Deza Culque"/>
						</div>
						<div class=" col-xs-12 col-md-6 input-content ">
							<h4><b>N° Documento</b></h4>
							<input class="col-xs-12" type="text" disabled="true" maxlength="16" name="" id="dni_cliente" rows="1" value="71834023"/>
						</div>
	          		</div>
					<div class=" col-xs-12 multiselec_service ">
						<div class="col-sm-6 col-xs-12">
							<p>Desde: <input type="date" id="fecha_hoy" min="2017-06-06" value="<?php date() ?>"/></p>

						</div>
						<div class="col-sm-6 col-xs-12 div2_services">
							<p>Hasta: <input type="date"/></p>
						</div>
						
					</div>
				</form>
	          	<br><br>
	        </div>
	        <div class="modal-footer">
	          <a data-dismiss="modal">Atrás</a>
	          <a class="buscar_" href="buscar.php">Siguiente</a>
	          
	        </div>
	      </div>
	    </div>
	</div>

	<div class="container sinpa">
		<h1>Buscador de Clientes</h1>
		<br>
		<form action="">
			<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
				<p>Buscar por Nombre</p>
				<input name="nombre" id="nombre" type="text" class="col-xs-12 col-md-8" placeholder="Introduce Nombre completo">
				<button class="col-xs-12 col-md-2 col-md-offset-1">Buscar</button>
			</div>
			<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
				<p>Buscar por N° Documento</p>
				<input name="dni" id="dni_cliente2" type="text" maxlength="16" class="col-xs-12 col-md-8" placeholder="Introduce número de Documento">
				<button class="col-xs-12 col-md-2 col-md-offset-1">Buscar</button>
			</div>
		</form>
	</div>	


	<div class="buscador-resultado">
		<div class="container ">
			<h2>Resultados</h2>
			<div class="table-responsive">
				<table class="table table-bordered">
				    <thead>
					    <tr>
					        <th><b>#</b></th>
					        <th><b>Nombre</b></th>
					        <th><b>N° Documento</b></th>
					        <th><b>Correo electrónico</b></th>
					        <th><b>Teléfono</b></th>
					        <td width="50px"><b>Agregar Servicio</b></td>
					        <td width="50px"><b>Buscar</b></td>
					        <td width="50px"><b>Modificar</b></td>
					        <td width="50px"><b>Eliminar</b></td>
					    </tr>
					</thead>
				    <tbody>
					    <tr>
					        <td>1</td>
					        <td>Edwin Junior Deza Culque</td>
					        <td>71834023</td>
					        <td>ejdeza@gmail.com</td>
					        <td>990117206</td>
					        <td><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>2</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>Edwin Junior Deza Culque</td>
						    <td>71834023</td>
						    <td>ejdeza@gmail.com</td>
						    <td>990117206</td>
						    <td><center><a  data-toggle="modal" data-target="#agregarServicio"><img src="app/img/inicio/agregar.png" alt=""></a></center></td>
						    <td><center><a  data-toggle="modal" data-target="#buscarCliente"><img src="app/img/inicio/lupa.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/editar.png" alt=""></a></center></td>
						    <td><center><a href="#"><img src="app/img/inicio/borrar.png" alt=""></a></center></td>
						</tr>
					</tbody>
				</table>			
			</div>
		</div>
	</div>
</div>
	
<?php include 'tpl/footer.php'; ?>
</body>
</html>


<script language="javascript">
	$(document).ready(function(){
		$("#dni_cliente").keypress(function(e){
			var tecla = document.all?tecla=e.keyCode:tecla=e.which;
			return ((tecla>47 && tecla<58)||tecla==46);
		});
		$("#dni_cliente1").keypress(function(e){
			var tecla = document.all?tecla=e.keyCode:tecla=e.which;
			return ((tecla>47 && tecla<58)||tecla==46);
		});
		$("#dni_cliente2").keypress(function(e){
			var tecla = document.all?tecla=e.keyCode:tecla=e.which;
			return ((tecla>47 && tecla<58)||tecla==46);
		});
		$("p").click(function(){
        	myFunction.document.open(".modal-body");
    	});
	});
</script>

