<?php
session_start()
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <meta name="description" content="Haarlem Program">
    <meta name="keywords" content="Create your own Programme">
    <link href="css/ShoppingCartMain.css" rel="stylesheet" type="text/css">
    <link href="css/ShoppingCartDetails.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
</head>

<body>
<section class="Banner">
    <section class="leftBanner">
        <img class="logoImage" src="images/logo.png">
        <h1 class="Title">Haarlem Festival</h1>
    </section>
    <section class="rightBanner">
        <h1 class="Date">26-29 July 2021</h1>
    </section>
</section>
<section class="NavigationBar">
    <a href="Homepage.php">Home</a>
    <a href="Dance_Main.php">Dance</a>
    <a href="Food_Main.php">Food</a>
    <a href="Jazz_Main.php">Jazz</a>
    <a href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a class="active" href="Shopping_Cart.php"><img src="images/icon_shoppingcart_active.png"></a>
</section>

<section class="MainCart">
    <h1 id="CartTitle">Details</h1>
</section>

<section>
    <form class="formPayment" action="../Logic/PayLogic.php" method="post" id="GoToPayment">
        <?php $amount = $_POST["amount"] ?>
        <input style="display: none" class="valueAmount" id="amount" name="amount"
               type="text"
               value="<?php echo $amount ?>"/>
        <div class="container">

            <h3 class="FormHeader">Details</h3>
            <label id="label1" for="fname"><strong>First Name</strong><span class="red">&ast;</span></label>
            <input type="text" id="fname" name="firstName" required>

            <label for="lname"><strong>Last Name</strong><span class="red">&ast;</span></label>
            <input type="text" id="lname" name="lastName" required>
            <strong id="span3">The Haarlem festival tickets are personal and can not be resold</strong>

            <label for="phone"><strong>Phone number</strong></label>
            <input type="text" id="phone" name="phone">

            <label for="email"><strong>Email</strong><span class="red">&ast;</span></label>
            <input type="text" id="email" name="email" required autocomplete="off">
            <strong id="span3">The tickets will be sent to your e-mail address</strong>

            <strong id="p2">Textboxes with an Asterisk(<span class="red">&ast;</span>) are required</strong>
        </div>

        <div class="container2">

            <h3 class="FormHeader">Order Summary</h3>
            <?php
            foreach ($_SESSION['Products'] as $item) {

                ?>
                <div class="container3">
                    <strong id="span1"><?php echo $item['EventName']; ?></strong><br>
                    <span id="span2"><?php echo $item['ProductName']; ?></span>
                    <span id="span2"><?php echo $timeFormat = date('D d F ', strtotime($item['StartTime'])); ?></span>
                    <span id="span6"><?php echo $item['Amount']?>x</span>
                </div>
            <?php } ?>

            <div class="container4">
                <span id="span4">Subtotal</span>
                <span id="span4">9&percnt; Tax</span>
            </div>

            <div class="container5">
                <strong id="span5">&euro;<?php echo number_format(($amount * 0.91), 2, '.', '') ?></strong>
                <strong id="span5">&euro;<?php echo number_format(($amount * 0.09), 2, '.', '') ?></strong>
            </div>
        </div>
        <p id="p1">Total (incl. Tax): &euro;<?php echo number_format($amount, 2, '.', '') ?></p>

        <button id="ConfirmButton" name="ConfirmButton" form="GoToPayment" id="GoToPayment">
            Confirm order
        </button>
    </form>
</section>

</body>

</html>