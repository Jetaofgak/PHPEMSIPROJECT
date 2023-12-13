<?php

include("database.php");

if($_SERVER['REQUEST_METHOD']=='GET'){

    $id=$_GET['id'];

   // sql to delete a record
$sql = "DELETE FROM Clients WHERE id=’$id ‘";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}



}
?>
