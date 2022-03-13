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
	<style type="text/css">
		.teb{
			 margin-top: 10%;

			 
    font-family: "Lucida Handwriting", "Courier New" sans-serif;
			}

		
 
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <?php include 'header.php';?>
	<style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 
	<div class="teb">

	<table border="1" align="center" width="70%" hight="40%" cellpadding="30" ;>
	
     <tr>
     	<td>Course Name</td>
     	<td>Type</td>
     	<td>Instructor Name</td>
     	<td>Course Price</td>
     </tr>

      <tr>
     	<td>Analytical Meditation</td>
     	<td>Online</td>
     	<td>Musfiq</td>
     	<td>4000</td>
     </tr>

      <tr>
     	<td>Breath Meditation</td>
     	<td>Offline</td>
     	<td>Sarzila</td>
     	<td>8000</td>
     </tr>

        <tr>
     	<td>Mindfulness Meditation</td>
     	<td>Offline</td>
     	<td>Hridita</td>
     	<td>9000</td>
     </tr>


 </table>
</div>

</form> 

    <footer>
        <?php include 'footer.php';?>
    </footer>


</body>
</html>