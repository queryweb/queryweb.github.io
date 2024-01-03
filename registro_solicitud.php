<?php
require "./database/database.php";
//$pdo= new pdo ('mysql:host=localhost;dbname=bdd_auto' , 'root', '');

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="registro_solicitud.css? 20256">
    <title>formulario de solicitud</title>
</head>
<body>
    <div>
<h1 class ="encabesado">FORMULARIO DE SOLICITUD <br>
</div>


    
<h2 id class="correo">
      Whatsapp: 849-751-2803 <br>
        Crreo: queryautoimport@gmail.com <br>
        </h2>
          <main>

<div id ="bancos">

<img src="img/br.png" alt="unaimagen "   width ="150px" >
<img src="img/bP.png" alt="unaimagen "   width ="150px" >
<img src="img/bhd.png" alt="unaimagen "   width ="200px" >
</div>


 <MAIN>
  <div class="img"></div>
 </MAIN>

<div>
<a href="http://localhost/Venta_de_Vehiculos/Vehiculos.PHP">BOLVER ATRA</a>
</div>
<h2>
  LLENAR SOLICITUD
</h2>

<form action="https://formsubmit.co/querycalzados@gmail.com" method="POST"> 

<div id = "texto">  
<LAbel for="Nombre">Nombres</LAbel>
<input type="text" name = "nombres" id ="nombres"required > 

<LAbel for="apellidos">Apellidos</LAbel>
<input type="text" name = "apellidos" id ="apellidos">

<LAbel for="cedula">Cedula</LAbel>
<input type="text" name = "cedula" id ="cedula"> 

<LAbel for="email">Email</LAbel>
<input type="email" name = "email" id ="email"> 

<LAbel for="telefono">Telefono</LAbel>
<input type="text" name = "telefono" id ="telefono"> 
</div>


<div id = "texto1">  
<LAbel>Ingreso</LAbel>
<input type="text" name = "ingreso" required > 
<LAbel>Direccion</LAbel>
<input type="text" name = "direccion">
<LAbel>Marca</LAbel>
<input type="text" name = "marca"> 
<LAbel>Año</LAbel>
<input type="text" name = "ano"> 

</div>
<input class ="btn" type="submit" name="insertar solicitud" value="ENVIAR SOLICITUD " > <br>
<input type="hidden" name="_captcha" value="false">
<input type="hidden" name="_next"  values="http://localhost/Venta_de_Vehiculos/registro_solicitud.php">


</script>
</form>



<!-- comentario-->

</body>
</html>