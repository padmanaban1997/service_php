<?php


unset($_SESSION["a_name"]);
session_destroy();

header("Location:signin.php");
exit;

?>	