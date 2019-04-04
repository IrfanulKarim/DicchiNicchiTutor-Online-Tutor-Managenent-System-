<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library --><script type="text/javascript" src="IrfanulJS.js"></script>
</head>

<body>

<?php 

include 'DB.php';


$query = "select * from dicchinicchitutor.teacherrequirement;";
				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result))
					{
						
					echo "<form action='delete.php' method='post' >
                        <input type='submit' name='delete' value='delete'>
                        <input type='hidden' name='id' value='".$row['Trid']."'/>
                        </form>";

						echo '<h3>'.$row['Tittle'].'  </h3>';

						echo '<h6>Place: '.$row['Place'].'  </h6>';
						echo '<h6>Subject: '.$row['Subject'].'  </h6>';
						echo '<h6>Class: '.$row['Class'].'  </h6>';
						echo '<h6>Medium: '.$row['Medium'].'  </h6>';
						echo '<h6>Salary: '.$row['Salary'].'  </h6>';
						echo '<h6>Details: '.$row['Details'].'  </h6>';

						echo "<hr>";
					}
				}




 ?>

</body>