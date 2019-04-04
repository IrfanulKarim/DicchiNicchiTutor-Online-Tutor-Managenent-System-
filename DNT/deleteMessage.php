<?php
require "DB.php";

function deleteMessage($id){

    $sql= "delete from dicchinicchitutor.teacherrequirement where Trid=".$id;
    if(mysqli_query($conn, $sql)){
        return $sql;
    }else{
        return "abc";
    }
}
?>