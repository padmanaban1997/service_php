<!-- Start Top Header -->
<?php 
if(isset($_SESSION["first_name"]) && $_SESSION["first_name"]!="")
{            
    $customerId = $_SESSION['first_name'];
    $sqlCustomer="Select * from customer where c_id = '".$customerId."'";
    $resultCustomer=mysqli_query($conn,$sqlCustomer);
    $customer = mysqli_fetch_assoc($resultCustomer);
}                              
?>
<div class="fables-forth-background-color fables-top-header-signin">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-8 col-sm-2 col-lg-5 text-left">
               <p class="fables-third-text-color font-13"><span class="">Hello </span><?php echo isset($customer) ? $customer['first_name'] : ''; ?></p> 
            </div>
            <div class="col-12 col-sm-5 col-lg-4 text-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone :  (+91) 8460415017 </p>
            </div>
            <div class="col-12 col-sm-5 col-lg-3 text-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: aartienterprise@gmail.com</p>
            </div>
        </div>
    </div>
</div>
 
<!-- /End Top Header -->
