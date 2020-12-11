<?php 
session_start();
require_once('config/connection.php');
if(!isset($_SESSION["first_name"])){

  header("Location:signin.php");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="">

    <title>  My Booking  </title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
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
     
     
</head>
 

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


<div class="container py-3 py-lg-5"> 
    <div class="fables-pricing-table my-3"> 
         <h2 class="fables-second-text-color mb-4 mb-lg-5 font-weight-bold text-center text-lg-left">My Booking</h2> 
         <div class="row">
		 <?php
            $id =$_SESSION["first_name"];
			//$sql="select * from bookings where b_id='".$mid."'";
			$sql="select * from bookings b join  service s where  b.s_id=s.s_id and  c_id='".$id."'";
			
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result))
							{	
					?>

		 
            
            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4">
               <div class="table-border-light fables-second-hover-border">
                  <div class="fables-second-background-color py-4 position-relative">
                      <h2 class="white-color bold-font fables-third-after font-20 pt-4 pb-6"><?php echo $row['s_name'];?></h2>  
                      <div class="center-number-table border-2 fables-second-background-color white-color rounded-circle border-white position-absolute p-4">
                          <h2 class="bold-font font-35 mt-2 d-inline-block"><?php echo $row['price'];?><span class="table-badge white-color position-absolute font-13"></span></h2>
								<?php
      $sql1="Select * from service where s_id = ".$row['s_id'];
      $result1=mysqli_query($conn,$sql1);
      $row1 = mysqli_fetch_assoc($result1);
      ?>
						  <p class="white-color font-13"><?php if(($row1['id']==8)){echo "Per Km.";} else {echo "Per Person.";}?></p> 
                      </div>
                  </div> 
                  <div class="bg-white py-4 table-block">
                      <p class="fables-forth-text-color mt-6 mb-4 px-4 line-height-large font-15">
                       <b>Quantity:</b>&nbsp;<?php echo $row['quantity'];?></br>
                        <b>Total Amount:</b>&nbsp;<?php echo $row['total_amount']."&nbspRs.";?></br> 
                        <b>Booking Date:</b>&nbsp;<?php echo $row['b_date'];?></br>
                         <b>Booking Status:</b>&nbsp;<?php if(($row['b_status']==1)){echo "Accpted";?>
                          <?php }elseif (($row['b_status']==2)){echo "Rejected";?>
                      <?php }elseif (($row['b_status']==3)){echo "Accepted";?>
                           <?php }else {echo "Pending...";}?>
                         

                     </br>
                      </p>
					  
					  <?php if(($row['b_status']==2)){echo "cancelled";?>

					<?php }else if(($row['b_status']==3)){echo "cancelled";?>
					  
					  <a href="" class="">
					  <?php }else { echo "<a href=\"cancel.php?id1=$row[b_id]\">Cancel</a>";}?>
					</a>

                  </div>
               </div>

           </div>
		   
				<?php
				}
					?>                             
         </div>
         
    </div>  
</div>

<!-- Start Footer 2 Background Image  -->
<?php include_once('partial/footer.php');  ?>   

    
<!-- /End Footer 2 Background Image -->
           
    

<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/custom/js/jquery-data-to.js"></script>  
<script src="assets/custom/js/custom.js"></script>  
</body>
</html>