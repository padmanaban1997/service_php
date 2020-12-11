<?php require_once("..\config\connection.php");?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:46 GMT -->


<head>
   <meta charset="utf-8" />
   <title>Feedback Table</title>
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
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
    <!-- Data table css  -->
   <link rel="stylesheet" href="assets/data-tables/jquery.dataTables.min.css" />
   <link rel="stylesheet" href="assets/data-tables/buttons.dataTables.min.css" />

   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />




<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php include_once('partial/header.php');  ?>
  <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
	    
	<?php include_once('partial/sidebar.php');  ?>
      <!-- END SIDEBAR -->
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
                     Feedback Table
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Feedback
                       </li>
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Feedback </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                     <thead>
                                     <tr>
										 <th>Customer Name</th>
                                         <th>Email</th>
										 <th>Contact No.</th>
                                         <th>Service Name</th>
										 <th>Feedback</th>
										 <th>Create Date</th>
										 <th>Action</th>

                                     </thead>
                                     <tbody>
                                      <?php
						//$sql="Select * from feedback";
							//$sql="Select * from feedback f ,customer c,service s where f.c_id=c.c_id and f.s_id=s.s_id"; 
							$sql="select * from feedback f join customer c join service s where f.c_id=c.c_id and f.s_id=s.s_id";
	$result=mysqli_query($conn,$sql);
	
	
	
	if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
	
	
	 while($row = mysqli_fetch_array($result))
	 {
		 echo "<tr>";
		 
	     echo "<td>" . $row['first_name'] . "</td>";
		 echo "<td>" . $row['email'] . "</td>";
		 echo "<td>" . $row['contact_no'] . "</td>";
		 echo "<td>" . $row['s_name'] . "</td>";
		 echo "<td>" . $row['feedback'] . "</td>";
		 echo "<td>" . $row['date'] . "</td>";
		 
		  
		  
		 echo "<td>
		 <a href=\"feedbackdelete.php?id=$row[f_id]\"><img src=\"image\delete.jpg\" height=''/></a>
		 </td>";
		 echo "</tr>";
	 }

?>
					
                                   
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <?php include_once('partial/footer.php') ?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
    <script src="assets/data-tables/jquery-3.3.1.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="assets/data-tables/jquery.dataTables.min.js"></script>
   <script src="assets/data-tables/dataTables.buttons.min.js"></script>
   <script src="assets/data-tables/jszip.min.js"></script>
   <script src="assets/data-tables/pdfmake.min.js"></script>
   <script src="assets/data-tables/vfs_fonts.js"></script>
   <script src="assets/data-tables/buttons.html5.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:47 GMT -->
</html>