<!DOCTYPE html>
<html>
<head>
     <style>
   

    .f{
    margin: auto;
    height: 100%;
    width:24%;
    margin-top: 5.5%;
    margin-left: 35%;
    border-color: lightgreen;

}

.button{
    text-decoration: none;
    text-align: center;
    width:100%;
    color: black;
    background-color: lightgreen;
    border: 1px lightgreen;
    padding: 4px;
    
}

.textfield{
                height: 25px;
                
            }



  </style>
</head>
<body>
<?php

 
  





$success = "";
if(isset ($_POST['Submit'])){
 $data = array(
         "Name" =>$_POST['name'],
         "Email" =>$_POST['email'],
         "User_Name" =>$_POST['uname'],
         "Password" =>$_POST['pass'],
         "Gender" =>$_POST['gender'],
         "Date_of_Birth" =>$_POST['dob'],
         "Image" => "images/images.png"
          );
                 require("user.class.php");
            $user = new User('data.json');
            $user->insertNewUser($data);
            $success = "Your account has been created. Please go to login page.";
}

else if(isset ($_POST['Reset'])){
        $_POST['name'] = "";
        $_POST['email'] = "";
        $_POST['uname'] = "";
        $_POST['pass'] = "";
        $_POST['cpass'] = "";
        $_POST['gender'] = "";
        $_POST['dob'] = "";  
}
 
            


?>  
 <?php include 'HomeHeader.php';?>
  <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 


     <form method= "post" class="register-form"  action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset class="f">
         <table align="" >
             <tr>
                 <td><img src="Logo.jpeg" height = "80px" width = "90px"></td>
                 <td><h1 align="center">&nbsp;  <span  style="color: green;">Meditate</span> Life</h1> <blockquote class="block">-Clear mind meditation </blockquote> </td>
             </tr>
        </table>
        <legend align="center"> <h3 class="main-heading">REGISTRATION</h3> </legend>
       
        <input class=" textfield" size="60%" type="text" placeholder="Name" name="name"><br>
       
      
        <input class=" textfield"  size="60%" placeholder="E-mail" type="text" name="email"><br>
       
       
        <input class=" textfield"  size="60%" placeholder="User Name" type="text" name="uname"><br>
      
       
        <input class=" textfield"  size="60%" placeholder="Password" type="text" name="pass"><br>
       
        
        <input class=" textfield"  size="60%" placeholder="Confirm Password" type="text" name="cpass"><br>
        
    <fieldset>
        <legend> Gender </legend>
        <input type="radio" name="gender" value="Male" >Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
    </fieldset>
      <br>
        <fieldset>
        <legend> Date of Birth </legend>
        <input type="date" name="dob">
    </fieldset>
       

        <input class="button" type="submit" name="Submit" value="Submit">
         <div class="signup">
                    <a href="LoginPage.php" style="text-decoration: none; color: green;"> Log In? </a> 
                 
        <input type="reset" name="Reset" value="Reset"><br>
        <label><?php echo $success ?></label>
    </fieldset>
    </form> 

    <footer>
        <?php include 'footer.php';?>
    </footer>
  


</body>
</html>