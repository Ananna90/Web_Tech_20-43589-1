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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
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
	  <?php include 'header.php';?>
<?php
$reviewErr = $l = "";

if(isset ($_POST['Submit'])){
	$r = $_POST['review'];


    if(empty($r)){
        $reviewErr = "Enter Your review";
    }
   
         else 
            {
                $review = $_POST["review"] ;
            }

$Error = $success = "";

 $data = array(
         "review" =>$_POST['review'],
        
          );
     if(filesize("review.json")==0){
      $first_record = array($data);
      $data_to_save = $first_record ;
     }
     else{
        $old_records = json_decode(file_get_contents("review.json"));
        array_push($old_records,$data );
        $data_to_save = $old_records ;
     }
     if(!file_put_contents("review.json", json_encode($data_to_save,JSON_PRETTY_PRINT), LOCK_EX)){
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


                     
    <form class="review-form" method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<fieldset class="f">
        <legend align="center"> <h3 class="main-heading">Review</h3> </legend>
      


  


         <input class="textfield" type="text" name="review" size=60%  placeholder="review"><span style="color: red">*<br><?php echo $reviewErr?><br></span><br>

           <input class="button" type="submit" name="Submit" value="Review" >
</fieldset>
</form>



</body>

</html>
