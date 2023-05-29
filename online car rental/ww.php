<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrental";

 
$conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['insert']))
    {
   
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $age=$_POST['age'];


        $sql = "SELECT * FROM  login where email = '$email' ";
        $result = $conn->query($sql);
         
        $num = mysqli_num_rows($result);
        
      if ($num>0){
        echo "<script language= 'javascript'>";
        echo "alert('email that you have entered already exist')";
        echo "</script >";
      }
       
      else if ($num == 0){
        $sql = "insert into login(name, email, password, age) VALUES ('$name','$email','$password',$age)";
      
        if($conn->query($sql)){
    
        $url = "userr.php?em=" . urlencode($email);
        header("Location: " . $url);
  
        }
         
         else {
        echo "Error: " . $sql . "<br>" . $conn->error;
         }
      }
       
      
      }
       

           $conn->close();
           ?>
    
