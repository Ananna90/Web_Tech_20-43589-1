<?php
     $name="";
	 $err_name="";
	 $email="";
	 $err_email="";
	 $date="";
	 $err_date="";

	 $gender="";
	 $err_gender="";
      
      $degree="";
      $err_degree="";

	 $bgroup="";
	 $err_bgroup="";
	
	
	 
     if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
			 if(empty($_POST["name"])){
				 $err_name="Cannot be empty";
			 }
			 elseif(strlen($_POST["name"])<8){
				 $err_name="name Must two words Long";
			 }

			 elseif(strpos($_POST["name"],"")){
				 $err_name="Username Should Not Contain White Space";
			 }
			 else{
				 $name=$_POST["name"];
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

            

			if(empty($_POST["date"])){
                 $err_date="Birth Date Required";
             }
             else{
                 $date=$_POST["date"];
             }
			





			 if(empty($_POST["gender"])){
				 $err_gender="Chose Your Gender";
			 }
			 else{
				 $gender=$_POST["gender"];
			 }
			


			if(empty($_POST["drgree"])){
                 $err_degree="Degree Required";
             }
             else{
                 $degree=$_POST["degree"];
             }



			if(empty($_POST["bgroup"])){
                 $err_bgroup="Blood groupRequired";
             }
             else{
                 $bgroup=$_POST["bgroup"];
             }
		







		 } 
?>

<html>
     <head></head>
      <fieldset>
	 <body>
	      <h1>Form</h1>
	     
		  <form action="" method="post">
		  	<fieldset>
		     
					    <td><span>Name</span></td>
						<td>:<input type="text" name="name" value="<?php echo $name;?>"  >
						<span><?php echo $err_name;?></span></td>
				
			

					</fieldset>
					<br>

					<fieldset>

					<tr>
					    <th><span>Email</span></th>
						<td>:<input type="text" id="email" name="email" value="<?php echo $email;?>" name="email">
						<span id="err_email"><?php echo $err_email;?></span></td>
					</tr>
					</fieldset>
					<br>
                    <fieldset>

                    	 <tr>
                        <th><span>Date</span></th>
                        <td>:<select id="date" name="date">
                        <option disabled selected>Day</option>
                        <?php
                             for($i=1;$i<=31;$i++){
                                 echo "<option>$i</option>";
                             }
                        ?>
                        </select>
						
						
						
                        <select id="date" name="date">
                        <option disabled selected>Month</option>
                        <?php
                        $month= array("January","February","March","April","May","June","July","August","September","October","November","December");
                        for($j=0;$j<count($month);$j++)
                        {
                            echo "<option>$month[$j]</option>";
                        }
                        ?>
                        </select>
						
						
						
                        <select id="date" name="date">
                        <option disabled selected>Year</option>
                        <?php
                             for($k=2021;$k<=2030;$k++){
                                 echo "<option>$k</option>";
                             }
                        ?>
						
                        </select>
						<span id="err_date"><?php echo $err_date;?></span>
                        </td>
                    </tr>
					







                    </fieldset>

 <br>

                    <fieldset>

										    <td><span>Gender</span></td>
						<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
						<input type="radio" name="gender" value="Female">Female<br>
						<span><?php echo $err_gender;?></span></td>
					


                     </fieldset>


<br>



<fieldset>


					<tr>
					    <td><span>Degree</span></td>
						<td>:
						<input type="checkbox" value="Movies" name="hobbies[]">SSC
						<input type="checkbox" value="Music" name="hobbies[]">HSC
						<input type="checkbox" value="Games" name="hobbies[]">BSc
						<input type="checkbox" value="Garden" name="hobbies[]">MSc<br>
						<span><?php echo $err_degree;?></span></td></td>
					</tr>
</fieldset> <br>
   
   <fieldset>

					
					    <td><span>Blood Group</span></td>
						<td>
						    :<select name="bgroup">
							     <option disabled selected>Chose One</option>
						         <option>O+</option>
								 <option>O-</option>
								 <option>A+</option>
								 <option>A-</option>
								 <option>AB+</option>
							</select>
							<span><?php echo $err_degree;?></span></td>
						</td>
					

					</fieldset> <br>
					<tr>
					
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
			  </table>
		</form>
		</fieldset>
	</body>
	</html>