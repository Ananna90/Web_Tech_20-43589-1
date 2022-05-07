<?php
    require_once '../models/db_config.php' ;	
     $uname="";
	 $err_uname="";
	 $phone="";
	 $err_phone="";
	 
   

     $email="";
	 $err_email="";
	  $sal="";
	 $err_sal="";

	  
	$hasError=false;
	

		
	
	
		
			 
			  if(isset($_POST["salary"])){
		 
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
			 
			 
			 
			 
			 
			 
			 
			 
	

			    if(empty($_POST["email"])){
				 $err_email=" email Required";
			 }
			 else{
				 $email=$_POST["email"];
			 }

			     if(empty($_POST["sal"])){
				 $err_sal=" sal Required";
			 }
			 else{
				 $sal=$_POST["sal"];
			 }

			   
			 






			 insertInstructorsal ($uname,$phone,$email,$sal);
		}

		
	
	function insertInstructorsal($uname,$phone,$email,$sal)
    {
        $query = "INSERT INTO instructorsal VALUES (NULL,'$uname','$phone','$email','$sal')" ;
        echo $query ;
        execute($query) ;
		 
    }

   
	 
	 
    
?>