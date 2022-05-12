<!Doctype html>
<html>
    <title>Payment</title>
    <body>
        <h2>Pay with Yenepay </h2>
        <a href="payment-with-cart.php">Go try with Cart</a><br><br>
        <form method="post" action="https://test.yenepay.com/">
            <input type="hidden" name="process" value="Express">
            <input type="hidden" name="successUrl" value="http://localhost/Payment-with-Yenepay-Php/success.php">
            <input type="hidden" name="ipnUrl" value="http://localhost/Payment-with-Yenepay-Php/ipn.php">
            <input type="hidden" name="cancelUrl" value="http://localhost/Payment-with-Yenepay-Php/cancel.php">
            <input type="hidden" name="merchantId" value="SB1151">
            <input type="hidden" name="merchantOrderId" value="xy2">
            <input type="hidden" name="expiresAfter" value="24">
            <input type="hidden" name="itemId" value="50">
            <input type="hidden" name="itemName" value="Billing">
            <input type="hidden" name="unitPrice" value="105.75">
            <input type="hidden" name="quantity" value="5">
            <input type="hidden" name="discount" value="0.5">
            <input type="hidden" name="handlingFee" value="0">
            <input type="hidden" name="deliveryFee" value="0">
            <input type="hidden" name="tax1" value="0">
            <input type="hidden" name="tax2" value="0">
            <button type="submit">Pay with express</button>
        </form>
    </body>
</html>