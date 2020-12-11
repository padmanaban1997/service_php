<?php 
require_once("config\connection.php");

?>
<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container">
               <div class="row">
                   <div class="col-20 col-md-15 col-lg-15 pr-md-2">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-1">
         
                            <a class="navbar-brand pl-0"><img src="assets/custom/images/logo.png" style="width:170px;" alt="Fables Template" class="fables-logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                                <ul class="navbar-nav mx-auto fables-nav">   
                                    <li>
                                        <a class="nav-link" href="index.php">
                                            Home
                                        </a>
                                        
                                    </li>

                                     
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Service
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav4">
										
                                          
                          <?php

$sql="select * from category ";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))
	{	
	
?>	

                                       <li><a class="dropdown-item" href="store_single.php?id=<?php echo $row['id']?>"><?php echo $row['name'];?></a></li> 
											<?php
	}
					?>              
                                        </ul>
										
                                    </li>
									               
 

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="feedback.php">
                                            Feedback
                                        </a>
                                       
                                    </li> 
                                    <li>
                                        <a class="nav-link" href="contactus1.php">
                                            Inquiry
                                        </a>
                                        
                                    </li>
								
							
									<?php 
									if(isset($_SESSION['first_name']))
									{
									?>
									
									<li>
                                        <a class="nav-link" href="mybooking.php">
                                            My Booking
                                        </a>
                                        
                                    </li>
									
									

										<li>
                                        <a class="nav-link"  href="editprofile.php">
                                            Edit Profile
                                        </a>
                                        
                                    </li>
									<li>
                                        <a class="nav-link" href="signout.php">
                                            Sign Out
                                        </a>
                                        
                                    </li>
									<?php }
									
									else
									{
										?>
										<li>
                                        <a class="nav-link" href="register.php">
                                            Register
                                        </a>
                                        
                                    </li>
										<li>
                                        <a class="nav-link" href="signin.php">
                                            Sign In
                                        </a>
                                        
                                    </li>
									<?php	
									}
									?>
									
					
  
  
                                </ul> 

                    </div>
                </nav>
                   </div>
                   			   
               </div>
    </div>
</div> 
<!-- /End Fables Navigation -->                                                           