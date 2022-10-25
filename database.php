<?php
include "head.php";

include "connection.php";

?>

<table class=" table ">

<tr>
    <th>id</th>
    <th>nom</th>
    <th>email</th>
</tr>





<?php


// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

try{

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, nom, mail FROM user");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_NUM);
    foreach ($stmt as $row) {

?>


       <tr>
          <td><?php print  $row[0];  ?></td>
          <td> <?php print $row[1];?> </td>
          <td> <?php print$row[2]; ?></td>
       </tr> 
<?php
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;






  ?>



</table>


<?php
  include "foot.php";
?>