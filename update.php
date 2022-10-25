<?php  include "connection.php";

?>


<?php

try{


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE user SET mail='Mako@gmail.com' WHERE id=5";

// Prepare statement
$stmt = $conn->prepare($sql);

// execute the query
$stmt->execute();

echo 'update usccessfully';

// echo a message to say the UPDATE succeeded
echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header('location:user.php');
?>