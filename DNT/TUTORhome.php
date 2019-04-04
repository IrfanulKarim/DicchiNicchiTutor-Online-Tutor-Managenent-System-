<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="search.js"></script>

	<!-- jQuery library --><script type="text/javascript" src="IrfanulJS.js"></script>
</head>
<body>
	<h1 class="text-success text-center" style="font-size: 80px";> WELCOME TUTOR !<h1>

		<div  class="col-lg-8 m-auto d-block">

		
		<input type="text" name="" id="search" onkeyup="loadData()" value=""><br><br><br>
		<div id="result">
 
 
 		</div>
		

		<a href="TUTORviewprofile.php" style="text-decoration: underline">View Profile </a>

		<a href="TUTOReditprofile.php" style="color: blue">Edit Profile </a>

		<button  onclick="window.location.href='login.php'">Logout</button>

		</div>

		<?php

			include "showTution.php";
		?>


		</iframe>


</body>





<?php



?>