<html>
<head>
<meta charset="UTF-8">
    <title>Haarlem Dance</title>
    <meta name="description" content="Haarlem Dance">
    <meta name="keywords" content="Dance, smooth, lineup">
    <link href="css/DanceMain.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/DanceScript.js"></script>
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
    <a class="active" href="Dance_Main.php">Dance</a>
    <a href="Food_Main.php">Food</a>
    <a href="Jazz_Main.php">Jazz</a>
    <a href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">
    <section class="EventTitle">
    <h2>Haarlem Dance</h2>
    </section>
    <p id="subtitle" >Choose day or artist for tickets</p>
                     <!--row 1 -->
    <section class="ArtistsRow1">
     <img src="./images/arminvanbuuren.jpg " href="# " />
     <img src="./images/hardwell.jpg " href="# "/>
     <img src="./images/afrojack.jpg " href="# "/>

                    <!--row 2 -->
     <section class="ArtistsRow2">
     <img src="./images/martingarrix.jpg "href="# " />
     <img src="./images/nickyromero.jpg "href="# " />
     <img src="./images/tiesto.jpg "href="# " />
     </section>
    </section>

                   <!--row Days -->
    <section class="DaysRow" >
    <button  class="allTicketsBtn"href="# " >All tickets</button>
    <button  class="fridayBtn"href="# " >Friday, Jul 27th</button>
    <button  class="saturdayBtn"href="# ">Saturday, Jul 28th</button>
    <button  class="sundayBtn"href="# ">Sunday, Jul 29th</button>
    </section>

                 <!--tickets -->
       
    <section class="Tickets">
      <div class="grid-container">

                       <!--ticket1 -->
      <div class="ticket1Title" id="ticket1Title">Nicky Romero/Afrojack</div>
      <div class="ticket1Detail" id="ticket1Detail">
      <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
            <label class="durationLabel">Duration: 360 min</label>
            <br>
            <label class="priceLabel">Price: €75,00</label>
            <br>
            <br>
           <<!--<section class="buyButtonTicketRow1" id="buyButtonTicketRow1">
                <a href="javascript:SwapToBuyScreen('ticket1Title','ticket1Detail', 'leftSideTicketBuy1','rightSideTicketBuy1' )">
                    <img src="images/BuyIcon.png"> -->
                <button class="buyTicket1Btn" onClick="switchTicket()">Buy now</button>
                </a>>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/nickyromeroafrojack.png">
    </section>
      </div>
                       <!--ticket1 swipe -->
<!--<section class="leftSideTicketBuy1" id="leftSideTicketBuy1">
            <section class="CloseAndAddButton">
                <section class="closeTicketScreenRow1" id="closeTicketScreenRow1">
                    <a href="javascript:SwapBackToTicketScreen('ticket1Title','ticket1Detail', 'leftSideTicketBuy1','rightSideTicketBuy1' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </section>
                <button class="AddToCartButton" id="AddToCartButton1">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </button>
                <script>
                    modal('popupAddedTicket', 'AddToCartButton1', 'closeButton')
                </script>
            </section>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                <label class="titleArtist">Gare du Nord Saturday</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                </section>

            </section>
-->
                       <!--ticket2 -->
      <div class="ticket2Title"  id="ticket2Title">Tiesto</div>
      <div class="ticket2Detail" id="ticket2Detail">
    <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 22:00</label>
            <br>
            <label class="locationLabel">Location: Club Stalker</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket2Btn">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/tiesto1.jpg">
    </section>

      </div>
      <div class="ticket3Title">Hardwell</div>
      <div class="ticket4Title">Armin van Buuren</div>
      <div class="ticket3Detail">
      <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 23:00</label>
            <br>
            <label class="locationLabel">Location: Jopenkerk</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket3Btn">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/hardwell1.jpg">
    </section>
      </div>
     <div class="ticket4Detail">
     <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 22:00</label>
            <br>
            <label class="locationLabel">Location: XO the club</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket4Btn">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/arminvanbuuren1.jpg">
    </section>
     </div>
    </div>
 
        </section>

        </section>





      </section>




</section>

<section class="Footer">

</section>


</body>
</html>
