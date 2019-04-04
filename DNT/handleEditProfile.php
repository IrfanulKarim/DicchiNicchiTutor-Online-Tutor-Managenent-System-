<?php 

include('DB.php');


	$query = "UPDATE `teacher` set  `Name` ='".$_REQUEST['username']."', `Phone`= ".$_REQUEST['mobile'].", `Gender`='".$_REQUEST['gender']."', `Email` = '".$_REQUEST['email']."', `PreferedPlace`='".$_REQUEST['place']."', `PreferedSubject`='".$_REQUEST['subject']."', `PreferedClass`='".$_REQUEST['class']."', `PreferedMedium`='".$_REQUEST['medium']."', `ExpectedMinimumSalary`= ".$_REQUEST['salary'].", `University`='".$_REQUEST['university']."', `StudentDetails` = '".$_REQUEST['details']."' where `Phone`= ".$_REQUEST['mobile'].";";

	mysqli_query($conn,$query);



	echo "<h3>Successfully updated ....</h3>";

	include('TUTORhome.php');


	//echo $_POST['username'];

 ?>