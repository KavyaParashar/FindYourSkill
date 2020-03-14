<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration-Xactitude: 2019</title>
      <link href="css/style3.css" rel="stylesheet">
	  <link href="css/regstyle.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 </head>
<body>	      
<div>
<a href = "index.html"><img src = "home.svg" width="40px" height = "40px"></img></a>
<span class = "apunkatext">GO BACK</span>
<div id="id01" class="modal">
<div style="margin-left:20px;">

  </div>   
	  <form class="modal-content" method="post">
<p id = "part"></p>
  <input type="text" id = "hiddenval" name = "getnum" style="display:none;">
	  
 <input type="text" id = "hiddenval2" name = "getname" style="display:none;">
 
      <input type="text" placeholder="First Participant Name" name="name" required>
      <input type="text" pattern = "[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Enter Email" name="email" required>
      <input type="number" placeholder="Enter Phone Number" name="number" required>
	  <input type="text" placeholder="Skills" name="skills" required>
	  <input type="text" placeholder="Previously worked on projects or github profile link" name="github">
	  <input type="text" placeholder="Message or Quote" name="message">
      <div class="clearfix">
        <center>
        <button type="submit" class="signupbtn" name="submit">Update</button>
		</center>
      </div>
     
  </form>

</div>
</div>
        </body>
        </html>

<?php
    require "config.php";
    if(isset($_POST["submit"]))
    {
        $name=$_POST['name'];
        $skills=$_POST['skills'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $github=$_POST['github'];
        $message=$_POST['message'];
        
        $query=mysqli_query($con,"Insert into portfolio(name,email,number,skills,github,message) values('$name','$email','$number','$skills','$github','$message')");
        if($query)
        {
            echo "<script type = 'text/javascript'>alert('Registration Successful')</script>";
            echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
        }
        else
        {
            echo "<script type = 'text/javascript'>alert('Registration not Successful')</script>";
            echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
        }
    }
?>