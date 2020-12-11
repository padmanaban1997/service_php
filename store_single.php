<?php 
Session_start();
require_once("config\connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//selecting the row from table
$sql="Select * from category where id = '".$id."'";
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Services</title>
    
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
 
     
<!-- Start Header -->
<?php

			$sql="select * from category where id='".$id."'";
			$result=mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			?>
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color"><?php echo ucfirst($row['name']);?></h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="index.php" class="fables-second-text-color">Home</a></li>

            <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst($row['name']);?></li>
          </ol>
        </nav> 
    </div> 
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->

<div class="container"> 

     
     <div class="row mb-0 mb-md-5">
	
           <div class="col-12">
               <h2 class="fables-forth-text-color fables-light-background-color my-3 my-md-5 py-3 text-center font-20 semi-font"><?php echo ucfirst($row['name']);?></h2>
           </div>
		  
		   
		     <?php

$sql="select * from service s join category c join gallery g where s.id=c.id and s.g_id=g.g_id and s.id='".$id."'";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{	
	
 ?>
 
           <div class="col-12 col-sm-6 col-lg-3 fables-product-block" >
               <div class="card rounded-0 mb-4">
                   <div class="row">
                       <div class="fables-product-img col-12">
                          <img class="card-img-top rounded-0" src="images/<?php echo $row['path']?>" alt="">
                          
                      </div>
                      <div class="card-body col-12">
                        <h5 class="card-title mx-3">
                            <a href="#" class="fables-main-text-color font-16 semi-font fables-second-hover-color"> <?php echo $row['s_name'];?> </a>
                        </h5>
                        <p class="card-text fables-fifth-text-color font-15 mx-3"><?php echo $row['description'];?></p>
                        <p class="font-15 font-weight-bold fables-second-text-color my-2 mx-3"> <?php echo "Rs.&nbsp".$row['price'];?>&nbsp &nbsp<?php if($_GET['id']==8){echo"Per Km.";} else {echo "Per Person.";}?></p>
                        <p class="fables-product-info"><a href="<?php echo "book.php?s_id=".$row['s_id'] ?>" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 p-2 px-4">
                        <span class="fables-iconcart"></span> 
                        <span class="fables-btn-value">Book Now</span></a></p>
                      </div>
                   </div>
                </div>
           </div>
		   
		    <?php
				}
		?>
           

           </div>
		  
</div>


			  
<!-- /End page content -->
    
<!-- Start Footer 2 Background Image  -->
<?php include_once('partial/footer.php');  ?>
<!-- /End Footer 2 Background Image -->


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/range-slider/range-slider.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/custom/js/custom.js"></script>  
    
</body>
</html>