<?php
session_start();
if(!isset($_SESSION["a_name"])){
  header("Location:signin.php");
}
require_once("../config/connection.php");

?>

   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                     <a class="navbar-brand pl-0"><img src="assets/logo.png" style="width:170px;" ></a>
                          
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               
                   <a>
                 <!--  <img src="img/log.png"  /> -->
               </a>
               
             
              
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                     
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
				   
												
                        
                       <!-- BEGIN SUPPORT -->
                       
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                       	
					   
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             <!-- <img src="img/avatar1_small.jpg" alt=""> -->
							
                       
								<?php
								$id = $_SESSION['a_name'];
								$sql="Select * from admin where a_id = '".$id."'";
								$result=mysqli_query($conn,$sql);
								$row = mysqli_fetch_assoc($result);
								?>
                               <span class="username"><?php echo ucfirst($row['a_name']);?></span>
							   
                               <b class="caret"></b>
                           </a>
						   
                           <ul class="dropdown-menu extended logout">
                                          <li><a href="adminupdate.php"><i class="icon-user"></i>Edit Profile</a></li>
                 
                               <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
				   
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->