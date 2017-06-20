<HTML>
<HEAD>
<TITLE>Insertar.php</TITLE>
</HEAD>
<BODY>
<?php 

$c1 = @$_POST['nombres'];
$c2 = @$_POST['ap_paterno'];
$c3 = @$_POST['ap_materno'];
$c4 = @$_POST['documento'];
$c5 = @$_POST['telefono'];

	mysql_connect("localhost","root",""); 
	mysql_select_db("db_photos"); 
	mysql_query("INSERT into cliente (nombres,ap_paterno,ap_materno,documento,telefono) values ('$c1','$c2','$c3','$c4','$c5')"); 
?>
<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="clientes.php">Regresar al inicio</a></div>
</BODY>
</HTML>