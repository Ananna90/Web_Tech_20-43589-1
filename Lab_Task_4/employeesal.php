<?php
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
   $name = $_SESSION['uname'];
}
if(empty($name)){
   header("location:LoginPage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
   

    .f{
    margin: auto;
    height: 100%;
    width:30%;
    margin-top: 5%;
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
    padding: 5px;
    
}

.textfield{
                height: 40px;
                
            }



  </style>
</head>
<body>
      <?php include 'header.php';?>
<?php
$unameErr  = $phoneErr = $emailErr= $salErr = $l = "";

if(isset ($_POST['Submit'])){
    $n = $_POST['uname'];

    $p = $_POST['phone'];
     
        $e = $_POST['email'];
          $d = $_POST['sal'];
         
    if(empty($n)){
        $unameErr = "Enter Your Name";
    }
    else{
        if(strlen($n)<2){
                $unameErr = "User Name should contains at least Four characters";
         }
        else{
            if(!preg_match("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $n)){
        $unameErr =" User Name can contain alpha numeric characters, period, dash or underscore only. Please renter user name.";
            }
         }
    }





    if(empty($p)){
        $phoneErr = "Enter Your phone";
    }
   
         else 
            {
                $phone = $_POST["phone"] ;
            }






if(empty($e)){
        $emailErr = "Enter Your Email";
    }
   
         else 
            {
                $email = $_POST["email"] ;
            }



            if(empty($d)){
        $salErr = "Enter Your Salary";
    }
   
         else 
            {
                $sal = $_POST["sal"] ;
            }






$Error = $success = "";

 $data = array(
         "Name" =>$_POST['uname'],
         "phone" =>$_POST['phone'],
      
         "email" =>$_POST['email'],
         "dob" =>$_POST['sal']
        
          );
     if(filesize("salary.json")==0){
      $first_record = array($data);
      $data_to_save = $first_record ;
     }
     else{
        $old_records = json_decode(file_get_contents("salary.json"));
        array_push($old_records,$data );
        $data_to_save = $old_records ;
     }
     if(!file_put_contents("salary.json", json_encode($data_to_save,JSON_PRETTY_PRINT), LOCK_EX)){
      $Error = "Error!! Please try again.";
     }
     else{
        $success = " Data is stored successfully. ";
     }
}



    ?>
    <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 
   


                <div class="row">
                <div class="col-1">
                    <div class="form-box">
                        <div class="form">
                           
    <form class="login-form" method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset class="f">
        <legend align="center"> <h3 class="main-heading">Employee Salary</h3> </legend>
        <label><span style="color: white"><?php echo $l ?></span></label><br><br>
       
        <input class=" textfield" type="text" placeholder="name" name="uname" size=60%> <span style="color: red">*<br><?php echo $unameErr?><br></span><br>
       
         
        
        <input class=" textfield" type="text" placeholder="Phone" name="phone" size=60%  ><span style="color: red">*<br><?php echo $phoneErr?><br></span><br>

       <input class=" textfield" type="email" name="email" placeholder="E-mail" size=60% ><span style="color: red">*<br><?php echo $emailErr?><br></span><br>

        <input class=" textfield" type="text" name="sal" placeholder="Salary" size=60%  ><span style="color: red">*<br><?php echo $salErr?><br></span><br>


      
       

        
   
        <input class="button" type="submit" name="Submit" value="Submit" >
       
    </fieldset>
    </form> 
    </div>
 </div>
 </div>
</div>
 <footer>
    </form> 

    <footer>
        <?php include 'footer.php';?>
    </footer>
 
</body>
</html>

