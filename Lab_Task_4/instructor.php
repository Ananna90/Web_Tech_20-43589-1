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
    width:24%;
    margin-top: 5%;
    margin-left: 35%;
    border-color: skyblue;

}

.button{
    text-decoration: none;
    text-align: center;
    width:100%;
    color: whitesmoke;
    background-color: rgb(73,127,175);
    border: 1px solid red;
    padding: 5px;
    
}

.textfield{
                height: 40px;
                
            }



  </style>
</head>
<body>
<?php
$unameErr = $phoneErr = $addressErr= $emailErr= $dobErr = $bloodgroupErr =$genderErr = $l = "";

if(isset ($_POST['Submit'])){
    $n = $_POST['uname'];
 
    $p = $_POST['phone'];
      $a = $_POST['address'];
        $e = $_POST['email'];
          $d = $_POST['dob'];
            $bd = $_POST['bloodgroup'];
              $g = $_POST['gender'];

    if(empty($n)){
        $unameErr = "Enter Your Name";
    }
    elseif(strlen($n)<2){
                $unameErr = "User Name should contains at least Four characters";
     }
     else 
            {
                $uname = $_POST["uname"] ;
            }


    if(empty($p)){
        $phoneErr = "Enter Your phone";
    }
   
         else 
            {
                $phone = $_POST["phone"] ;
            }


if(empty($a)){
        $addressErr = "Enter Your address";
    }
   
         else 
            {
                $address = $_POST["address"] ;
            }




if(empty($e)){
        $emailErr = "Enter Your Email";
    }
   
         else 
            {
                $email = $_POST["email"] ;
            }



            if(empty($d)){
        $dobErr = "Enter Your Date of Birth";
    }
   
         else 
            {
                $dob = $_POST["dob"] ;
            }


            if(empty($bd)){
        $bloodgroupErr = "Enter Your bloodgroup";
    }
   
         else 
            {
                $bloodgroup = $_POST["bloodgroup"] ;
            }

            if(empty($g)){
        $genderErr = "Enter Your Gender";
    }
   
         else 
            {
                $gender = $_POST["gender"] ;
            }


$Error = $success = "";

 $data = array(
         "Name" =>$_POST['uname'],
         "phone" =>$_POST['phone'],
         "address" =>$_POST['address'],
         "email" =>$_POST['email'],
         "dob" =>$_POST['dob'],
         "bloodgroup" =>$_POST['bloodgroup'],
         "gender" =>$_POST['gender']
          );
     if(filesize("instructor.json")==0){
      $first_record = array($data);
      $data_to_save = $first_record ;
     }
     else{
        $old_records = json_decode(file_get_contents("instructor.json"));
        array_push($old_records,$data );
        $data_to_save = $old_records ;
     }
     if(!file_put_contents("instructor.json", json_encode($data_to_save,JSON_PRETTY_PRINT), LOCK_EX)){
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
        <legend align="center"> <h3 class="main-heading">Appoint Instructor</h3> </legend>
        <label><span style="color: white"><?php echo $l ?></span></label><br><br>
       
        <input class=" textfield" type="text" placeholder="name" name="uname" size=60% value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"><span style="color: red">*<br><?php echo $unameErr?><br></span><br>
       
         
        
        <input class=" textfield" type="text" placeholder="phone" name="phone" size=60%  ><span style="color: red">*<br><?php echo $phoneErr?><br></span><br>

      
        <input class=" textfield" type="text" name="address" placeholder="address" size=60%  ><span style="color: red">*<br><?php echo $addressErr?><br></span><br>


      
        <input class=" textfield" type="email" name="email" placeholder="email" size=60% ><span style="color: red">*<br><?php echo $emailErr?><br></span><br>


        <input class=" textfield" type="date" name="dob" size=60%  placeholder="" ><span style="color: red">*<br><?php echo $dobErr?><br></span><br>

        <input class=" textfield" type="text" name="bloodgroup" size=60%  placeholder="bloodgroup"><span style="color: red">*<br><?php echo $bloodgroupErr?><br></span><br>

    

               <input type="radio" name="gender" id="1" value="Male"><span>Male</span>
<input type="radio" name="gender" id="2" value="Female">Female <br>
<span style="color: red">*<br><?php echo $genderErr?><br></span><br>





   
        <input class="button" type="submit" name="Submit" value="Appoint" >
       
    </fieldset>
    </form> 
    </div>
 </div>
 </div>
</div>
 <footer>
   <p>Copyright @ Ananna</p>
 </footer>
</body>
</html>

