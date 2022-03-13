<?php
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:LoginPage.php");
}
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
            if($un==$name){
               $n = $Info->Name;
               $e = $Info->Email ;
               $g = $Info->Gender ;
               $db =$Info->Date_of_Birth ;
               $im = $Info->Image ;

              }
            }

if(isset ($_POST['Submit'])){
            require("user.class.php");
            $user = new User('data.json');
            $user->updateUser($name,'Name',$_POST['name']);
            $user->updateUser($name,'Email',$_POST['email']);
            $user->updateUser($name,'Gender',$_POST['gender']);
            $user->updateUser($name,'Date_of_Birth',$_POST['dob']);
            header("location:ProfilePage.php");
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


        </style>
<body >
     <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 
  
 
        
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset class="f">
        <legend> <h3 class="main-heading">Edit Profile</h3> </legend>
        <label for="name">Name  : </label><input type="text" name="name" value = "<?php echo $n?>" ><br>
        
        <label for="email">Email  : </label><input type="text" name="email" value = "<?php echo $e?>" ><br>
       
        <label for="gender">Gender  : </label>        
        <input type="radio" name="gender" value="Male" required <?php if($g=="Male"){echo "checked";}?> >Male
        <input type="radio" name="gender" value="Female" required <?php if($g=="Female"){echo "checked";}?> >Female
        <input type="radio" name="gender" value="Other" required <?php if($g=="Other"){echo "checked";}?> >Other<br>
        
        <label for="dob">Date of Birth  : </label><input type="date" name="dob" value = "<?php echo $db?>" ><br>
                

        <input class="button" type="submit" name="Submit" value="Submit">
    </fieldset>

        </div>
 </div>
  <footer>
   <p>Copyright @ 2017</p>
 </footer>           
</body>
</html>