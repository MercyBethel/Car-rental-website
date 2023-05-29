<?php
 include 'connection.php';

 if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE from cars WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('Location:admin.php');
       
    }
    else{
        die(mysqli_error($conn));
    }

 }


?>