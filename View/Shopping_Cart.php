<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Program</title>
    <meta name="description" content="Haarlem Program">
    <meta name="keywords" content="Create your own Programme">
    <link href="css/ShoppingCartMain.css" rel="stylesheet" type="text/css">
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
    <!-- <a  class="active" href="Shopping_Cart.php"><img src="images/icon_shoppingcart_active.png"></a> -->
</section>

<section class="MainCart">
    <h1 id="CartTitle">Shopping Cart</h1>
    <table id="CartTable">
        <tr id="TableHead">
            <th>Event</th>
            <th>Product</th>
            <th>Comments</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>

        <tr>
            <td id="TabledataCart">Food</td>
            <td id=Tabledata1>Reservation Restaurant Fris, Thu 28 July 19.00</td>
            <td id="Tabledata2">Geen</td>
            <td id="TabledataCart">10</td>
            <td id="Tabledata2"><button id="-Button">-</button>4<button id="PlusButton">+</button></td>
            <td id="TabledataCart">40,00</td>
        </tr>
    </table>

    <table id="Ordertable">
        <tr>
            <th id="TableHead">Order summary</th>
            <th id="TableHead"></th>
        </tr>
        <tr>
            <td id="Tabledata3">Subtotaal</td>
            <td id="Tabledata3">36,70</td>
        </tr>
        <tr>
            <td id="Tabledata3">9% Tax</td>
            <td id="Tabledata3">3,30</td>
        </tr>
    </table>

    <button id="ProceedButton">
        Proceed to details
    </button>

</section>


</body>
</html>