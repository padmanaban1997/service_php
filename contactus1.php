<?php
Session_start(); 
require_once('config/connection.php');
?>



                
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Contact </title>
    
    
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
     <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
    
</head>
<script type="text/javascript">
$(document).ready(function () {
    $('#inquiryform').validate({ // initialize the plugin
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
			  
			inquiry: {
                required: true,
                 maxlength: 100
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
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Inquiry</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="index.php" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inquiry</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
    <div class="container"> 
            <div class="row overflow-hidden">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <!--<div class="row">
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".5s">
                            <span class="fables-iconmap-icon fa-3x fables-main-text-color fables-second-hover-color"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                            <p class="font-14 fables-forth-text-color">
                            22, Sai Heaven, Raspan to Haridarshan Road,
							Nr. D Mart, Nikol, Ahmedabad-382350</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".8s">
                            <span class="fables-iconphone fa-3x fables-main-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Mail & Phone number</h2>
                            <p class="font-14 fables-forth-text-color">aartienterprise70@gmail.com</p>
                            <p class="font-14 fables-forth-text-color">9574550044</p>

                        </div>
                        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay="1.1s">
                            <span class="fables-iconshare-icon fa-3x fables-main-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Stay In Touch</h2>
                            <ul class="nav fables-contact-social-links"> 
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                                <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>-->
                    <div class="mt-0 mb-5 my-md-5"> 
                        <h3 class="font-35 font-weight-bold fables-main-text-color text-center">Post An Inquiry</h3>
                        <p class="mt-3 fables-forth-text-color  text-center"></p>

                    </div> 
                    
                    
                </div>
            </div>        
               
        <div class="row mb-4 mb-md-5 overflow-hidden">
                <div class="col-12 col-sm-6 wow fadeInLeft">
                    <form class="" id="inquiryform" method="post">
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3"  placeholder="Name" name="name">   
                      </div>
                      <div class="form-group"> 
                        <input type="email" class="form-control rounded-0 p-3" placeholder="Email" name="email">
                      </div>
                      <div class="form-group"> 
                        <input type="number" class="form-control rounded-0 p-3" placeholder="Contact no" name="contact">   
                      </div>
                      <div class="form-group"> 
                          <textarea class="form-control rounded-0 p-3" placeholder="Message" rows="3" name="inquiry"></textarea>
                      </div>                       
                      <button type="submit" class="btn fables-second-background-color rounded-0 text-white btn-block p-3">Send</button>

				   </form>
				   <?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["name"])&& isset($_POST["email"])&& isset($_POST["contact"])&& isset($_POST["inquiry"]))
							{ 
								$iname=$_POST["name"];
								$iemail=$_POST["email"];
								$icontact=$_POST["contact"];
								$inq=$_POST["inquiry"];
						
								if($iname!=''&& $iemail!='' && $icontact!=''&& $inq!='')
								{
									echo "value not null";
									$sql = "insert into inquiry(customer_name,email,contact_no,inquiry)
									values('".$iname."','".$iemail."','".$icontact."','".$inq."')";
									
													

									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "<meta http-equiv='refresh' content='0;index.php'>";
									}
			}
		}
		else
		{
			echo "value not set";
		}
	}
				  
				  ?> 


					
					
                </div>
                <div class="col-12 col-lg-6"> 
                   <div class="together-block">
                       <div class="fables-main-color-transparent p-4 p-lg-5 position-relative">
                           <img src="assets/custom/images/man-image.png" alt="" class="img-fluid together-abs-img wow fadeIn" >
                           <h2 class="white-color font-30 semi-font">Let's Grow</h2>
                           <h2 class="white-color font-30 semi-font">Together</h2>
                           <p class="white-color font-14 together-details my-3">
                                
                           </p>  
                           <h2 class="white-color font-30 semi-font">Ask us  <br> Your valuable  <br>Inquiry<br> for better <br>Understaning <br>Our Services.</h2>
							
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
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/custom/js/custom.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApW03tvAPTXWd1RHJBF2Up3iJMVu1wHi4&callback=JaMap"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
    
</body>
</html>