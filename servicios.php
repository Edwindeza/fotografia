<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
</head>
<body>
<?php include 'tpl/header.php'; ?>
	<div class="col-xs-12 buscador_clientes">



	<div class="container">
		
		<div class="container sinpa">
			<h1>Administrar Servicio</h1>
			<form action="">
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Nombres</p>
					<input name="nombre" id="nombre" type="text" disabled="true" value="Edwin Junior" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Apellido Paterno</p>
					<input name="nombre" id="nombre" type="text" disabled="true" value="Deza" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Apellido Materno</p>
					<input name="nombre" id="nombre" type="text" disabled="true" value="Culque" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">DNI</p>
					<input name="dni" id="dni" type="text" disabled="true" value="71834023" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 multiselec_service ">
					<select id="tipo" name="tipo"  class="col-xs-12">
					    <option value="bodas">-- Selecciones la cantidad de fotos --</option>
					    <option value="bodas">1</option>
					    <option value="otros">2</option>
					    <option value="otros">3</option>
					    <option value="otros">4</option>
					    <option value="otros">5</option>
					    <option value="otros">6</option>
					    <option value="otros">7</option>
					</select>
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Ruta</p>
					<input name="dni" id="dni" type="text" disabled="true" value="C://fotografias" class="col-xs-12 col-md-9" >
				</div>
			</form>
		</div>
	</div>
	
<?php include 'tpl/footer.php'; ?>
</body>
</html>


