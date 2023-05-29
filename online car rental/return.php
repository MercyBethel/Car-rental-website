<?php

include 'connection.php';

if(isset($_POST['return'])) {

    $id = $_POST['carid'];
    $name = $_POST['carname'];
    $email = $_POST['email'];
     
    $sql = "SELECT * FROM rental WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['name'] == $name && $row['email'] == $email) {
            $sql = "UPDATE cars SET status = 'completed' WHERE id = '$id'";
            $conn->query($sql);

            $sql = "DELETE from rental WHERE id = '$id'";
            mysqli_query($conn,$sql);

            header("Location: userr.php ?SuccessMsg=returned successfully.&& em=".$_POST['email']."");
           // echo 'returned successfully';
        } else {
            header("Location: userr.php ?incorrectMsg=Incorrect car name or email.&& em=".$_POST['email']."");
            //echo 'Incorrect car name or email';
        }
    } else { 
        header("Location: userr.php ? notRented=Car is not rented.&& em=".$_POST['email']."");
       // echo 'Car is not rented';
    }
}

?>