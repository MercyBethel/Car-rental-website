<?php
include 'connection.php';

$id = $_GET['updateid'];  
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
     <script src="javascript.js"> </script>

    
</head>
<body>
    <script src="javascript.js"> </script>
<form action="updation.php" method="post" class="signin" style="height: 480px;margin-top: 55px;" name="myForm"  >
    
    <h2 >Update</h2>
    <small id="demo" style="color: red;"></small>
     
    <small id="demo1" style="color: red;"></small>
    <small id="demo2" style="color: red;"></small>


    <input type="hidden" name="upid" value="<?php echo $_GET['updateid']?>"/>
    
    <div class="icontf">
        <i class="fa-solid fa-car icon" style="color: #ffffff;"></i>
        <input type="text" name="brand" id="brand" placeholder="car brand" value="<?php echo $row['brand']; ?>" required onkeyup="return validateForm()"/>
          
    </div>
    

    <div class="icontf">
      <i class="fa-solid fa-car icon" style="color: #ffffff;"></i>
      <input type="text" name="carname" placeholder="car name" value="<?php echo $row['name']; ?>" required onkeyup="return validateForm()" />

  </div>

    <div class="icontf">
        <i class="fa-solid fa-money-check-dollar icon" style="color: #ffffff;"></i>
        <input type="number" name="price" placeholder="price per day" value="<?php echo $row['price']; ?>" required  onkeyup="return validateForm()"/>
        
    </div>

     
      
      <input type="submit" value="Update"  class="btn" name="submit" />
       

       
 </form>
</body>
</html>