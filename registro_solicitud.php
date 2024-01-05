
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

<form action="http://localhost/Venta_de_Vehiculos/registro_solicitud.php" method="POST"> 

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
<LAbel for="ingreso">ingreso</LAbel>
<input type="text" name = "ingreso" id ="ingreso" required > 

<LAbel for="direccion">Direccion</LAbel>
<input type="text" name = "direccion" id ="direccion" > 

<LAbel for="marca">Marca</LAbel>
<input type="text" name = "dmarca" id ="marca" > 

<LAbel for="ano">Año</LAbel>
<input type="text" name = "ano" id ="ano" > 


</div>
<input class ="btn" type="submit" name="enviar" value="ENVIAR SOLICITUD" > <br>
</form>

<?php
if(isset($_POST["enviar"]));{
  $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $cedula = $_POST["cedula"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $ingreso = $_POST["ingreso"];
        $direccion = $_POST["direccion"];
        $marca = $_POST["marca"];
        $ano = $_POST["ano"];

        $destinatario="querycalzados@gmail.com";
        $asunto="Nuevo mensaje de $imail " ;
        $contenido="Nombre:$nombre \n";
        $contenido="Email:$email \n";

        $header ="from:memocode@soft.com";

        $mail="mail($destinatario,$asunto,$contenido,$header";

        if($mail){
          echo "<script>alert (Su solicitud hacido envia estaremos en contacto con usted los mas pronto posible, muchas gracias:)');</script>";
}else{
  echo "<script>alert (Enesto momento estamos teniendo problema para recivir su solicitud intentelo de nuevo:(');</script>";
}
}
?>

<!-- comentario-->

</body>
</html>