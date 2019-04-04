<?php

session_start();

include('DB.php');

$check =0;
	$query = "select * from dicchinicchitutor.user;";
				$result = mysqli_query($conn,$query);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck>0){
					while($row=mysqli_fetch_assoc($result)){
						if($row['Uid']==$_REQUEST['phone']){
							if($row['Password']==$_REQUEST['pass']){
								if($_REQUEST['type']=="Teacher"){

									header("Location: TUTORhome.php");
									$_SESSION['LoggedInID'] =$_REQUEST['phone'];
								}
								
								
							}
							else{
								echo 'Only the password is wrong...';
								//$check =1;
							}
						}
						else if($row['Password']==$_REQUEST['pass']){
							echo 'Wrong userName... Maybe the password is correct...';
							//$check =1;
						}
					
					//echo 'Both user name & password is wrong...'.$row['Uid'].$row['Password'];

					}
				}
				if($check==0){
					echo 'Both user name & password is wrong...';
				}



 ?>