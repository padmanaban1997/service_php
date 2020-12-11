<?php 
session_start();
require_once("config\connection.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/logo.png">

    <title> Home  </title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- Video Background -->
    <link href="assets/vendor/video-background/video-background.css" rel="stylesheet"> 
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

<style>
.mySlides {display:none;}
</style>
     
</head>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>
    
 
<!-- Start Top Header -->
<?php include_once('partial/header.php');  ?>   
<!-- /End Top Header -->


<!-- Start Fables Navigation -->
<?php include_once('partial/navgation.php');  ?>
<!-- /End Fables Navigation --> 

<!--Video Section-->
    <div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="sec.jpg" style="width:280%">
  <img class="mySlides" src="sec.jpg" style="width:280%">
    </div>
	
	<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

<!--Video Section Ends Here--> 
    
     
<!-- Start page content --> 
				<div class="container">
           <div class="row">
              <div class="col-12">
                  <h2 class="font-35 font-weight-bold fables-main-text-color my-4 my-lg-5 text-center">Category</h2>
              </div>
               
              <?php

			$sql="select * from category c join gallery g where c.g_id=g.g_id";
			$result2=mysqli_query($conn,$sql);
			while($row2=mysqli_fetch_array($result2))
			{	
	
			?>
              <div class="col-12 col-md-4 mb-4 mb-md-5 wow fadeIn" data-wow-delay=""> 
                     <div class="image-container zoomIn-effect">
                          <a href="<?php echo "store_single.php?id=".$row2['id'] ?>"><img src="images/<?php echo $row2['path']?>" alt=""></a> 
                      </div>
                      
                      <h2 class="font-weight-bold font-20 my-2"><a href="<?php echo "store_single.php?id=".$row2['id'] ?>" class="fables-main-text-color fables-second-hover-color"><?php echo $row['name'];?></a></h2>
                       
                      <p class="fables-forth-text-color font-14">
                          <?php echo $row['des'];?>
                      </p>
                      <a href="<?php echo "store_single.php?id=".$row2['id'] ?>" class="btn fables-main-text-color fables-second-hover-color p-0 mt-2">
                          <span class="underline">See More</span>
                          <span class="fables-iconarrow-light ml-2"></span>
                      </a>  
              </div>
			  <?php
				}
				?>
           </div>
       </div>
		
		
       
           <div class="fables-testimonial fables-after-overlay fables-about-caption py-5 bg-rules" style="background-image: url(assets/custom/images/index2-overlay.jpg);">
           <div class="container">
               <div class="row">
                   <div class="position-relative z-index col-12 col-md-8 offset-md-2 text-center wow zoomIn" data-wow-duration="2s"> 
                           <h3 class=" white-color mb-3 font-25 font-weight-bold">We are the best service providing company ever!!</h3> 
                           <p class="font-weight-light fables-third-text-color">
                               
                           </p>
                           <a href="contactus1.php" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded  mt-4 py-2 px-5">Any Inquiry</a>   
                   </div> 
               </div>
               
           </div>
       </div>
       
       
       
       
       <div class="fables-testimonial fables-after-overlay py-4 py-md-5 my-4 my-lg-5 half-width-testimonial bg-rules">
            <div class="container z-index position-relative"> 
                <div class="row">
				
                    <div class="col-12 col-md-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".4s"> 
				
                           <p class="white-color font-25 mb-2" style="text-align:center;">FEEDBACK</p>
                           <h2 class="fables-second-text-color font-35 font-weight-bold" style="text-align:center;">others 
						   <span class="white-color" style="text-align:center;">are saying</span></h2>
						   <p class="fables-third-text-color mt-4 mb-4" style="text-align:center;">
                               We care, we take a personalized approach to each customer,<br> and our management team is never more than a phone call or email away. 
                           </p>
						                       <div class="owl-carousel owl-theme dots-0 nav-default" id="fables-testimonial-carousel">

                          <?php

							$sql="select * from feedback f join customer c join service s where f.c_id=c.c_id and f.s_id=s.s_id";
							$result=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($result))
							{	
	
								?>	
                                  
                              <div class="text-center"> 
                                   <div>
                                      <div class="image-container shine-effect d-inline-block rounded-circle">
                                          <img src="assets/custom/images/testimonial-img.png" alt="Fables Template" class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">  
                                      </div>
                                      <h3 class="font-14 semi-font  white-color mt-3"><?php echo $row['first_name'];?></h3>
                                      <h3 class="font-13 font-italic white-color mt-2 mb-4"><?php echo $row['s_name']?></h3>
                                   </div>
                                   <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div class="fables-testimonial-detail font-15 font-italic white-color position-relative"> 
                                            <?php echo $row['feedback'];?>
                                        </div>
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
               
            </div>
       </div>
        
        
      </div> 
<!-- /End page content -->
    
<!-- Start Footer 2 Background Image  -->
<?php include_once('partial/footer.php');  ?>
<!-- /End Footer 2 Background Image -->


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="assets/vendor/video-background/jquery.mb.YTPlayer.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/custom/js/custom.js"></script>  
<script>
     $(".player").mb_YTPlayer();
    
</script>
    
</body>
</html>