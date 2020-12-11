<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 06:57:21 GMT -->
<head>
   <meta charset="utf-8" />
   <title>aarti enterprise</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="fixed-top">

   
<?php include_once('partial/header.php');  ?>   
   
   
   
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      
	  
	<?php include_once('partial/sidebar.php');  ?>     
	  
	  
	  
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            
			  <h3 class="page-title">
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>

                       <li class="active">
                           Dashboard
                       </li>
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                 
			
             <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <!--BEGIN METRO STATES-->
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="customer.php">
                            <i class="icon-user"></i>
							<?php $sql="Select count(*) as total from customer";
									$result=mysqli_query($conn,$sql);
									$row = mysqli_fetch_array($result);?>
                            <div class="info"><?php echo $row['total']?></div>
							
                            <div class="status">Total User</div>
                        </a>
                    </div>
					
					
					<div class="metro-nav-block nav-light-purple">
                        <a data-original-title="" href="bookings.php">
                            <i class="icon-shopping-cart"></i>
							<?php $sql="Select count(*) as total from bookings";
									$result1=mysqli_query($conn,$sql);
									$row1 = mysqli_fetch_array($result1);?>
                            <div class="info"><?php echo $row1['total']?></div>
                            <div class="status">Bookings</div>
                        </a>
                    </div>
                    
                    <div class="metro-nav-block nav-block-yellow">
                        <a data-original-title="" href="feedback.php">
                            <i class="icon-comments-alt"></i>
							<?php $sql="Select count(*) as total from feedback";
									$result2=mysqli_query($conn,$sql);
									$row2 = mysqli_fetch_array($result2);?>
                            
                            <div class="info"><?php echo $row2['total']?> </div>
                            <div class="status">Feedback</div>
                        </a>
                    </div>
                                     
				
                    <div class="metro-nav-block nav-light-green">
                        <a data-original-title="" href="inquiry.php">
                            <i class="icon-envelope"></i>
							<?php $sql="Select count(*) as total from inquiry";
									$result3=mysqli_query($conn,$sql);
									$row3 = mysqli_fetch_array($result3);?>
                            
                            <div class="info"><?php echo $row3['total']?> </div>
                            <div class="status">Inquiry</div>
                        </a>
                    </div>
                   
                
                <div class="space20"></div>
                <!--END METRO STATES-->
            </div>
            
            
            <div class="row-fluid">
                 <div class="span6">
                     <!-- BEGIN NOTIFICATIONS PORTLET-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-bell"></i> Inquiry </h4>
                           <span class="tools">
                               <a href="javascript:;" class="icon-chevron-down"></a>
                               <a href="javascript:;" class="icon-remove"></a>
                           </span>
                         </div>
                         <div class="widget-body">
                             <ul class="item-list scroller padding"  style="overflow: hidden; width: auto; height: 320px;" data-always-visible="1">
                                 
								 
								 <?php $sql="Select * from inquiry";
								   $result2=mysqli_query($conn,$sql);
										while($row2=mysqli_fetch_array($result2))
											{	
	
												?>

								<li>
                                     <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                                     <span><?php echo $row2['inquiry']?></span>
                                     <div class="pull-right">
                                         <span class="small italic "></span>

                                     </div>
                                 </li>
								 
								  <?php
									}
									?>
           
                           
                             </ul>
                             <div class="space10"></div>
                             <a href="inquiry.php" class="pull-right">View all Inquiry</a>
                             <div class="clearfix no-top-space no-bottom-space"></div>
                         </div>
                     </div>
                     <!-- END NOTIFICATIONS PORTLET-->
                 </div>
                 <div class="span6">
                     <!-- BEGIN CHAT PORTLET-->
                     <div class="widget red">
                         <div class="widget-title">
                             <h4><i class="icon-comments-alt"></i>RECENT 5 Feedback</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                         </div>
                         <div class="widget-body">
                             <div class="timeline-messages">
                                 <!-- Comment -->
								 <?php
									  //$sql="SELECT * FROM `feedback` order by date DESC LIMIT 5 ";
									  $sql="select * from feedback f join customer c join service s where f.c_id=c.c_id and f.s_id=s.s_id order by date DESC LIMIT 5";
								   $result2=mysqli_query($conn,$sql);
										while($row2=mysqli_fetch_array($result2))
											{	
	
												?>
                                 <div class="msg-time-chat">
								 
								 <div class="message-body msg-in">
								

                                     <a class="message-img"><img alt="" src="image/user.jpg" class="avatar"></a>
                                     
                                         <span class="arrow"></span>
                                         <div class="text">
                                             <p class="attribution"><a href="#"><?php echo ucfirst($row2['first_name']." ".$row2['last_name']);?></a> For <a><?php echo $row2['s_name']?></a> at <?php echo $row2['create_date']?></p>
                                             <p><?php echo $row2['feedback']?></p>
                                         </div>
										 
								  
                                     </div>
									 
                                 </div>
								 <?php
									}
									?>
      
                                 <!-- Comment -->
                                 <!-- /comment -->

                                 <!-- Comment -->
                                 <!-- /comment -->

                                 <!-- Comment -->
                                 <!-- /comment -->
                             </div>
                            
                         </div>
                     </div>
                     <!-- END CHAT PORTLET-->
                 </div>
             </div>
            <div class="row-fluid">
                <div class="span7 responsive" data-tablet="span7 fix-margin" data-desktop="span7">
                    
                    <!-- BEGIN CALENDAR PORTLET-->
                    <!-- END CALENDAR PORTLET-->
                </div>
                <div class="span5">
                    <!-- BEGIN PROGRESS PORTLET-->
                    <!-- END PROGRESS PORTLET-->
                    <!-- BEGIN ALERTS PORTLET-->
                    
                    <!-- END ALERTS PORTLET-->
					
                </div>
            </div>

            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->



<?php include_once('partial/footer.php') ?>
 <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="assets/chart-master/Chart.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="js/easy-pie-chart.js"></script>
   <script src="js/sparkline-chart.js"></script>
   <script src="js/home-page-calender.js"></script>
   <!-- <script src="js/home-chartjs.js"></script> -->

   <!-- END JAVASCRIPTS -->
   
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 06:57:50 GMT -->
</html>