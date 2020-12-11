<?php

//including the database connection file
require_once("../config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//selecting the row from table
$sql="update customer set is_active=1 where c_id = '".$id."'";
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
 }
 header("Location:customer.php"); 

?>
