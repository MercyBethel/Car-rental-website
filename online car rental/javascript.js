function validateForm() {
    let  brand = document.forms["myForm"]["brand"].value;
    let  carname = document.forms["myForm"]["carname"].value;
    let  price = document.forms["myForm"]["price"].value;
    


    
     
    if(!isNaN(brand)){
      document.getElementById("demo").innerHTML="brand name must be string.";
      return false;
    }

    else if(brand == null){
      document.getElementById("demo").innerHTML="brand name is required.";
       
      return false;
    }
    
     
   else if(brand.length<=3 && brand.length>=1){
      document.getElementById("demo").innerHTML="brand name must have at list 4 characters.";
       
      return false;
    }

    document.getElementById("demo").innerHTML="";

    if(carname  == null){
      document.getElementById("demo1").innerHTML="car name is required.";
       
      return false;
    }
    
   else if(!isNaN(carname)){
document.getElementById("demo1").innerHTML="car name must be string";
return false;
}
   

else if(carname.length<6 && brand.length>=1){
    document.getElementById("demo1").innerHTML="car name must have at list 5 characters.";
     
    return false;
  }

document.getElementById("demo1").innerHTML="";


if(price <  0){
    document.getElementById("demo2").innerHTML="price can not be negative";
      return false;
    }
    

    document.getElementById("demo2").innerHTML="";

      return false;
    
    

      
  }


  function validateLogin() {
    let email = document.forms["myForm"]["email"].value;
    let name = document.forms["myForm"]["name"].value;
    let  password = document.forms["myForm"]["password"].value;
    let  age = document.forms["myForm"]["age"].value;

    if(!isNaN(name)){
        document.getElementById("demo").innerHTML="name must be string.";
        return false;
      }
      
       
     else if(name.length<5){
        document.getElementById("demo").innerHTML="name must have at list 5 characters.";
         
        return false;
      }

      document.getElementById("demo").innerHTML="";
     
    if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
      document.getElementById("demo1").innerHTML="invalid email";
      return false;
    }
    document.getElementById("demo1").innerHTML="";
     
    if(password.length<5){
        document.getElementById("demo2").innerHTML="password must have at list 5 characters.";
        return false;
      }

      document.getElementById("demo2").innerHTML="";

       
      if(age < 18 || age >80){
      document.getElementById("demo3").innerHTML="age must be between 18 and 80";
        return false;
      }

      
         
        document.getElementById("demo3").innerHTML="";
        return false;
      
 


  }

 