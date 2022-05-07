<?php
     include '../controllers/UpdateUserController.php';
    
?>


<!DOCTYPE html>
<html>
<head>

	<title> Login Page</title>
	<style type="text/css">
	
.f{
	margin: auto;
	height: 100%;
	width:24%;
	margin-top: 0%;
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
.button:hover{
				background-color:teal;
			}


.hover{

}
.hover:hover{
	border-color: cyan;
	
}
.font{
				font-size:25px;
				
				
				font: serif;
				color: palevioletred;
				
			}
			.block{
				color: green;
			}
			.signup{
				
				text-align: center;
				

			}
			.textfield{
				height: 40px;
				
			}


</style>
</head>
<body>
	<style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 


	<fieldset class="f">
		   <legend align="center"><h1>User Info Update</h1></legend>

		<form action="" method="post">
			
     </style>
				<table align="" >
             <tr>
                 <td><img src="../img/Logo.jpeg" height = "80px" width = "90px"></td>
                 <td><h1 align="center">&nbsp;  <span  style="color: green;">Meditate</span> Life</h1> <blockquote class="block">-Clear mind meditation </blockquote> </td>
             </tr>
		</table>
		<br>
		<br>
   

			
		
			<table align="left">
				<tr>
					    <td><span class="hover textfield">Choose an account type</span></td>
						<td>
						    :<select name="type">
							     <option disabled selected>Chose One</option>
						         <option>Buyer</option>
								 <option>Admin</option>
								 <option>Delivery Man</option>
							</select>
							<span><?php echo $err_type;?></span></td>
						</td>
					</tr>

					
</table>
<table>


	    <tr>
				
				<td><input class="hover textfield" type="text"  name="jid" placeholder="use this jolly roger id to update(you can change everything except this id)" size="60%" > 
					
					<span><?php echo $err_jid; ?> </span></td>
				</tr>
	




	    <tr>
				
				<td><input class="hover textfield" type="text"  name="userid" placeholder="user id" size="60%" > 
					
					<span><?php echo $err_userid; ?> </span></td>
				</tr>






				<tr>
				
				<td><input class="hover textfield" type="text"  name="username" placeholder="name" size="60%" > 
					
					<span><?php echo $err_username; ?> </span></td>
				</tr>


				<tr>
				
				<td><input class="hover textfield" type="password" name="password" size="60px" placeholder="password"> 
					<span><?php echo $err_password; ?> </span></td>
				</tr>

				<tr>
				
				<td><input class="hover textfield" type="text"  name="phone" placeholder="phone number" size="60%" > 
					
					<span><?php echo $err_phone; ?> </span></td>
				</tr>


					<tr>
				
				<td><input class="hover textfield" type="email"  name="email" placeholder="email" size="60%" > 
					<span><?php echo $err_email; ?> </span></td>
				</tr>


				<td><input class="hover textfield" type="text"  name="address" placeholder="address" size="60%" > 
					
					<span><?php echo $err_address; ?> </span></td>
				</tr>







              <tr>
					   
						<td><input type="radio" name="gender" id="1" value="Male"><span>Male</span>
						<input type="radio" name="gender" id="2" value="Female">Female <br>
						<span id="err_gender"><?php echo $err_gender;?></span></td>
					</tr>





                	<tr>
				
				<td><input class="hover textfield" type="date"  name="bdate" placeholder="Birth Day" size="40%" > <span class="font">--Birthdate</span>
					<span><?php echo $err_bdate; ?> </span></td>
				</tr>




			</table>

		

				
					<tr> 
						<td colspan="2"><input class="my-font btn-mine"type="submit" name="update_user" value="update"></td>
					</tr>
			  </table>
		</form>
	</fieldset>
	</body>
</html>