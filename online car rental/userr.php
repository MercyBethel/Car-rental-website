<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stayles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h3{
            color: green;
        }
        </style>
</head>

<body style="background-color: white;">
    <script src="javascript.js"> </script>
    <small id="demo1"></small>
    <header> 
        <img src="images/jeep.png"  alt="CAR" width="50px" class="logo"/>
            <ul class="nav">
                <li><a href="#available">Available cars</a></li>
                <li><a href="#return">Return</a></li>
                <li><a href="#mybook">My Booking</a></li>
                
            </ul>
         
       <form action="Home.html">
            <button  class="logincls"> LOG OUT</button>
       </form>

     </header>

     <div style="margin-top: 60px;">
         
         <div id="available">

         <?php if (isset($_GET["error"])) { ?>

       <h3 stayle><?php echo $_GET["error"]?></h3>

<?php } ?>  

         <table style="margin-top: 80px;position: absolute;">
                <tr>
                    <th>ID</th>
                    <th>Car Brand</th>
                    <th>Car Name</th>
                    <th>Price per day</th>
                    <th>Status</th>
                    <th> </th>
                    
                </tr>
                <?php
                    if (isset($_GET["em"])  ) { 
                    include 'connection.php'; 
                   

                    $sql = "SELECT * FROM cars WHERE status = 'completed' ";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        
                        echo "<tr>
                        <td style='border: 1px solid black;'>".$row["id"]."</td>
                        <td style='border: 1px solid black;'>".$row["brand"]."</td>
                        <td style='border: 1px solid black;'>".$row["name"]."</td>
                        <td style='border: 1px solid black;'>".$row["price"]."</td>
                        <td style='border: 1px solid black;'>".$row["status"]."</td>
                        <td>
                        
                        <a href='renth.php?carID=".$row["id"]." && em=".$_GET['em']."'>rent</a>
                        
                        </td> ; 
                      
                         </tr>";
                       
                }   }  }?>

             
            </table>
        </div>


        <div id="return">
            <form style="background: black; position: absolute; margin-top: 130px;margin-left: 35%;
            background-color: white;color: #000;height: 410px;text-align: center;" class="signin" name="myForm"
            action = "return.php" method="post">
                 
                 <h2 >Return</h2>

                 <?php if (isset($_GET["SuccessMsg"])) { ?>

               <h3  ><?php echo $_GET["SuccessMsg"]; ?></h3>

                 <?php } ?>

                 <?php if (isset($_GET["incorrectMsg"])) { ?>
  
                 <small><?php echo $_GET["incorrectMsg"]; ?></small>

                 <?php } ?>

   
             <?php if (isset($_GET["notRented"])) { ?>

             <small><?php echo $_GET["notRented"]; ?></small>

              <?php } ?>

  
                 <div class="icontf">
                      <i class="fa-solid fa-car icon" style="color: #ffffff;"></i>
                      
                     <input type="number" name="carid" placeholder="car id" required  />
             
                 </div>
             
                 <div class="icontf">
                     <i class="fa-solid fa-car icon" style="color: #ffffff;"></i>
                     <input type="text" name="carname" placeholder="car name" required onkeyup="return ValidateForm()" />
             
                 </div>
             
                 <div class="icontf">
                    <i class="fa-solid fa-envelope icon"  ></i>
                     <input type="text" name="email" placeholder="email" required onkeyup="return ValidateForm()"/>
                     
                 </div>
             
                   <input type="submit" value="Return"  class="btn" name="return" />
            </form>
        </div>

        <div id="mybook">
        <?php

include 'connection.php';

if(isset($_GET['em'])) {
    $email = $_GET['em'];
    $sql = "SELECT * FROM info WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Name</th>
                <th>Email</th>
                <th>Rent Date</th>
                <th>Return Date</th>
              </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["rentdate"]."</td>
                    <td>".$row["returndate"]."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No data found";
    }
}

?> 
        </div>

        
         </div>

     </div>

</body>
</html>