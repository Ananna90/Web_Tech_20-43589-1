<?php
   session_start();
if(!isset($_SESSION["user"])){
     //if(!isset($_COOKIE["user"])){
    
     header("Location: login.php");
    }
  

	 require_once 'models/db_config.php';
	 $query="SELECT * from user";
	         $result =get($query);
?>


<html>
     <head></head>
	 <body>
	  <style > 

      
.navbar{

    background-color: teal;

    display: flex; /*div ke column e pashapashi ana hoise */

    justify-content: flex-end; /*div ke right side e ana hoise */
   
}

.navbar a{

    color : lightgoldenrodyellow;

    font-size: 1rem;

    text-decoration: none;
 
   

    padding: 10px;
}


.navbar a:hover{
    background-color: dimgrey;
}



 .nom{

    float: left;

   

    font-size: 1.5rem;

    font-weight: bold;

    padding: 10px; 

    font-style: italic;  
   
}
.btn{

    text-decoration: none;
    color: white;
    border: 2px solid black;
    background-color: orange;

}
.btn-red{

    text-decoration: none;
    color: white;
    border: 2px solid black;
    background-color: red;

}
		</style>
		  <!-- navbar -->

<?php include 'homeheader.php';?>

	      <fieldset>




              <legend align="center"><h1> User Dashboard</h1></legend>
		       <table align="center", border ="10" cellpadding="20", cellspacing="5">
				 <tr>
				 	    <th>Id</th>
						<th>JId</th>
						<th>type</th>
						<th>User Id</th>
						<th>Name</th>
						<th>Password</th>
						<th>Phone</th>
						
						<th>Email</th>
						<th>Address</th>
						<th>Gender</th>
						<th>bdate</th>
					
						
						<th></th>
						<th></th>
				 </tr>					 
 <?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["jid"]."</td>";
		echo "<td>".$row["type"]."</td>";
	    echo "<td>".$row["userid"]."</td>";
		echo "<td>".$row["username"]."</td>";
		echo "<td>".$row["password"]."</td>";
		echo "<td>".$row["phone"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["bdate"]."</td>";
	
		
		echo '<td><a href="view/updateuser.php" class="btn">Edit</a></td>';

		echo "</tr>";
	} 
?>
			  </table>
	</fieldset>
	</body>
</html>