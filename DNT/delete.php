<?php
    require "deleteMessage.php";
    
    $dbServerName = "localhost";
    $dbUserName ="root";
    $dbPassword = "";
    $dbName = "dicchinicchitutor";

    $conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

	if(isset($_POST['delete']))
    {
        
        $id = $_POST['id'];
        $sql= "delete from dicchinicchitutor.teacherrequirement where Trid=".$id;
        
        if(mysqli_query($conn, $sql)){
            header("location: showTution.php");
        }else{
            header("location: showTution.php?status=error");
        }

	}else{
	   echo "invalid request";
	}
?>