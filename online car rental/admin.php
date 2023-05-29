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

<body style="background-color: #ffffff;">
     
         

  
    <ul class="vernavbar">

 <div style="margin-top: 60px;">
    <li><a href="#Manegecars">Manege cars</a></li>
    <li><a href="#rentls">Rentls</a></li>
    <li><a href="#availablecars">Available Cars</a></li>
    <li><a href="#transaction">Transaction Data</a></li>
    <li><a href="#customers">Customers</a></li>
    <p style="color: #ffffff;">__________________________________</p>
    <li><a href="Home.html">Logout</a></li>
   
 </div>
        
    </ul>

    <div style="margin-left: 20%;">
        <div id="Manegecars">
            
            <form action="add.html">
                <button 
                style="margin-top: 80px; margin-left: 60px;width: 90px;height: 35px;color: #ffffff;
                background-color: #000000; ">
                <i class="fa-sharp fa-light fa-plus" style="color: #ffffff;font-size: 20px;"></i>
                 ADD
                </button>
            </form>
           
            <table >
                <tr>
                    <th>ID</th>
                    <th>Car Brand</th>
                    <th>Car Name</th>
                    <th>Price per day</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <tbody>
                <tr>
                    <?php
                    
                    include 'connection.php'; 

                    $sql = "SELECT * FROM cars";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $id=$row["id"];
                        echo "<tr>
                        <td style='border: 1px solid black;'>".$row["id"]."</td>
                        <td style='border: 1px solid black;'>".$row["brand"]."</td>
                        <td style='border: 1px solid black;'>".$row["name"]."</td>
                        <td style='border: 1px solid black;'>".$row["price"]."</td>
                        <td style='border: 1px solid black;'>".$row["status"]."</td>
                            
                        <td>
                        <a href='update.php?updateid=".$row["id"]."'>  <i class='fa-solid fa-pen-to-square' style='color: #000000;'></i></a>
                         <a href='delete.php?id=".$row["id"]."'> <i class='fa-solid fa-trash-can' style='color: #000000;'></i></a>
                        </td></tr>";
                       
                        
                }   } ?>
                 </tr>
                </tbody> 
            </table>
        </div>

        <div id="rentls">
            <table style="margin-top: 80px;position: absolute;">
            <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rent date</th>
                    <th>Return data</th>
                    
                </tr>

                <?php
                    
                    include 'connection.php'; 

                    $sql = "SELECT * FROM rental";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                       
                        echo "<tr>
                        <td style='border: 1px solid black;'>".$row["id"]."</td>
                        <td style='border: 1px solid black;'>".$row["name"]."</td>
                        <td style='border: 1px solid black;'>".$row["email"]."</td>
                        <td style='border: 1px solid black;'>".$row["rentdate"]."</td>
                        <td style='border: 1px solid black;'>".$row["returndate"]."</td>
                      
                         </tr>";
                       
                }   } ?>
                     
            </table>
        </div>





        <div id="availablecars">
            <table style="margin-top: 80px;position: absolute;">
                <tr>
                    <th>ID</th>
                    <th>Car Brand</th>
                    <th>Car Name</th>
                    <th>Price per day</th>
                    <th>Status</th>
                    
                </tr>
                <?php
                    
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
                         
                      
                         </tr>";
                       
                }   } ?>
            </table>
        </div>

        

        <div id="transaction">
        <table style="margin-top: 80px;position: absolute;">
            <tr>
                  
                    <th>Car Name</th>
                    <th>Email</th>
                    <th>Rent date</th>
                    <th>Return data</th>
                    
                </tr>

                <?php
                    
                    include 'connection.php'; 

                    $sql = "SELECT * FROM info";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                       
                        echo "<tr>
                       
                        <td style='border: 1px solid black;'>".$row["name"]."</td>
                        <td style='border: 1px solid black;'>".$row["email"]."</td>
                        <td style='border: 1px solid black;'>".$row["rentdate"]."</td>
                        <td style='border: 1px solid black;'>".$row["returndate"]."</td>
                      
                         </tr>";
                       
                }   } ?>
                     
           
            </table>
        </div>

        <div id="customers">
            <table style="margin-top: 80px;position: absolute;">
                <tr>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Age</th>
                    
                </tr>

                <?php
           include 'connection.php';

 
         $sql = "SELECT * FROM login";
         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
        echo "<tr><td style='border: 1px solid black;'>".$row["name"]."</td> 
        <td style='border: 1px solid black;'>".$row["email"]."</td>
        <td style='border: 1px solid black;'>".$row["password"]."</td> 
        <td style='border: 1px solid black;'>".$row["age"]."</td></tr>";
    }
     
} else {
    echo "0 results";
}

$conn->close();
?>

            </table>
        </div>

    </div>
</body>

</html>