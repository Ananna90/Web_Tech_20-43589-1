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
   <style type="text/css">

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
$unameErr  = $phoneErr = $timeErr= $emailErr= $dobErr = $l = "";

if(isset ($_POST['Submit'])){
   $n = $_POST['uname'];

    $p = $_POST['phone'];
      $a = $_POST['time'];
        $e = $_POST['email'];
          $d = $_POST['dob'];
           

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


if(empty($a)){
        $timeErr = "Enter Your time";
    }
   
         else 
            {
                $time = $_POST["time"] ;
            }




if(empty($e)){
        $emailErr = "Enter Your Email";
    }
   
         else 
            {
                $email = $_POST["email"] ;
            }



            if(empty($d)){
        $dobErr = "Enter Your Date ";
    }
   
         else 
            {
                $dob = $_POST["dob"] ;
            }




$Error = $success = "";

 $data = array(
         "Name" =>$_POST['uname'],
         "phone" =>$_POST['phone'],
         "address" =>$_POST['time'],
         "email" =>$_POST['email'],
         "dob" =>$_POST['dob'],
       
          );
     if(filesize("personalmed.json")==0){
      $first_record = array($data);
      $data_to_save = $first_record ;
     }
     else{
        $old_records = json_decode(file_get_contents("personalmed.json"));
        array_push($old_records,$data );
        $data_to_save = $old_records ;
     }
     if(!file_put_contents("personalmed.json", json_encode($data_to_save,JSON_PRETTY_PRINT), LOCK_EX)){
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
   


                           
    <form class="login-form" method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <fieldset class="f">
        <legend align="center"> <h3 class="main-heading">Appoint Time & Date</h3> </legend>
        <label><span style="color: white"><?php echo $l ?></span></label><br><br>
       
       <input class=" textfield" type="text" placeholder="Name" name="uname" size=60% ><span style="color: red">*<br><?php echo $unameErr?><br></span><br>
       
         
        
        <input class=" textfield" type="text" placeholder="Phone" name="phone" size=60%  ><span style="color: red">*<br><?php echo $phoneErr?><br></span><br>

      
        <input class=" textfield" type="text" name="time" placeholder="Time" size=60%  ><span style="color: red">*<br><?php echo $timeErr?><br></span><br>


      
        <input class=" textfield" type="email" name="email" placeholder="E-mail" size=60% ><span style="color: red">*<br><?php echo $emailErr?><br></span><br>


        <input class=" textfield" type="date" name="dob" size=60%  placeholder="" ><span style="color: red">*<br><?php echo $dobErr?><br></span><br>

        
   
        <input class="button" type="submit" name="Submit" value="Appoint" >
       
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

