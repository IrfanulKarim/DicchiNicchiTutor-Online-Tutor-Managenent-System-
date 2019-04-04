<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script type="text/javascript" src="C:\xampp\htdocs\DicchiNicchiTutor\IrfanulJS.js"></script>
</head>
<body>

	<div class="container">
		<h1 class="text-success text-center" style="font-size: 80px";> Registration Here !<h1>
		
		<div  class="col-lg-8 m-auto d-block">
			<form action="handleRegistration.php" method="POST" onsubmit="return validation()" >
			
			
				<label>User Name</label>
				<input type="text" name="username" class="form-control" id="username" >
				<span id="usern" class="text-danger "></span>
			

			
			
			
				<label>Password</label>
				<input type="text" name="pass" class="form-control" id="pass" >
				<span id="passw" class="text-danger "></span>
			
			
			
				<label>Confirm Password</label>
				<input type="text" name="confpass" class="form-control" id="confpass" >
				<span id="confpassw" class="text-danger "></span>
			
			
			
				<label>Mobile Number</label>
				<input type="text" name="mobile" class="form-control" id="mobile" >
				<span id="mobilen" class="text-danger "></span>
			
			
			
				<label>Email</label>
				<input type="text" name="email" class="form-control" id="email" >
				<span id="emails" class="text-danger "></span>
			
			
			
				<label>Prefered Place</label>
				<select name="place">
				  <option value="Mirpur">Mirpur</option>
				  <option value="Uttora">Uttora</option>
				  <option value="Nikunjo">Nikunjo</option>
				  <option value="Bashundara">Bashundara</option>
				</select>
				
				<!-<input type="text" name="place" class="form-control" id="place" autocomplete="off">
				<!<span id="pplace" class="text-danger ">
				<!</span>
				
			
			
			
				<label>Prefered Subject</label>
				<select name="subject">
				  <option value="Math">Math</option>
				  <option value="English">English</option>
				  <option value="Physics">Physics</option>
				  <option value="Chemestry">Chemestry</option>
				</select>
			
			
			
				<label>Prefered Class</label>
				<select name="class">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				  <option value="9">9</option>
				  <option value="10">10</option>
				  <option value="11">11</option>
				  <option value="12">12</option>
				</select>
			
			
			
				<label>Prefered Medium</label>
				<select name="medium">
				  <option value="Bangla">Bangla</option>
				  <option value="English">English</option>
				</select>
			
			
			
				<label>Expected Minimum Salary</label>
				<select name="salary">
				  <option value="1000">1000</option>
				  <option value="2000">2000</option>
				  <option value="3000">3000</option>
				  <option value="4000">4000</option>
				  <option value="5000">5000</option>
				  <option value="6000">6000</option>
				  <option value="7000">7000</option>
				  <option value="8000">8000</option>
				  <option value="9000">9000</option>
				  <option value="10000">10000</option>
				  <option value="11000">11000</option>
				  <option value="12000">12000</option>
				</select>
			
			
			
				<label>University</label>
				<select name="university">
				  <option value="AIUB">AIUB</option>
				  <option value="BRAC">BRAC</option>
				  <option value="NSU">NSU</option>
				</select>

				<label>Gender</label>
				<select name="gender">
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				 
				</select>
			
			
			
				<label>Study Details</label>
				<input type="text" name="details" class="form-control" id="details" autocomplete="off">
				<span id="Sdetail" class="text-danger "></span>
			
			
			
			
			<input type="submit"  name="submit" value="submit" class="btn btn-success" autocomplete="off" >
			
			</form>
			
			
		</div>
		
	</div>
	
	<script type="text/javascript">
	
		function validation()
		{
			var user= document.getElementById('username').value;
			var pass= document.getElementById('pass').value;
			var confpass= document.getElementById('confpass').value;
			var mobile= document.getElementById('mobile').value;
			var email= document.getElementById('email').value;
			var detail= document.getElementById('details').value;
			
			if(user == "")
			{
				document.getElementById('usern').innerHTML="***Please fill the username field";
				
				return false;
			}
			
			if((user.length<=2) || (user.length>20))
			{
				document.getElementById('usern').innerHTML="*** Rule: User Name must be greater than 2 character and less than 20 character !";
				
				return false;
			}
			
			if(!isNaN(user))
			{
				document.getElementById('usern').innerHTML="***Only character please";
				return false;
			}
			
			
			if(pass == "")
			{
				document.getElementById('passw').innerHTML="***Please fill the password field";
				
				return false;
			}
			
			if((pass.length<=6) || (pass.length>20))
			{
				document.getElementById('passw').innerHTML="*** Rule: Password must be greater than 5 character and less than 20 character !";
				
				return false;
			}
			
			if(pass!=confpass)
			{
				document.getElementById('passw').innerHTML="*** Rule: Password are not match!";
				
				return false;
			
			}
			
			if(confpass == "")
			{
				document.getElementById('confpassw').innerHTML="***Please fill the confirm password field";
				
				return false;
			}
			
			if(mobile == "")
			{
				document.getElementById('mobilen').innerHTML="***Please fill the mobile number field";
				
				return false;
			}
			
			if(isNaN(mobile))
			{
				document.getElementById('mobilen').innerHTML="***Only number please";
				return false;
			}
			
			if((mobile.length!=11))
			{
				document.getElementById('mobilen').innerHTML="*** Rule: Must be 10 digit !";
				
				return false;
			}

			if(email == "")
			{
				document.getElementById('emails').innerHTML="***Please fill the email id field";
				
				return false;
			}
			
			if(email.indexOf('@') <=0)
			{
				document.getElementById('emails').innerHTML="***Incorrect email id !";
				
				return false;
			}
			
			if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
			{
				document.getElementById('emails').innerHTML="***Incorrect email id !";
				
				return false;
			}
			
			
		}
	
	
	</script>
	
	
	
	

</body>
</html>