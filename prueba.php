<?php
require "./database/database.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ensertar</title>
  <link rel="stylesheet"href="registro_solicitud.css? 20256">
</head>
<body>
  
<h1>insertar</h1>

<form action="https://formsubmit.co/querycalzados@gmail.com" method="POST"> 

<div id = "texto">  
<LAbel>Nombre</LAbel>
<input type="text" name = "nombre" required > 
<LAbel>Apellidos</LAbel>
<input type="text" name = "apellidos">
<LAbel>correo</LAbel>
<input type="text" name = "correo"> 
<LAbel>pass</LAbel>
<input type="text" name = "pass"> 


<input type="submit" name = "isertar" values ="enviar"> 

<label for="RESET"></label>
<input type="reset" name ="reset" values ="reset">

<input type = "hidden" name = "_next"  values ="http://localhost/Venta_de_Vehiculos/prueba.php">
<input type = "hidden" name = "_captcha"  values ="false">
</div>
<?php

//$pdo = new PDO ('mysql:host=localhost;dbname=bdd_auto' , 'root', '');
//error_reporting (0);



$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$pass = $_POST["pass"];

if (isset($_POST['insertar'])) {
  // Resto de código
echo "Su solicitud ha sido enviada";
}
else{ "la solicitud no fue enviada... ";
}
  $consulta = ("INSERT INTO prueba (nombre, apellidos, correo, pass) VALUES ('nombre' ,' $apellidos' , '$correo' , '$pass");

//$consulta->bindParam(':nombre', $nombre);
//$consulta->bindParam(':apellidos', $apellidos);
//$consulta->bindParam(':correo', $correo);
//$consulta>bindParam(':pass', $pass);
?>
</body>
</html>

