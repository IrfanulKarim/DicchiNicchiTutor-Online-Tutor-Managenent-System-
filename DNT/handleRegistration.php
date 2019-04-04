<?php 

include('DB.php');

	/*$query = "INSERT INTO  dicchinicchitutor.teacher ( Name, Phone, Gender, Email, PreferedPlace, PreferedSubject, PreferedClass, PreferedMedium, ExpectedMinimumSalary, University, StudentDetails) VALUES ('".$_REQUEST['username']."', '".$_REQUEST['mobile']."', '".$_REQUEST['email']."','".$_REQUEST['place']."','".$_REQUEST['subject']."','".$_REQUEST['class']."','".$_REQUEST['medium']."','".$_REQUEST['salary']."','".$_REQUEST['university']."','".$_REQUEST['details']."');";*/

	$query = "INSERT INTO `teacher` (`Tid`, `Name`, `Phone`, `Gender`, `Email`, `PreferedPlace`, `PreferedSubject`, `PreferedClass`, `PreferedMedium`, `ExpectedMinimumSalary`, `University`, `StudentDetails`) VALUES (NULL, '".$_REQUEST['username']."', ".$_REQUEST['mobile'].", '".$_REQUEST['gender']."', '".$_REQUEST['email']."', '".$_REQUEST['place']."', '".$_REQUEST['subject']."', '".$_REQUEST['class']."', '".$_REQUEST['medium']."', ".$_REQUEST['salary'].", '".$_REQUEST['university']."', '".$_REQUEST['details']."');";

	mysqli_query($conn,$query);


	$query1 = "INSERT INTO `user` (`Uid`, `Password`, `Type`) VALUES ('".$_REQUEST['mobile']."', '".$_REQUEST['pass']."', 'Teacher');";

	mysqli_query($conn,$query1);

	echo "<h3>Successfully submitted ".$_REQUEST['username']."....</h3>";

	include('Login.php');


	//echo $_POST['username'];

 ?>