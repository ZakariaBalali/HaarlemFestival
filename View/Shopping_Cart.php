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
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/MainScript.js"></script>
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
    <h1 id="CartTitle">Shopping Cart</h1>
    <?php
    if (!empty($_SESSION['Products'])) { ?>

        <table id="CartTable">
            <tr id="TableHead">
                <th>Event</th>
                <th>Product</th>
                <th>Comments</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>

            <?php
            $TotalPrice = 0;
            foreach ($_SESSION['Products'] as $item) {
                //Make a form for each item to delete them if needed
                ?>
                <form class="formAlter" action="AlterSession.php" method="post" id="AlterProduct">
                    <input style="display: none" class="valueEvent" name="eventID" type="text"
                           value="<?php echo $item['EventID'] ?>"/><?php
                    ?>
                    <tr>
                        <td id="TabledataCart"><?php echo $item['EventName']; ?> </td>
                        <td id="Tabledata1"><?php echo $item['ProductName']; ?>
                            <br> <?php echo $timeFormat = date('D d F ', strtotime($item['StartTime'])); ?> </td>
                        <td id="Tabledata2"><?php echo "none" ?></td>
                        <td id="TabledataCart">&euro; <?php echo $item ['Price']; ?></td>
                        <td id="Tabledata2">
                            <button name="minusSession" class="minus" type="submit" "
                                    id="minus<?php echo $item['EventID'] ?>">−
                            </button>
                            <input class="input" name="amount" type="number" value="<?php echo $item ['Amount'] ?>"
                                   id="input<?php echo $item['EventID'] ?>"/>
                            <button name="plusSession" class="plus" type="submit"
                                    id="plus<?php echo $item['EventID'] ?>">+
                            </button>

                        </td>
                        <td id="TabledataCart">&euro;<?php echo($item['Amount'] * $item['Price']) ?></td>
                        <?php $TotalPrice += ($item['Amount'] * $item['Price']) ?>
                        <td id="Tabledata2"><button name="deleteSession"><img width="48"height="48" src="images/trash.png"></button>
                    </tr>
                </form>
            <?php }
            ?>
        </table>

        <form class="formPayment" action="Shopping_Cart_Details.php" method="post" id="GoToPayment">
            <?php $totalamount = number_format($TotalPrice, 2, '.', '') ?>
            <input style="display: none" class="valueAmount" id="amount" name="amount"
                   type="text"
                   value="<?php echo $totalamount ?>"/>
            <table id="Ordertable">
                <tr>
                    <th id="TableHead">Order summary</th>
                    <th id="TableHead"></th>
                </tr>
                <tr>
                    <td id="Tabledata3">Subtotal</td>
                    <td id="Tabledata4">&euro;<?php echo number_format(($totalamount * 0.91), 2, '.', '') ?></td>
                </tr>
                <tr>
                    <td id="Tabledata3">9% Tax</td>
                    <td id="Tabledata4">&euro;<?php echo number_format(($totalamount * 0.09), 2, '.', '') ?></td>
                </tr>
            </table>

            <p id="TotalPrice">Total (incl. Tax): &euro;<?php echo $totalamount ?></p>
            <button id="ProceedButton" form="GoToPayment" id="GoToPayment">
                Proceed to Details
            </button>
        </form>
    <?php } else {
        echo "Add items to your shopping cart so you can display them here!";
    } ?>

</section>


</body>
</html>