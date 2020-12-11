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
    <meta charset="utf-8" />
    <title>Update form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/style-default.css" rel="stylesheet" id="style_color" />

    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

    <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
    
</head>

<script type="text/javascript">
$(document).ready(function () {
    $('#adminform').validate({ // initialize the plugin
        rules: {
           email: {
                required: true,
                email: true
            },
           name: {
                required: true,
				maxlength: 10,
				number: false,
            },
			  
			password: {
                required: true,
                 maxlength: 8
            },
			contact: {
                required: true,
                 minlength: 10, 
				 maxlength: 10,
				 number: true,
            }
			
		}
    });
});
</script>


<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php include_once('partial/header.php');  ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <!-- END SIDEBAR -->
	  <?php include_once('partial/sidebar.php');  ?>
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Admin Insert
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       
                       <li class="active">
                           Insert form
                       </li>
                    
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Admin Insert</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action=""id="adminform" method="post" name="f1">
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
									<input type="text" class="span6" placeholder="Name" name="name" >
     
                                </div>
                            </div>
							  <div class="control-group">
                                <label class="control-label">email</label>
                                <div class="controls">
									<input type="email" class="span6" placeholder="email" name="email" >
     
                                </div>
                            </div>
							
							<div class="control-group">
                                <label class="control-label">password</label>
                                <div class="controls">
									<input type="password" class="span6" placeholder="password" name="password" >
     
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
                                <a href='admin.php'><button type="button" class="btn">Cancel</button></a>
                            </div>
							
							<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["name"])&& isset($_POST["email"])&& isset($_POST["password"])&& isset($_POST["contact"]))
							{ 
								$cname=$_POST["name"];
								$cemail=$_POST["email"];
								$cpass=$_POST["password"];
								$ccon=$_POST["contact"];
						
								if($cname!=''&& $cemail!=''&& $cpass!=''&& $ccon!='')
								{
									echo "value not null";
									$sql = "insert into admin(a_name,email,password,contact_no)
									values('".$cname."','".$cemail."','".$cpass."','".$ccon."')";
									
											

									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "<meta http-equiv='refresh' content='0;admin.php'>";
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
   
   
   
   
   
   <?php include_once('partial/footer.php');  ?>
   
   
   
   
   
   
   
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
<script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
 


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