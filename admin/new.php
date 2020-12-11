<?php
//including the database connection file
require_once("../config/connection.php");

	
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:14 GMT -->
<head>
    
</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
                            <form action=""id="adminform" method="post" name="f1">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
									<input type="text" class="span6" placeholder="Name" name="name" >
     
                                </div>
                            </div>
							  <div class="control-group">
                                <label class="control-label">address</label>
                                <div class="controls">
									<input type="text" class="span6" placeholder="address" name="address" >
     
                                </div>
                            </div>
							
							
							<div class="control-group">
                                <label class="control-label">contact</label>
                                <div class="controls">
									<input type="number" class="span6" placeholder="contact" name="contact" >
     
                                </div>
                            </div>
							
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
                                <a href='customer.php'><button type="button" class="btn">Cancel</button></a>
                            </div>
							
							<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["name"])&& isset($_POST["address"])&& isset($_POST["contact"]))
							{ 
								$cname=$_POST["name"];
								$cemail=$_POST["address"];
					
								$ccon=$_POST["contact"];
						
								if($cname!=''&& $cemail!=''&& $ccon!='')
								{
									echo "value not null";
									$sql = "insert into customer(c_name,address,contact)
									values('".$cname."','".$cemail."','".$ccon."')";
									
											

									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										//echo "<meta http-equiv='refresh' content='0'>";
									}
			}
		}
		else
		{
			echo "value not set";
		}
	}
				  
				  ?>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
          
   <!-- BEGIN FOOTER -->
   
   
   
   
   
  
</body>


<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:39 GMT -->
</html>