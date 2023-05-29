<?php
  include 'connection.php';
  $errorMessage = null;

if(isset($_POST['Login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $showError=false;

 $sql = "SELECT * FROM  login where email = '$email' and  password = '$password' ";
 $result = $conn->query($sql);
  
 $num = mysqli_num_rows($result);

 if ($num>0) {
       
     
    if($email == 'admin@email.com' && $password == 'admin'){
        
        header('Location:admin.php');
    }

    else  {
        
$url = "userr.php?em=" . urlencode($email);
header("Location: " . $url);

       // header('Location:userr.php?em=".$row["email"]."');
        
    }
 }

 else if($num == 0) {

    header("Location: Login.php?error=Incorrect email and/or password.");
    
 }
  
   

}



$conn->close(); 
?>