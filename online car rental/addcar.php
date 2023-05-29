<?php
 include 'connection.php';
  
if(isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $name = $_POST['carname'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO cars(id,brand, name, price, status) VALUES (NULL,'$brand', '$name', '$price', '$status')";
    
    if($conn->query($sql)) {
        header('Location:admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>