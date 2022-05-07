<?php
    require_once '../models/db_config.php' ;	
     $uname="";
	 $err_uname="";
	 $phone="";
	 $err_phone="";
	 
     $address="";
	 $err_address="";


     $email="";
	 $err_email="";
	  $date="";
	 $err_date="";

	   $bg="";
	 $err_bg="";

	$hasError=false;
	

		
	
	
		
			 
			  if(isset($_POST["appoint"])){
		 
			     if(empty($_POST["uname"])){
				 $err_uname=" uname Required";
			 }
			 else{
				 $uname=$_POST["uname"];
			 }


			     if(empty($_POST["phone"])){
				 $err_phone=" phone Required";
			 }
			 else{
				 $phone=$_POST["phone"];
			 }
			 
			 
			 
			 
			 
			 
			 
			 
			   if(empty($_POST["address"])){
				 $err_address="quantity Required";
			 }
			  
			 else{
				 $address=$_POST["address"];
			 }


			    if(empty($_POST["email"])){
				 $err_email=" email Required";
			 }
			 else{
				 $email=$_POST["email"];
			 }

			     if(empty($_POST["date"])){
				 $err_date=" date Required";
			 }
			 else{
				 $date=$_POST["date"];
			 }

			     if(empty($_POST["bg"])){
				 $err_bg=" Bloog Group Required";
			 }
			 else{
				 $bg=$_POST["bg"];
			 }
			 
			 






			 insertInstructorr ($uname,$phone,$address,$email,$date,$bg);
		}

		
	
	function insertInstructorr($uname,$phone,$address,$email,$date,$bg)
    {
        $query = "INSERT INTO instructorr VALUES (NULL,'$uname','$phone','$address','$email','$date','$bg')" ;
        echo $query ;
        execute($query) ;
		 
    }

   
	 
	 
    
?>