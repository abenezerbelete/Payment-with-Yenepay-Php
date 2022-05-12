<?php require './holder.php' ?>
<!Doctype html>
<html>
    <title>Payment</title>
    <body>
        <h2>Pay with Yenepay</h2>
        <a href="payment-with-express.php">Go try with Express</a><br><br>
        <form method="post" action="https://test.yenepay.com/">
            <input type="hidden" name="process" value="Cart">
            <input type="hidden" name="successUrl" value="http://localhost/Payment-with-Yenepay-Php/success.php">
            <input type="hidden" name="ipnUrl" value="http://localhost/Payment-with-Yenepay-Php/ipn.php">
            <input type="hidden" name="cancelUrl" value="http://localhost/Payment-with-Yenepay-Php/cancel.php">
            <input type="hidden" name="merchantId" value="SB1151">
            <input type="hidden" name="merchantOrderId" value="moi2">
            <input type="hidden" name="expiresAfter" value="24">
            <input type="hidden" name="totalItemsDeliveryFee" value="10">
            <input type="hidden" name="totalItemsDiscount" value="5">
            <input type="hidden" name="totalItemsHandlingFee" value="2.5">
            <input type="hidden" name="totalItemsTax1" value="300">
            <input type="hidden" name="totalItemsTax2" value="0">
            <?php  foreach ($cart as $key => $value) {
                echo "$key: ";
                foreach ($value as $key => $value1) {
                    echo "$key: $value1";
                    ?><br><?php
                }
            } ?>
            <button type="submit">Pay with cart</button>
        </form>
    </body>
</html>