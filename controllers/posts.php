<?php

require "./database/database.php";

$posts = array();
 $stmt = $conn->prepare("select * from tab_auto");
   $stmt->execute();
     while($row = $results = $stmt->fetch(PDO::FETCH_ASSOC)){
        array_push($posts, $row);
       
}

?>