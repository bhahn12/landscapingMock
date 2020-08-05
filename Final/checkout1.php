<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lawnstylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHECKOUT</title>
    </head>
    <?php include "Navigation.php"; ?>
<body>
<div class="checktop"><h2>Your selection: &nbsp; .25 Acres or less</h2>
                <h2>Total: &nbsp; $30</h2>
<div class="checkoutContainer center">
    <div class="row">
        <div class="column">
            <h3>Billing Address:</h3>
                <label for="name"> Full Name</label><br></br>
                <input type="text" id="name" name="firstname" placeholder="John Smith" size = 100;><br></br>

                <label for="adr">  Address</label><br></br>
                <input type="text" id="adr" name="address" placeholder="123 Main Street"><br></br>

                <label for="city"> City</label><br></br>
                <input type="text" id="city" name="city" placeholder="Chicago"><br></br>

                <label for="state"> State</label><br></br>
                <input type="text" id="state" name="state" placeholder="IL"><br></br>
    </div> 
        <div class="column">
            <h3> Payment Info:</h3>
            <label for = "holdersname">Cardholders Name</label><br></br>
            <input type = "text" id = "holdersname" name = "fullname" placeholder = "John Smith"><br></br>
            
            <label for = "cnumber">Card Number</label><br></br>
            <input type = "text" id = "cnumber" name = "carnumber" placeholder = "1111-1111-1111-1111"><br></br>
            
            <label for = "exp">Expiration Date</label><br></br>
            <input type = "text" id = "exp" name = "exp" placeholder = "08/2020"><br></br>

            <label for = "cvv">CVV</label><br></br>
            <input type = "text" id = "cvv" name = "cvvnumber" placeholder = "xxx"><br></br>
        </div>

        
    </div>
</div>
<div class="center">
    <input type="submit" value="Continue to checkout" class="btn">
                </div> 
<br></br>
<footer>
    <p>Company &copy; Bob's Lawn Care. All rights reserved.</p>
    </footer>
</body>
</html>
