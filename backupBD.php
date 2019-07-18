
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bienvenido</title>

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/pages.css" />

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<?php

	date_default_timezone_set("America/Bogota");
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="12345678";
	$dbname="bdunad301127_11";


	$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
	$backup_file = '"C:\AppServ\www\Inventario\copias\"'.$dbname. "-" .date("Y-m-d-H-i-s"). ".sql";
	system("$mysqldump --no-defaults -u $dbuser -p$dbpass $dbname > $backup_file");


	?>


<h2><p align="center">COPIA DE SEGURIDAD REALIZADA SATISFACTORIAMENTE</p></h2>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>