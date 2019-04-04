<?php

    error_reporting(0);
    require "DB.php";
    $name= $_POST['key'];
    
	$sql = "select Tittle,Place,Subject,Class,Medium,Salary,Details from dicchinicchitutor.teacherrequirement where Place like '".$name."%'";
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	echo "<table>
	<td> ".$row['Place']."</td>
	<td> ".$row['Subject']."</td>
	<td> ".$row['Class']."</td>
    <td> ".$row['Medium']."</td>
    <td> ".$row['Salary']."</td>
    <td> ".$row['Details']."</td>
	</table>";
?>