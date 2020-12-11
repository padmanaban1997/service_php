<?php 
session_start();
require_once('config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select c_id,email,password,first_name from customer where email= '".$email."' and password='".$password."'";
		
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				
				$_SESSION["first_name"] = $row['c_id'];
				
				header("Location:index.php");
			}
			else
			{
	
			}
			
		}
	}
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

    <title> Sign In</title>
    
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
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- Timeline -->
    <link rel="stylesheet" href="assets/vendor/timeline/timeline.css"> 
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet"> 
    <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
    
</head>

<script type="text/javascript">
$(document).ready(function () {
    $('#signForm').validate({ // initialize the plugin
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
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

  
<!-- /End Fables Navigation -->
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Signin</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="index.php" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sign In</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
               <img src="assets/custom/images/logo.png" alt="signin" class="img-fluid">
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-4 mb-lg-5">Sign In </p>
               <form id="signForm" action="" method="post">
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <input type="email" name="email"  class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email"> 
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" name="password"  class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password">
                      </div>
                    
                  </div> 
                  <button type="submit" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3">Sign in</button>
                  <a href="forgotpassword.php" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 m-lg-5 d-block">Forgot Password ?</a>
                  <p class="fables-forth-text-color">Dont have an account ?  <a href="register.php" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Register</a></p>
                </form>
          </div>
     </div>

</div>
      
<!-- /End page content -->
    
    
<!-- Start Footer 2 Background Image  -->

      
<!-- /End Footer 2 Background Image --> 


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  
    <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
        
		</body>
</html>