d<!DOCTYPE html>
<html>
<head>
    <style>
    .nav {
    list-style-type: none;
    margin: 0;
    top:0;
    padding: 0;
    position: fixed;
    background-color: #F2FFF2;
    width: 100%;
    }
    h2 {
    font-family: "Lucida Handwriting", "Courier New", monospace;
    color: #008000;
    padding: 4px;
    letter-spacing: 1px;
    }
    li {
    float: left;
    }
    li a , button {
    display: block;
    color: #808080;
    text-align: center;
    padding: 14px 24px;
    text-decoration: none;
    overflow: hidden;
    }
    li a:hover, button:hover {
    background: #A1F1A1;
    color: #008000;
    border-bottom: 2.5px solid #008000;
    }
    .dropdown-content a:hover{
    background: #A1F1A1;
    color: #008000;
    }
    button {
    background-color: #F2FFF2;
    margin: 0;
    border: 0;
    padding-top: 2px;
    }
    .dropdown {
    padding: 14px 24px;
    background-color: #F2FFF2;
    text-decoration: none;
    overflow: hidden;
    }
    .dropdown-content { 
    display: none;
    position: absolute;
    width: 120px;
    background-color: #F2FFF2;
    }
    .dropdown-content a {
    float: none;
    padding: 14px 20px;
    text-decoration: none;
    display: block;
    }
    .dropdown:hover .dropdown-content {
    display: block;
    }


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
            .img{
                text-align: center;

            }

          
   
 

        .txt{
             font-family: Arial, Helvetica, sans-serif;

        }



  </style>
</head>
<body>

    <style>
            body{
                background-color:#E3ECE3;
                
            }
       
     </style> 
   <header>
<div class="nav">
    <li> <img src="Logo.jpeg"height="88px" width="100px"> </li>
    <li> <h2> MeditateLife </h2> <li>
        <li style="float:right"><a href="LoginPage.php"> Logout</a></li>
      
        <li style="float:right"><a href="employee.php"> Appoint Employee </a></li>
        <li style="float:right"><a href="instructor.php"> Appoint Instructor </a></li>
        <li style="float:right"><a href="review.php"> Review </a></li>

   
    
   </li>



     <li style="float:right">

    <div class="dropdown"> <button> Salary </button>
    <div class="dropdown-content" name="Salary ">
      <br>
      <a href="employeesal.php">Employee Salary</a>
      <a href="instructorsal.php">Instructor Salary</a>
    </div> </div> </li> 






    <li style="float:right">

    <div class="dropdown"> <button> Services </button>
    <div class="dropdown-content" name="Services ">
      <br>
      <a href="weeklymeditate.php">Weekly Meditation Course</a>
      <a href="personalmed.php">Personal Consultation</a>
    </div> </div> </li> 
    <li style="float:right"><a href="dashboard.php"> Home </a></li>



    


  
</header>
 

<div class="img">
<img src="img/medi.jpg" height="550px" > 
</div>
 <div class="txt">

     <h2 > Welcome to Meditate Life...It's about setting an intention and a focus for a set period of time...Meditation offers the space to move away from the automaticity of thoughts that are often negative and self-defeating. </h2>
</div>
</body>
</html>

