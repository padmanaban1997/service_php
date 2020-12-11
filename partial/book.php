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
    <link rel="" href="">

    <title> book</title>
    
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
    <link href="assets/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
     <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/jquery-validation/jquery.validate.min.js"></script>    
    
</head>

<script type="text/javascript">
$(document).ready(function () {
	

  $('#qty').on('input',function(){

    $('#amount').val($('#qty').val()*$('#price').val());

  });

  $('#sdate').datetimepicker({
    format: 'dd-mm-yyyy hh:ii'
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
         <h2 class="fables-page-title fables-second-border-color">Booking</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Booking</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
               <center><img src="assets/custom/images/logo.png " alt="signin"  class="img-fluid"></center>
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-5 text-center">Booking Details</p>
               <form id="registerForm" action="" method="post" >
                  <div class="form-row form-group">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                      <?php
      $cid = $_SESSION["first_name"];
      $sql="Select * from customer where c_id = '".$cid."'";
      $result=mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      ?>
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <p class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" ><?php echo ucfirst($row['first_name']." ".$row['last_name']);?></p>
                        </div>
                    </div>
                   
                  </div>
				  <div class="form-group"> 
                      <div class="input-icon">
                        <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
						
                         <p class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input">
                           <?php echo $row['address']?>
                         </p>
                      </div>
                    
                  </div>

				  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <p class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"><?php echo $row['contact_no']?></p>
                      </div>
                    
                  </div>
                 
				  
				 
				  
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <p  class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input">
                          <?php echo $row['email']?> 
                        </p>
                      </div>
                    
                  </div>
                  <?php
      $sid = $_GET["s_id"];
      $sql="Select * from service where s_id = '".$sid."'";
      $results=mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($results);
      ?>
				   <div class="form-group"> 
                      <div class="input-icon">
                        <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
						
                         <p class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input">
                          <?php echo $rows['s_name']?></p>
                      </div>
                    
                  </div>
				  <div class="form-group"> 
                      <div class="input-icon">
                        <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
						
                         <p class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input">
                           <?php echo $rows['price']?></p>
                         </p>
                         <input type="hidden" name="price" id="price" value="<?php echo $rows['price']?>" />
                      </div>
                    
                  </div>
	
				  <div class="form-group"> 
                      <div class="input-icon">
                        <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
						
                         <input type="<?php if(($rows['id']==8)){echo "hidden";} else {echo "number";}?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" min="1" max="" placeholder="HOW MANY PERSON YOU WANT??" name="per" id="qty">
                      </div>
                    
                  </div>
				  <div class="form-group"> 
                      <div class="input-icon">
                        <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
						
                         <input type="<?php if(($rows['id']==8)){echo "hidden";} else {echo "number";}?>" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Total amount" name="amount" id="amount">
                      </div>
                    
					</div> 
					
					
					

				 <div class="form-row form-group">
                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <input type="text" id="sdate" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" name="sdate">
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-6">
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <input type="time" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  name="stime">
                        </div>
                    </div> -->
                  </div>
				  <br>
                  <button type="submit" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3">Book</button>
                  <a href="" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 mb-lg-5 d-block"></a>
                 </form>
				   <?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
              if (isset($_SESSION["first_name"]) && isset($_GET["s_id"]) && isset($_POST["sdate"]) && isset($_POST["amount"])&& isset($_POST["per"]))
							{ 
							$cusid=$_SESSION["first_name"];
								$serid=$_GET["s_id"];
								$date=$_POST["sdate"];
                $timestamp = date('Y-m-d H:i:s', strtotime($date));  

								$tamount=$_POST["amount"];
								$qy=$_POST["per"];

								
									
								if($cusid!=''&& $serid!='' &&  $timestamp !=''&& $tamount!=''&& $qy!='')
								{
									//echo "value not null";
									$sql = "insert into bookings(c_id,s_id,b_date,total_amount,quantity)
									values('".$cusid."','".$serid."','". $timestamp ."','".$tamount."','".$qy."')";
				
									
									
									$result=mysqli_query($conn,$sql);
									if ($result) 
									{
		
									echo "		<script>
										alert('Booking Sucessfully Completed !');
										window.location='mybooking.php';
												</script>";
	
	
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
     </div>

</div>
      
<!-- /End page content -->
    
    
<!-- Start Footer 2 Background Image  -->
<?php include_once('partial/footer.php');  ?>   
    
<!-- /End Footer 2 Background Image -->


<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="assets/custom/js/custom.js"></script>  
<script src="js/jquery-1.8.3.min.js"></script>
<script src="assets/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/datetimepicker/bootstrap-datetimepicker.min.js"></script>    
       
</body>

</html>