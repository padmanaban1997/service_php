<?php


//including the database connection file
require_once("config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id1']))
{
$id = $_GET['id1'];
 
//deleting the row from table
$sql = "update bookings set b_status=3 where b_id =$id";
$result=mysqli_query($conn,$sql);
}
 if($result)
 {
 header("Location:mybooking.php"); 
 }
?>