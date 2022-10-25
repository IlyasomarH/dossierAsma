

<?php   
include "head.php";
 include "connection.php";


 ?>










<?php

$nom=$_POST['nom'];
$email=$_POST['email'];
try {

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `user`(`nom`,`mail`) VALUES ('$nom','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
$conn = null;


// header('location:user.php');


?>




<?php
include "foot.php";

?>