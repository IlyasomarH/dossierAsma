<?php 
include "head.php";
include "tete.php";
?>

<h1 class="text-center"> Gestion des utilisateurs</h1>


<a href="update.php" class="btn btn-success">modifier un user</a>
<a href="delete.php" class="btn btn-danger">supprimer un user</a>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Ajouter un user
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="ajout.php" method="post" class="w-50 border m-auto mt-5 p-5">

            <h2> Ajouter un user</h2>
            <div class="form-group">
            <label for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nom" name="nom">
            </div>
            <div class="form-group">

            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary mt-3">Ajouter</button>

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>











<?php


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