<?php

include 'connection.php';

if(isset($_POST['insert'])) {

    $id = $_POST['carid'];
    $name = $_POST['carname'];
    $email = $_POST['email'];
    $rentdate = $_POST['rentdate'];
    $returndate = $_POST['returndate'];

    $sql = "SELECT status FROM cars WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status = $row["status"];
        
        if($status === "completed") {
            $sql = "INSERT INTO rental(id, name, email, rentdate, returndate) VALUES ('$id', '$name', '$email', '$rentdate', '$returndate')";
            $conn->query($sql);

            $sql = "INSERT INTO info(name, email, rentdate, returndate) VALUES ('$name', '$email', '$rentdate', '$returndate')";
            if($conn->query($sql)) {

                header("Location: userr.php?error=Rented successfully.&& em=".$_POST['email']." ");
                //echo 'Rented successfully';
               
                $sql = "UPDATE cars SET status = 'rented' WHERE id = $id";
                $conn->query($sql);
                

                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            header("Location: renth.php?error1=Car is not available for rent.");
    
           // echo 'Car is not available for rent';
        }
    } else {
        header("Location: renth.php?error2=Car not found.");
       // echo 'Car not found';
    }
}


 
?>