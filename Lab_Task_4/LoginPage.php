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

<?php
$nameErr = $passErr = $l = "";

if(isset ($_POST['Submit'])){
	$n = $_POST['uname'];
	$p = $_POST['pass'];
	if(empty($n)){
		$nameErr = "Please Enter Your Name";
	}
	else{
		if(strlen($n)<2){
	     		$nameErr = "User Name should contains at least two characters";
	     }
	    else{
	     	if(!preg_match("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $n)){
		$nameErr =" User Name can contain alpha numeric characters, period, dash or underscore only. Please renter user name.";
	     	}
	     }
	}
	if(empty($p)){
		$passErr = "Please Enter Password";
	}
	
	else{
		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $p)){
		$passErr =" Minimum eight characters, at least one letter, one number and one special character";
	     }
         else{
             $cu = $cp = "jb";
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
              if($un==$n){
               $cu = "";
              }
            }
            foreach ($info as $Infos) {
              $pn = $Infos->Password;
              if($pn==$p){
               $cp = "";
              }
            }            
            if(empty($cu) && empty($cp)){
                session_start();
             $_SESSION['uname']  = $n; 
             if(isset($_POST['remember'])){
              setcookie("uname", $n, time()+60*60*7);
              setcookie("pass", $p, time()+60*60*7);
             }
            header("location:DashBoard.php");
             }
        else{
          $l = "Invalid User Name Or Password!";
         }
        }
	}

}

	?>
    <?php include 'HomeHeader.php';?>

        <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 

     

    <form class="login-form" method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <br><br><br>
	<fieldset class="f">
        <table align="" >
             <tr>
                 <td><img src="Logo.jpeg" height = "80px" width = "90px"></td>
                 <td><h1 align="center">&nbsp;  <span  style="color: green;">Meditate</span> Life</h1> <blockquote class="block">-Clear mind meditation </blockquote> </td>
             </tr>
        </table>
        <legend align="center"> <h3 class="main-heading">Login</h3> </legend>
        <label><span style="color: red"><?php echo $l ?></span></label><br><br>
        <label for="uname"> <b>User Name :</b> </label>
        <input class="textfield" type="text" name="uname" value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"><span style="color: red">*<br><?php echo $nameErr?><br></span><br>
        <label for="pass"> <b>Password :</b> </label>
        <input class="textfield"   type="password" name="pass"value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>"><span style="color: red">*<br><?php echo $passErr?><br></span><br>    
       
        
        <input type="checkbox" name="remember" value =1 > <label for="remember"> Remember me</label><br>   
        <input class="button" type="submit" name="Submit" value="Submit">
        
    </fieldset>
    </form> 

    <footer>
        <?php include 'footer.php';?>
    </footer>
  
 

</body>
</html>

