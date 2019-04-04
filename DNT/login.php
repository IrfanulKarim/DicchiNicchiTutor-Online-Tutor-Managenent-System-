<?php
error_reporting(0);
session_destroy();


?>

<!DOCTYPE html>
<html>
<head>
<title></title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library --><script type="text/javascript" src="IrfanulJS.js"></script> 
</head>
<body>
	<div class="container">
		<h1 class="text-success text-center" style="font-size: 30px";> Welcome in Dicchi Nicchi Tutor !<h1>

			<div  class="col-lg-8 m-auto d-block">
			<form action="handleLogin.php" method="POST" onsubmit="" >
			
			
				<label>Phone(Phone number shouldn't use before here !) </label>
				<input type="text" name="phone" class="form-control" id="phone" >
				<span id="usern" class="text-danger "></span>

				<label>Password</label>
				<input type="text" name="pass" class="form-control" id="pass" >
				<span id="passw" class="text-danger "></span>
				</br>
				<label>Type</label>
				<select name="type">
				  <option value="Student">Student</option>
				  <option value="Teacher">Teacher</option>
				  <option value="Admin">Admin</option>
				</select>

				</br>
				<input type="submit"  name="login" value="login" style="font-size: 30px" class="btn btn-success" autocomplete="off" >
				</br>
				<p>Yet not registered ?</p>
				<a href="TUTORregistration1.php">Registere Here as a Teacher </a></br>
				<a href="STUDENTregistration.php">Registere Here as a Student </a></br>
				<a href="ADMINregistration.php">Registere Here as a Admin </a></br>

			</form>
			


</body>

