<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
</head>
<body>
<?php include 'tpl/header.php'; ?>
	<div class="col-xs-12 buscador_clientes">

<?php
$v1 = @$_POST['i_nombres_completos'];
$v2 = @$_POST['i_dni_cliente'];
?>


	<div class="container">
		
		<div class="container sinpa">
			<h1>Administrar Servicio</h1>
			<form action="">
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Nombres completos</p>
					<input name="nombre" id="nombre" type="text" readonly value="<?php echo $v1; ?>" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">N° documento</p>
					<input name="dni" id="dni" type="text" readonly value="<?php echo $v2; ?>" class="col-xs-12 col-md-9" >
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
			</form>
		</div>
	</div>
	
<?php include 'tpl/footer.php'; ?>
</body>
</html>


