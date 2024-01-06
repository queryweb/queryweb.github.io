<?php
session_start();

require "../database/database.php";

$image = "";
$descripcion = $_POST['descripcion'];
$ano = $_POST['ano'];
$marca = $_POST['marca'];
date_default_timezone_set('Europe/Madrid');
$date = date('Y-m-d H:i:s');

//Contamos la cantidad de imágenes que queremos publicar:
$countfiles = count($_FILES['files']['name']);
//Array para guardar los nombres de las imágenes en la bdd:
$images = array();
if($countfiles > 0){
for($i = 0; $i < $countfiles; $i++){
        $fileTmpPath = $_FILES['files']['tmp_name'][$i];
        $fileName = $_FILES['files']['name'][$i];
        $fileType = $_FILES['files']['type'][$i];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $image = $newFileName;
        
        $allowedFileExtensions = array('png', 'jpg', 'jpeg');

        if(in_array($fileExtension, $allowedFileExtensions)){
            //directorio donde guardamos la imagen
           
            $uploadFileDir = '../assets/images/posts/';
           
            $dest_path = $uploadFileDir . $newFileName;
           
            //comprimimos la imagen
            $calidad = 40 ;
            
            $originalImage = "";
          
            if($fileExtension == 'png'){
               
                $originalImage = imagecreatefrompng($fileTmpPath);
               
             
            }else{
                $originalImage = imagecreatefromjpeg($fileTmpPath);
            }

            if(imagejpeg($originalImage, $dest_path, $calidad)){
                array_push($images, $image);
               
            }
        }
    }
   
    $imagesList = implode(",", $images);
   
    $sql = 'INSERT INTO tab_auto (images, descripcion, date, ano, marca) VALUES (:images, :descripcion, :date, :ano, :marca)';
    $stmt = $conn->prepare($sql);
  
    

    $stmt->bindParam(':images', $imagesList);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':marca', $marca);
    
    if($stmt->execute()){
        $respuesta = "Post publicado correctamente";
        $_SESSION['success'] = $respuesta;
        header('location: ../insert.php');
    }
    else{
        $respuesta = "No ha sido posible publicar el post";
        $_SESSION['error'] = $respuesta;
        header('location: ../index.php');
    }
}

?>