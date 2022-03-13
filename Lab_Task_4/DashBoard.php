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
</head>
<style type="text/css">
       .img{
                text-align: center;
            }

          
   
 

        .txt{
             font-family: "Lucida Handwriting", "Courier New", sans-serif;
             text-align: center;
        }
     </style>

    
</head>
<body >
<?php include 'header.php';?>



        <div>
        	<h1> Welcome <?php echo $name?> </h1>
        </div>
 </div>

 <main>
    <br> <br>
  
   
<div class="img">
<img src="Images.png" > 
</div>
 <div class="txt">
     <h1 > Welcome to Meditate Life. </h1>
</div>
</main>




<footer>  <?php include 'footer.php';?></footer>




         
</body>
</html>