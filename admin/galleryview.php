<?php require_once("..\config\connection.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/gallery.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 06:58:08 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Gallery</title>
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

    <link rel="stylesheet" type="text/css" href="assets/metr-folio/css/metro-gallery.css" media="screen" />


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php include_once('partial/header.php');  ?> 
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
	  <?php include_once('partial/sidebar.php');  ?> 
      <!-- END SIDEBAR MENU -->
          </div>
      </div>
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
                     Gallery
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       
                       <li class="active">
                           Gallery
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
                            <h4><i class="icon-camera"></i> Gallery</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
						<div class="btn-group">
                                       <a href="galleryinsert.php"><button id="" class="btn green">
                                          Add New <i class="icon-plus"></i>
                                         </button></a>
                                     </div><br>
						
                            <div class="megaexamples">
                                <!--  FILTER STYLED  -->
                                
                                <div class="clear"></div>
                                <div class="metro-gallery">
                                    <!-- The GRID System -->
                                    <div class="metro-gal-container noborder norounded dark-bg-entries">
									
									<!-- A GALLERY ENTRY -->
									<?php
										$sql="select * from gallery;";
										$result = mysqli_query($conn,$sql);
	
										while($row=mysqli_fetch_array($result))
										{
										?>
                                    <div class="mega-entry cat-two cat-all" id="mega-entry-1" data-src="../Images/<?php echo $row['path']?>" data-width="780" data-height="585" data-lowsize="">

                                        <div class="mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-red">
                                            <!-- The Content Part with Hidden Overflow Container -->

                                            <div class="mega-title"><img src="../Images/<?php echo $row['path']?>" alt="" style="float: left; padding-right: 15px;"/>Good for Nothing</div>
                                            <div class="mega-date">Lorem ipsun dolor</div>
                                            

                                        </div>

                                        <!-- The Link Buttons -->
                                        <div class="mega-coverbuttons">
										<?php echo "<a href=\"gallerydelete.php?id=$row[g_id]\"><img src=\"image\delete1.jpg\" height=''/></a>" ?>
                                            
                                            <a class="fancybox" rel="group" href="../Images/<?php echo $row['path']?>" title="Good for Nothing"><div class="mega-view mega-red"></div></a>
                                        </div>

                                    </div>
									<?php
										}
									?>





                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <?php include_once('partial/footer.php');  ?>    <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>

   <!-- MEGAFOLIO PRO GALLERY JS FILES  -->
   <script type="text/javascript" src="assets/metr-folio/js/jquery.metro-gal.plugins.min.js"></script>
   <script type="text/javascript" src="assets/metr-folio/js/jquery.metro-gal.megafoliopro.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!-- END JAVASCRIPTS -->

   <script type="text/javascript">

       jQuery(document).ready(function() {

           var api=jQuery('.metro-gal-container').megafoliopro(
                   {
                       filterChangeAnimation:"pagebottom",			// fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
                       filterChangeSpeed:400,					// Speed of Transition
                       filterChangeRotate:99,					// If you ue scalerotate or rotate you can set the rotation (99 = random !!)
                       filterChangeScale:0.6,					// Scale Animation Endparameter
                       delay:20,
                       defaultWidth:980,
                       paddingHorizontal:10,
                       paddingVertical:10,
                       layoutarray:[9,11,5,3,7,12,4,6,13]		// Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type.
                   });

           // FANCY BOX ( LIVE BOX) WITH MEDIA SUPPORT
           jQuery(".fancybox").fancybox();

           // THE FILTER FUNCTION
           jQuery('.filter').click(function() {
               jQuery('.filter').each(function() { jQuery(this).removeClass("selected")});
               api.megafilter(jQuery(this).data('category'));
               jQuery(this).addClass("selected");
           });


       });

   </script>


</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/gallery.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:11 GMT -->
</html>