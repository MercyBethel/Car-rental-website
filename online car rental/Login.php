<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stayles.css">
    <style>
        body{
            background-color: rgb(218, 221, 221); 
        } 
    </style>
     
     <script type="text/javascript" src="javascript.js"></script> 
     
     <script>
    
     function validateLogin() {
        let email = document.forms["myForm"]["email"].value;
         
        if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
          document.getElementById("demo1").innerHTML="invalid email";
          return false;
        }
        document.getElementById("demo1").innerHTML="";
         
      }
    </script>

    
</head>
<body>
   

   
     <form class="signin" action="authorization.php" name="myForm" method="post">
   
          
    
        <h2 ><i class="fa-sharp fa-solid fa-right-to-bracket" style="color: #000000;"></i> SignIn</h2>

        
        <small id="demo1"></small>
        <small id="err"></small>

     
        <?php if (isset($_GET["error"])) { ?>
  
          <small><?php echo $_GET["error"]; ?></small>

          <?php } ?>


        <div class="icontf">
            <i class="fa-solid fa-envelope icon"  ></i>
            <input type="text" name="email" id="email" placeholder="email" required onkeyup="return validateLogin()"/>
        </div>

        <div class="icontf">
            <i class="fa-solid fa-key icon" ></i>
            <input type="password" name="password" placeholder="password"  required/>
            
        </div>
          
          <input type="submit" value="Login" class="btn" name="Login" />

          <p style="margin-top: 5px;">don't have account?<a href="signup.html">Sign up</a></p>
     </form>

     
</body>
</html>