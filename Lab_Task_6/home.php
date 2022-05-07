<?php
   session_start();

   if(!isset($_SESSION["user"])){
   //  if(!isset($_COOKIE["user"])){
    
     header("Location: login.php");
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



     
 </div>

 <main>
    <br> <br>
  
   
<div class="img">
<img src="img/Images.png" > 
</div>
 <div class="txt">
     <h1 > Welcome to Meditate Life. </h1>
</div>
</main>




<footer>  <?php include 'footer.php';?></footer>




         
</body>
</html>