<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<?php
$nameErr = $passErr = "";

if(isset ($_POST['Submit'])){
    $n = $_POST['name'];
    $p = $_POST['pass'];
    if(empty($n)){
        $nameErr = "Please Enter Your Name";
    }
    else{
        if(strlen($n)<4){
                $nameErr = "User Name should contains at least Four characters";
         }
        else{
            if(!preg_match("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $n)){
        $nameErr =" . User Name can contain alpha numeric characters, period, dash or underscore only. Please renter user name.";
            }
         }
    }
    if(empty($p)){
        $passErr = "Please Enter Your Password";
    }
    
    else{
        if(!preg_match( "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $p)){
        $passErr =" Minimum eight characters,one number and one special character";
         }
    }

}
    ?>
           <div class="container" style="width:900px;">   
                <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h2>Login</h2> </legend>
        <label for="name"> <b>User Name :</b> </label>
        <input type="text" name="name"><span style="color: red">*<?php echo $nameErr?><br></span><br>
        <label for="pass"> <b>Password :</b> </label>
        <input type="password" name="pass"><span style="color: red">*<?php echo $passErr?><br></span><br>    
        <span class="underline">______________________________________________________________________________________________________________</span><br><br>
                <input type="checkbox" name="rm">
        <label for="rm">Remember me</label><br>   
                <input type="submit" name="Submit" value="Submit">
                        <a href="https://www.google.com/">Forgot Password?</a>
    </fieldset>
    </form> 

</body>
</html>