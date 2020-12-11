<?php
//including the database connection file
require_once("config/connection.php");

	
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Card Validation Demo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="credit/css/styles.css">
    <link rel="stylesheet" type="text/css" href="credit/css/demo.css">
</head>

<body>
    <div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h1>Fill Payment Details</h1>
            </div>
            <div class="payment">
                <form method="post">
                    <div class="form-group owner">
                        <label for="owner">Owner</label>
                        <input type="text" class="form-control" id="owner" name="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="card">
                    </div>
                    <div class="form-group" id="expiration-date" name="exdate">
                        <label>Expiration Date</label>
                        <select >
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2019</option>
                            <option value="17"> 2020</option>
                            <option value="18"> 2021</option>
                            <option value="19"> 2022</option>
                            <option value="20"> 2023</option>
                            <option value="21"> 2024</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="credit/images/visa.jpg" id="visa">
                        <img src="credit/images/mastercard.jpg" id="mastercard">
                        
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                    </div>
					
					
                </form>
            </div>
        </div>

        
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="credit/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="credit/js/script.js"></script>
	<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["owner"])&& isset($_POST["card"]) && isset($_POST["exdate"]))
							{ 
								$cname=$_POST["owner"];
								$ccard=$_POST["card"];
								$cdate=$_POST["exdate"];
						
								if($cname!=''&& $ccard!=''&& $cdate!='' )
								{
									echo "value not null";
									$sql = "insert into payment(card,owner,exdate)
									values('".$cname."','".$ccard."','".$cdate."')";
									
													

									$result=mysqli_query($conn,$sql);
			
									if($result)
									{
										echo "		<script>
										('Payment Sucessfully Completed !');
										window.location='bookings.php';
												</script>";			}
			}
		}
		else
		{
			echo "value not set";
		}
	}
				  
				  ?>
</body>

</html>
