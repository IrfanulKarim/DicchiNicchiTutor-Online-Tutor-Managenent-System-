<?php


include 'DB.php';

session_start();

$name;
$phone;
$gender;
$email;
$place;
$subject;
$class;
$medium;
$salary;
$university;
$detail;


$query = "select * from dicchinicchitutor.teacher where phone=".$_SESSION['LoggedInID'].";";
				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						$name=$row['Name'];
						$phone= $row['Phone'];
						$gender= $row['Gender'];
						$email=$row['Email'];
						$place=$row['PreferedPlace'];
						$subject=$row['PreferedSubject'];
						$class=$row['PreferedClass'];
						$medium=$row['PreferedMedium'];
						$salary=$row['ExpectedMinimumSalary'];
						$university=$row['University'];
						$detail=$row['StudentDetails'];






					}
				}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script type="text/javascript" src="IrfanulJS.js"></script>
</head>
<body>



	<div class="container">
		<h1 class="text-success text-center" style="font-size: 80px";> My Profile ^_^ !<h1>
		
		<div  class="col-lg-8 m-auto d-block">
			
				<label>User Name</label>
				<input type="text" name="username" class="form-control" id="username" value="<?php echo $name ?>">
				<span id="usern" class="text-danger "></span>
			
			
				<label>Mobile Number</label>
				<input type="text" name="mobile" class="form-control" id="mobile" value="<?php echo $phone ?>">
				<span id="mobilen" class="text-danger "></span>
				
				<label>Gender</label>
				<input type="text" name="gender" class="form-control" id="gender" value="<?php echo $gender ?>" >
				<span id="genders" class="text-danger "></span>
			
			
				<label>Email</label>
				<input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
				<span id="emails" class="text-danger "></span>
			
			
			
				<label>Prefered Place</label>
				<input type="text" name="place" class="form-control" id="place" value="<?php echo $place ?>">
				<span id="pplace" class="text-danger "></span>
				
				<!-<input type="text" name="place" class="form-control" id="place" autocomplete="off">
				<!<span id="pplace" class="text-danger ">
				<!</span>
				
			
			
			
				<label>Prefered Subject</label>
				<input type="text" name="subject" class="form-control" id="subject" value="<?php echo $subject ?>">
				<span id="psubject" class="text-danger "></span>
			
			
			
				<label>Prefered Class</label>
				<input type="text" name="class" class="form-control" id="class" value="<?php echo $class ?>">
				<span id="pclass" class="text-danger "></span>
			
			
			
				<label>Prefered Medium</label>
				<input type="text" name="medium" class="form-control" id="medium" value="<?php echo $medium ?>">
				<span id="pmedium" class="text-danger "></span>
			
			
			
				<label>Expected Minimum Salary</label>
				<input type="text" name="salary" class="form-control" id="salary" value="<?php echo $salary ?>" >
				<span id="msalary" class="text-danger "></span>
			
				<label>University</label>
				<input type="text" name="university" class="form-control" id="university" value="<?php echo $university ?>">
				<span id="universitys" class="text-danger "></span>

				
				 
				</select>
			
			
			
				<label>Study Details</label>
				<input type="text" name="details" class="form-control" id="details" autocomplete="off" value="<?php echo $detail ?>">
				<span id="Sdetail" class="text-danger "></span>
			
			
			
			
			
			
		</div>
		
	</div>
	