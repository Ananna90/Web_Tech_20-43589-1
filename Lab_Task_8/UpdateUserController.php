<?php 
	 require_once '../models/db_config.php';
	 //jid change nah kore baki gula change korle kaj korbe cz function e jid=jid disi so jid diye baki shob change kora lagbe update er shob code aivabe e kora lage
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

    
    
    
        if (isset($_POST["update_user"])){


             
            if(empty($_POST["jid"]))
            {
                $hasError = true ;
                $err_jid = "Jolly Roger Id Required!" ;
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
              updateUser($jid,$type,$userid,$username,$password,$phone,$email,$address,$gender,$bdate);
           }



		 }

   
   
			function updateuser($jid,$type,$userid,$username,$password,$phone,$email,$address,$gender,$bdate){
			 $query="UPDATE USER SET  type='$type', userid='$userid', username='$username', password='$password', phone='$phone', email='$email',address='$address',gender='$gender',bdate='$bdate' WHERE jid='$jid' ";
			execute($query);
			 } 
?>