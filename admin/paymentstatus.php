<?php

//including the database connection file
require_once("../config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//selecting the row from table
$sql="update bookings set p_status=1 where b_id = '".$id."'";
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
 }
 header("Location:bookings.php"); 

?>
