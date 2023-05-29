<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 
if(isset($_POST['submit'])){
  
  $id = $_POST['upid'];
  $brand = $_POST['brand'];
  $name = $_POST['carname'];
  $price = $_POST['price'];
       
  
  $sql = "UPDATE cars SET  brand='$brand', name='$name', price='$price' WHERE id=$id";
  
  if ($conn->query($sql) === TRUE) {
    header('Location:admin.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}


$conn->close();
?>