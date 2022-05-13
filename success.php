<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paid</title>
</head>
<body>
    <h3>You've successfully paid <?php echo $_GET["TotalAmount"] ?> Birr Thank you!</h3>
    <a href="payment-with-express.php">to pay again with express</a>
    <a href="payment-with-cart.php">to pay again with cart</a>
</body>
</html>