<?php
include("mycart.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buy.css">
    <title>BUY-NOW</title>
</head>
<body>   
<?php $abc = base64_decode($_SESSION['totalPay']);?>
<h2><----FILL UP THIS FORM TO FINALISE ORDER----></h2><br>
<form class="fo" method = "POST" action = "pgRedirect.php">
            <br>
            <input type = "hidden" name = "gtotal" value = "<?php echo strval($abc);?>">
            <input type = "hidden" name = "order_id" value = "<?php echo "ORDS" . rand(1000,99999999);?>">
            <b>Full Name:</b><br><input type="text" placeholder="Enter your name" required="required"> <br><br>
            <b> Email:</b><br><input type="email" name = "email" placeholder="Enter your email" required="required"><br><br>
            <b> Mobile:</b><br><input type="mobile" name = "mobile" placeholder="Enter your phone no" required="required"><br>
            <button class = "btn btn-primary btn-block">BUY NOW</button>
</form>
</body>
</html>