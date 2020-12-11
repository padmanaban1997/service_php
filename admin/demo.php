
<?php

$no=$_POST["fnum"];

							
?>


<html>
<head> </head>

<body>

<table border="1px" >

 <form>
 
  <tr>
      <td> value is<?php echo $no; ?><input type="number" name="fnum"><?php echo $no; ?></td>
   </tr>
  <tr>
      <td> enter last name<input type="text" name="flast"></td>
   </tr>
   
  <tr>
      <td> enter name<input type="text" name="fname"></td>
   </tr>
  <tr>
      <td><input type="submit"></td>
   </tr>

</body>
</html>
