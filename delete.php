<?php



include "connection.php";


?>



<?php

try{

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM user WHERE id=5";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;


  header('location:user.php');
  ?>