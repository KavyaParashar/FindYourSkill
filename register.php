<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
   
	<title>Registration-Xactitude: 2019</title>
   
   
      <link href="style.css" rel="stylesheet">
	  <link href="regstyle.css" rel="stylesheet">
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
 

<script>
$(document).ready(function() { 

	
			
	$("#event").on("change", function() {
				$("#part").empty();
				$("#hiddenval").val($(this).find("option:selected").attr("value"));
				var num = $("#hiddenval").val();
				$("#hiddenval2").val($(this).find("option:selected").html());
				$("#part").append("No of Participant(s):" + num);		
				});
			});
		

</script>

   
    
	
 
	
  
 </head>


<body>



			      
<div>
<a href = "index.php"><img src = "home.svg" width="40px" height = "40px"></img></a>
<span class = "apunkatext">GO BACK</span>
<div id="id01" class="modal">


<div style="margin-left:20px;">
      <h1>Event Registration</h1>
      <p style="color:red;">*Please fill name fields according to number of participants for the selected event<br>*Registration Amount will be collected on the day of Xactitude. <br> *Maximum Participants from a college: 18 <br>*Amount per College: Rs 2000<br> *Amount per head(individual registration): Rs 200<br>*Only 1 team from a college</p>
      
  </div>   
	  <form class="modal-content" method="post">
 <select id = "event">
	<option value = "1" selected onclick = "this.form.submit()">SELECT EVENT</option>
	 <option value = "1">Excalibur</option>
	 <option value = "2">Bug Stone</option>
	 <option value = "2">Plexplanation</option>
	 <option value = "2">Analytica Stone</option>
	 <option value = "2">Division Stone</option>
	 <option value = "3">Vision Stone</option>
	 <option value = "2">Physistark</option>
	 <option value = "2">Thor-Tronics</option>
	 <option value = "2">Port Stone</option>
	 <option value = "1">Strike Force</option>
	 <option value = "3">BT-Squad</option>
	 <option value = "2">ACM_WWC</option>
	 <option value = "2">Mind Stone</option>
	 <option value = "1-4">Project Expo</option>
	 
</select><br>
<p id = "part"></p>
  <input type="text" id = "hiddenval" name = "getnum" style="display:none;">
	  
 <input type="text" id = "hiddenval2" name = "getname" style="display:none;">
 
      <input type="text" placeholder="First Participant Name" name="name1" required>
	  <input type="text" placeholder="Second Participant Name" name="name2">
	  <input type="text" placeholder="Third Participant Name" name="name3">
	  <input type="text" placeholder="Fourth Participant Name" name="name4">
	
	
      <input type="text" pattern = "[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Enter Email" name="email" required>
	   
	  <input type="text" placeholder="Enter College Name" name="colgname" required>
		
	  <input type="text" placeholder="Enter City" name="city" required>
	  
	  <input type="number" placeholder="Enter Phone Number" name="phone" required>
		
     
	  
      <div class="clearfix">
        <center>
        <button type="submit" class="signupbtn" name="sbmt">Register</button>
		</center>
      </div>
     
  </form>

</div>
</div>
		<?php
		if(isset($_POST['sbmt']))
		{
		
			$num = $_POST['getnum'];
			$eventname = $_POST['getname'];
			if($num=="")
			{
				echo "<script type='text/javascript'>alert('Event not selected')</script>";
				echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
			}
			
			if($num=="1-4")
			{
				$name1 = $_POST['name1'];
				$name2 = $_POST['name2'];
				$name3 = $_POST['name3'];
				$name4 = $_POST['name4'];
				$colgname = $_POST['colgname'];
				$city = $_POST['city'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$con = mysqli_connect("50.62.209.150:3306","xactdb","xactitudepassword","Kristu_xactdb");
				if(!$con)
				{
					echo "<script type='text/javascript'>alert('Ooops..Unable to Connect to Db')</script>";
					echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
					
				}
				if((is_numeric($colgname)) or (is_numeric($city)) or (is_numeric($name1))or (is_numeric($name2))or (is_numeric($name3)) or (is_numeric($name4)) or (strlen($phone)!=10))
				{
					echo "<script type='text/javascript'>alert('Invalid values found')</script>";
					echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
				}
			
				else
				{
					$query = mysqli_query($con,"Insert into register(EventName,Name1,Name2,Name3,Name4,CollegeName,City,Mail,Phone) values('$eventname','$name1','$name2','$name3','$name4','$colgname','$city','$email','$phone')");
					if($query)
					{
						echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
					}
					else
					{
						echo "<script type='text/javascript'>alert('Unable to Register. Please Try Again')</script>";
					}
				}
			}
			else
			{
						if($num == 1)
						{
							if(($_POST['name2']!= "")or ($_POST['name3']!= "") or ($_POST['name4']!= ""))
							{
								echo "<script type='text/javascript'>alert('Only 1 Participant allowed in this event')</script>";
							}
							else if($_POST['name1']=="")
							{
								echo "<script type='text/javascript'>alert('Participant Name field Empty')</script>";
							}
							else
							{
									$name1 = $_POST['name1'];
									$name2 = "";
									$name3 = "";
									$name4 = "";
									$colgname = $_POST['colgname'];
									$city = $_POST['city'];
									$phone = $_POST['phone'];
									$email = $_POST['email'];
								$con = mysqli_connect("50.62.209.150:3306","xactdb","xactitudepassword","Kristu_xactdb");
									if(!$con)
									{
										echo "<script type='text/javascript'>alert('Ooops..Unable to Connect to Db')</script>";
										echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
										
									}
									else if((is_numeric($colgname)) or (is_numeric($city)) or (is_numeric($name1))or (is_numeric($name2))or (is_numeric($name3)) or (is_numeric($name4)) or (strlen($phone)!=10))
									{
										echo "<script type='text/javascript'>alert('Invalid values found')</script>";
										echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
									}
									else
									{
									$query = mysqli_query($con,"Insert into register(EventName,Name1,Name2,Name3,Name4,CollegeName,City,Mail,Phone) values('$eventname','$name1','$name2','$name3','$name4','$colgname','$city','$email','$phone')");
									if($query)
									{
									echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
									}
									else
									{
										echo "<script type='text/javascript'>alert('Unable to Register. Please Try Again')</script>";
									}
									}	
							}
						}
						elseif($num == 2)
						{
								if(($_POST['name3']!= "") or ($_POST['name4']!= ""))
									{
										echo "<script type='text/javascript'>alert('Only 2 Participants allowed in this event')</script>";
									}
								else if($_POST['name1']=="" or $_POST['name2']=="")
									{
										echo "<script type='text/javascript'>alert('Participant Name field(s) Empty')</script>";
									}
								else
									{
										
											$name1 = $_POST['name1'];
											$name2 = $_POST['name2'];
											$name3 = "";
											$name4 = "";
											$colgname = $_POST['colgname'];
											$city = $_POST['city'];
											$phone = $_POST['phone'];
											$email = $_POST['email'];
										
											$con = mysqli_connect("50.62.209.150:3306","xactdb","xactitudepassword","Kristu_xactdb");
											if(!$con)
											{
												echo "<script type='text/javascript'>alert('Ooops..Unable to Connect to Db')</script>";
												echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
												
											}
											else if((is_numeric($colgname)) or (is_numeric($city)) or (is_numeric($name1))or (is_numeric($name2))or (is_numeric($name3)) or (is_numeric($name4)) or (strlen($phone)!=10))
											{
												echo "<script type='text/javascript'>alert('Invalid values found')</script>";
												echo "<script type='text/javascript'>window.location.assign(register.php)</script>";
											}
											else
											{
											$query = mysqli_query($con,"Insert into register(EventName,Name1,Name2,Name3,Name4,CollegeName,City,Mail,Phone) values('$eventname','$name1','$name2','$name3','$name4','$colgname','$city','$email','$phone')");
											if($query)
											{
												echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
											}
											else
											{
												echo "<script type='text/javascript'>alert('Unable to Register. Please Try Again')</script>";
											}
											}
									}
						}
						elseif($num == 3)
						{
								if($_POST['name4']!= "")
									{
										echo "<script type='text/javascript'>alert('Only 3 Participants allowed in this event')</script>";
									}
								elseif($_POST['name1']=="" or $_POST['name2']=="" or $_POST['name3']=="")
										{
											echo "<script type='text/javascript'>alert('Participant Name field(s) Empty')</script>";
										}
								
									else
									{
										
											$name1 = $_POST['name1'];
											$name2 = $_POST['name2'];
											$name3 = $_POST['name3'];
											$name4 = "";
											$colgname = $_POST['colgname'];
											$city = $_POST['city'];
											$phone = $_POST['phone'];
											$email = $_POST['email'];
										
											$con = mysqli_connect("50.62.209.150:3306","xactdb","xactitudepassword","Kristu_xactdb");
											if(!$con)
												{
													echo "<script type='text/javascript'>alert('Ooops..Unable to Connect to Db')</script>";
													echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
													
												}
												else if((is_numeric($colgname)) or (is_numeric($city)) or (is_numeric($name1))or (is_numeric($name2))or (is_numeric($name3)) or (is_numeric($name4)) or (strlen($phone)!=10))
												{
													echo "<script type='text/javascript'>alert('Invalid values found')</script>";
													echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
												}
											else
											{
											$query = mysqli_query($con,"Insert into register(EventName,Name1,Name2,Name3,Name4,CollegeName,City,Mail,Phone) values('$eventname','$name1','$name2','$name3','$name4','$colgname','$city','$email','$phone')");
											if($query)
											{
												echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
											}
											else
											{
												echo "<script type='text/javascript'>alert('Unable to Register. Please Try Again')</script>";
											}
											}
									}
						}
							else if($num==4)
								if($_POST['name1']=="" or $_POST['name2']=="" or $_POST['name3']=="" or $_POST['name4']=="")
										{
											echo "<script type='text/javascript'>alert('Participant Name field(s) Empty')</script>";
										}
								else
									{
											$name1 = $_POST['name1'];
											$name2 = $_POST['name2'];
											$name3 = $_POST['name3'];
											$name4 = $_POST['name4'];
											$colgname = $_POST['colgname'];
											$city = $_POST['city'];
											$phone = $_POST['phone'];
											$email = $_POST['email'];
										
											$con = mysqli_connect("50.62.209.150:3306","xactdb","xactitudepassword","Kristu_xactdb");
											if(!$con)
											{
												echo "<script type='text/javascript'>alert('Ooops..Unable to Connect to Db')</script>";
												echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
												
											}
											else if((is_numeric($colgname)) or (is_numeric($city)) or (is_numeric($name1))or (is_numeric($name2))or (is_numeric($name3)) or (is_numeric($name4)) or (strlen($phone)!=10))
											{
												echo "<script type='text/javascript'>alert('Invalid values found')</script>";
												echo "<script type='text/javascript'>window.location.assign('register.php')</script>";
											}
											else
											{
											$query = mysqli_query($con,"Insert into register(EventName,Name1,Name2,Name3,Name4,CollegeName,City,Mail,Phone) values('$eventname','$name1','$name2','$name3','$name4','$colgname','$city','$email','$phone')");
											if($query)
											{
												echo "<script type='text/javascript'>alert('Registered Successfully')</script>";
											}
											else
											{
												echo "<script type='text/javascript'>alert('Unable to Register. Please Try Again')</script>";
											}
											}
									}
						
			}
		}
		
		?>

</body>
</html>
