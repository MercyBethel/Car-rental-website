<?php
include 'connection.php';

$id = $_GET['carID'];  
$sql = "SELECT * FROM cars WHERE id = $id";
$result = $conn->query($sql);

 
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stayles.css">
     
     

    <script>
        function validateForm() {
   
    let  carname = document.forms["myForm"]["carname"].value;
    let email = document.forms["myForm"]["email"].value;
  
    if(!isNaN(carname)){
document.getElementById("demo1").innerHTML="car name must be string";
return false;
}
   
else if(carname.length<6){
    document.getElementById("demo1").innerHTML="car name must have at list 5 characters.";
     
    return false;
  }

document.getElementById("demo1").innerHTML="";

if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
      document.getElementById("demo").innerHTML="invalid email";
      return false;
    }
    document.getElementById("demo").innerHTML="";
  
  }


    </script>
    
</head>
<body>
    
    <form action="rent.php" method="post"
    class="signin" style="height: 550px;margin-top: 45px;" name="myForm">
    
        <h2 >Rent</h2>
      <small id="demo"></small>
      
      <small id="demo1"></small>

      <?php if (isset($_GET["error1"])) { ?>
  
  <small><?php echo $_GET["error1"]; ?></small>

  <?php } ?>

   
  <?php if (isset($_GET["error2"])) { ?>

      <small><?php echo $_GET["error2"]; ?></small>

      <?php } ?>

        <div class="icontf">
            <i class="fa-solid fa-car icon" style="color: #ffffff;"></i>
            <input type="number" name="carid" placeholder="car id" value="<?php echo $row['id']; ?>" required  />

        </div>

       
        
        <div class="icontf">
            <i class="fa-solid fa-car icon" style="color: #ffffff;"></i>
            <input type="text" name="carname" placeholder="car name" value="<?php echo $row['name']; ?>" style="width: 230px;" required onkeyup="return validateForm()" />

        </div>

        <div class="icontf">
            <i class="fa-solid fa-envelope icon"  ></i>
            <input type="text" name="email" placeholder="email" value="<?php echo $_GET['em']; ?>" required onkeyup="return validateForm()" />

        </div>

        <div class="icontf">
            <i class="fa-solid fa-calendar-days icon" style="color: #ffffff;"></i>
            <input placeholder="rent date" type="text" onfocus="(this.type = 'date')"  name="rentdate" required>
            
        </div>

        <div class="icontf">
            <i class="fa-solid fa-calendar-days icon" style="color: #ffffff;"></i>
            <input placeholder="return date" type="text" onfocus="(this.type = 'date')"  name="returndate" required>
            
        </div>

        
            <input type="submit" name="insert"value="Rent" class="btn"/>
         
          

           
     </form>
</body>
</html>