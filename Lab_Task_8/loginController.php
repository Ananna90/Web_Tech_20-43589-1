<?php
    require_once 'models/db_config.php' ;  
    $jid="";
    $err_jid="";
  
    $type="";
    $err_type="";

    $userid="";
    $err_userid="";


    $username="";
    $err_username="";

    $password="";
    $err_password="";

    $phone="";
    $err_phone ="";
    
   $email="";
$err_email="";

$address="";
$err_address="";

$gender="";
$err_gender="";

$bdate= "";
$err_bdate= "";


    $hasError=false;
    

 

        
    
    
        if (isset($_POST["signup"])){


             
            if(empty($_POST["jid"]))
            {
                $hasError = true ;
                $err_jid = "Jid required!" ;
            }
            else 
            {
                $jid = $_POST["jid"] ;
            }

           



            if(empty($_POST["type"]))
            {
                $hasError = true ;
                $err_type = "Type required!" ;
            }
            else 
            {
                $type = $_POST["type"] ;
            }


            if(empty($_POST["userid"]))
            {
                $hasError = true ;
                $err_userid = "User Id required!" ;
            }
            else 
            {
                $userid = $_POST["userid"] ;
            }



            if (empty($_POST["username"])){
                $err_username="Username Required";
                $hasError=true;
            }
            elseif(strlen($_POST["username"])<5){
                $err_username="Username must contain at least 5 characters ";
                $hasError=true;
            }
            elseif(strpos($_POST["username"]," ")) {
                $err_username="space is not allowed";
                $hasError=true;
            }
            else{
                $username=htmlspecialchars($_POST["username"]);
                
            }



 

            if(empty($_POST["password"]))
            {
                $hasError = true ;
                $err_password = "Password required!" ;
            }
            else 
            {
                $password = $_POST["password"] ;
            }


              if(empty($_POST["phone"])){
                 $err_phone="Insert Your Phone Number";
             }
             elseif(!is_numeric($_POST["phone"])){
                 $err_phone="[Phone number should contain Numeric values only]";
             }
             elseif(strlen($_POST["phone"])<11){
                 $err_phone="Phone Number Must Be 11 Charachter Long";
             }
             elseif(strlen($_POST["phone"])>11){
                 $err_phone="Phone Number Must Be 11 Charachter Long";
             }
             else{
                 $phone=$_POST["phone"];
             }





          if (empty($_POST["email"])) {
                 $err_email = "Email is required";
             }
             elseif(!strpos($_POST["email"],"@")){
                 $err_email="[Email must contain @]";
             }           
             else {
                 $email =$_POST["email"];
             }


             if(empty($_POST["address"]))
            {
                $hasError = true ;
                $err_address = "Address required!" ;
            }
            else 
            {
                $address = $_POST["address"] ;
            }
 
 

            
            
            
            if(empty($_POST["gender"])) {

            $err_gender = " Select a Gender ";
        }
        else{
            $gender= $_POST["gender"];
        }





        if(empty($_POST["bdate"])) {

            $err_bdate = " Birthdate Required";
        }
        

        else{
            $bdate= $_POST["bdate"];
        }


            
            
            
           if(!$hasError)
           {
              insertUser($jid,$type,$userid,$username,$password,$phone,$email,$address,$gender,$bdate);
           }

            if(isset($_POST['signup']))
            { 
                   if(!$hasError){
                    header("Location: login.php") ;
            
            }
            else{
                
                 echo "Invalid uor password" ;
            }
            }


 }

 
 
 
 
 
 
 

        
         
        if(isset($_POST["login"]))
        {
               
            if(empty($_POST["type"]))
            {
              
                $err_type = "Type required" ;
                  $hasError = true ;
            }
            else 
            {
                $type = $_POST["type"] ;
            }


            
            if(empty($_POST["userid"])){
                $err_userid="User Id Required";
                $hasError=true;
            }
           
            elseif(strpos($_POST["userid"]," ")) {
                $err_userid="space is not allowed";
                $hasError=true;
            }
            else{
                $userid=$_POST["userid"];
                
            }
            
            
            
            
            
            
            
            
            
            if(empty($_POST["password"]))
            {
                $hasError = true ;
                $err_password = "Password required!" ;
            }
            else 
            {
                $password = $_POST["password"] ;
            }
            
            



         
            if(isset($_POST['login']))
            {

    if(authentication($userid,$password) && $type=='DIRECTOR')
    {
          session_start();
          $_SESSION["user"]= $userid;
      // setcookie("user",$userid,time()+1200,"/");
             
      header("Location: director.php");
    }
    else if(authentication($userid,$password) && $type=='INSTRUCTOR')
 
     {
          session_start();
          $_SESSION["user"]= $userid;
         //    setcookie("user",$userid,time()+1200,"/");
      header("Location: home.php");
    }
   
                echo "Invalid uor password" ;
                
            }
        }
    





        
    
    
    
    
    
    function insertUser($jid,$type,$userid,$username,$password,$phone,$email,$address,$gender,$bdate)
    {
        $query = "INSERT INTO user VALUES (NULL,'$jid','$type','$userid','$username','$password','$phone','$email','$address','$gender','$bdate')" ;
         
        execute($query) ;
    }
     
     
     
    function authentication($userid,$password)
    {
        $query = "select * from user where userid='$userid' and password='$password'";
        $result = get($query) ;
        if(count($result)>0)
        {
            return $result[0] ;
        } 
        return false ;   
    } 

   
?>