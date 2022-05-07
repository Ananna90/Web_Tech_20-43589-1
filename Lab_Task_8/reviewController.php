<?php
    require_once '../models/db_config.php' ;	
     $review="";
	 $err_review="";
	 

	$hasError=false;
	

		
	
	
		
			 
			  if(isset($_POST["rev"])){
		 
			     if(empty($_POST["review"])){
				 $err_review=" review Required";
			 }
			 else{
				 $review=$_POST["review"];
			 }


			 
			 







			 insertRevieww ($review);
		}

		
	
	function insertRevieww($review)
    {
        $query = "INSERT INTO revieww VALUES (NULL,'$review')" ;
        echo $query ;
        execute($query) ;
		 
    }

   
	 
	 
    
?>