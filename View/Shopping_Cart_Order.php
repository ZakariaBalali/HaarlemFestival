<?php
// Start the session
session_start();
//checking if payment is done
if($_SESSION['confirm'] != "Confirm"  )
{
    header("Location: Homepage.php"); //if user did not proceed with payment, redirect to the Home page
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <meta name="description" content="Haarlem Program">
    <meta name="keywords" content="Create your own Programme">
    <link href="css/ShoppingCartOrder.css" rel="stylesheet" type="text/css">
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


<section id="containerTop">
    <?php if (isset($_SESSION['OrderID'])) { ?>
    <img id="checkmark" src="images/checkmark.png">
    <strong id="SuccesText">Succesfull payment</strong>
    <strong id="Text1">Thank you, your payment has been succesfull.</strong>
    <strong id="Text2">A confirmation e-mail has been sent to</strong>
    <?php foreach ($_SESSION['Customer'] as $item) {

    ?>
    <strong id="Text3"><?php echo $item['Email']; ?></strong>
</section>

<section>


    <h1 id="header">Order Details</h1>
    <hr>
    <p id="Text4">
        <span><strong>Order number:</strong></span>
        <span><?php echo $_SESSION["OrderID"] ?></span>
    </p>

    <p id="Text5">
        <span><strong id>Order date:</strong></span>
        <span><?php echo date('M d , Y'); ?></span>
    </p>

    <p id="Text6">
        <span><strong id>Name:</strong></span>
        <span><?php echo $item['FirstName']; ?><?php echo $item['LastName']; ?></span>
    </p>

    <p id="Text7">
        <span><strong id>Email:</strong></span>
        <span><?php echo $item['Email'];
            } ?></span>
    </p>

    <form action="PDF.php" method="post">
        <input style="display: none" class="valueOrder" name="orderID" type="text"
               value="<?php echo $_SESSION["OrderID"] ?>"/>
        <button id="pdf" type="submit">
            Download PDF
        </button>
    </form>


    <button id="BackHome" onclick="document.location='Homepage.php'">
        Back to festival
    </button>
    <?php }
    else {
        ?><label class="Text8" id="Text8">How did you get here? </label> <?php
    } ?>
</section>


<?php
foreach($_SESSION as $key => $val)
{

    if ($key !== 'OrderID')
    {

        unset($_SESSION[$key]);

    }

}
?>
</body>