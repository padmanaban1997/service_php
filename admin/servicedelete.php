<?php


//including the database connection file
require_once("../config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//deleting the row from table
$sql = "DELETE FROM service WHERE s_id='".$id."'";
$result=mysqli_query($conn,$sql);
}

 header("Location:service.php"); 

?>