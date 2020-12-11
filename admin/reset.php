<?php require_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select id,name,password from admin where email = '".$email."' and password='".$password."' ";
			
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) == 1)
			{
					
				$newpassword = $_POST["newpassword"];
				$confirmpassword =$_POST["repassword"];
				
				if($newpassword == $confirmpassword)
				{
					echo $query1 = "update admin set Password = '".$newpassword."' where email='".$email."'" ;
					
					$resulemail = mysqli_query($conn,$query1);
					if($resulemail)
					{
						header("Location:login.php");
					}
				}
				else
				{
					echo "Incorrect Password";
				}
				
			}

			else
			{
				echo "Enter valid Email and Password ";
			}
			
	}
}
}
?>










<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Reset form</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="#" method="post" name="f1">
                            <div class="control-group">
                                <label class="control-label">Email address</label>
                                <div class="controls">
                                    <input type="email" class="span6 " id="exampleInputEmail1" placeholder="email" name="email"> 
                                    
                                </div>
								
								<div class="control-group">
                                <label class="control-label">old password</label>
                                <div class="controls">
                                    <input type="password" class="span6 " id="exampleInputEmail1" placeholder=" old password" name="password"> 
                                    
                                </div>
								
								<div class="control-group">
                                <label class="control-label">new password</label>
                                <div class="controls">
                                    <input type="password" class="span6 " id="exampleInputEmail1" placeholder="new password" name="newpassword"> 
                                    
                                </div>
								<div class="control-group">
                                <label class="control-label">confirm password</label>
                                <div class="controls">
                                    <input type="password" class="span6 " id="exampleInputEmail1" placeholder="confirm password" name="repassword"> 
                                    
                                </div>
                            </div>
                            
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Submit</button>
                                
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
          
   <!-- BEGIN FOOTER -->
   
   
   
   
   

   
   
   
   
   
   
   
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->

   <script src="js/jquery-1.8.2.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <script src="../../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>



   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page-->
   <script src="js/form-component.js"></script>
  <!-- END JAVASCRIPTS -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>


</body>

<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:39 GMT -->
</html>