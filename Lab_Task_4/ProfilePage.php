<?php
$name = $n = $e = $g = $db =$im = ""; 
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
<body >
    <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 

        
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset class="f">
        <legend> <h2 class="main-heading">Profile</h2> </legend>
    
       
       
        <label for="name">Name  : <?php echo $n?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="email">Email  : <?php echo $e?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="gender">Gender  : <?php echo $g?> </label><br>
        <span class="underline">______________________</span><br>
        <label for="dob">Date of Birth  : <?php echo $db?> </label><br>
        <span class="underline">______________________</span><br><br>          
        <a href="EditProfile.php" style= "color:green;">Edit Profile</a>
    </fieldset>

        </div>
 </div>
  <footer>
   <p>Copyright @ Ananna</p>
 </footer>           
</body>
</html>