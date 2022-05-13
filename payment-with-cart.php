<?php require './cart.php' ?>
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
            <?php  foreach ($cartItems as $key1 => $value) {
                foreach ($value as $key => $value1) {
                    ?><input type="hidden" name="Items[<?php echo $key1,'].',$key ?>" value="<?php echo $value1 ?>"><?php
                }
            } ?>
            <input type="hidden" name="totalItemsDeliveryFee" value="0">
            <input type="hidden" name="totalItemsDiscount" value="0">
            <input type="hidden" name="totalItemsHandlingFee" value="20.5">
            <input type="hidden" name="totalItemsTax1" value="135.6675">
            <input type="hidden" name="totalItemsTax2" value="0">
            <button type="submit">Pay with cart</button>
        </form>
    </body>
</html>