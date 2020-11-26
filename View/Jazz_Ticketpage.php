<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Jazz</title>
    <meta name="description" content="Haarlem Jazz">
    <meta name="keywords" content="Jazz, smooth, lineup">
    <link href="css/JazzTickets.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/JazzScript.js"></script>
    <script src="js/JazzTicketScript.js" type="text/javascript"></script>
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
    <a class="active" href="Jazz_Main.php">Jazz</a>
    <a href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">
    <section class="JazzTicketContent">
        <h1>Haarlem Jazz Tickets</h1>
        <section class="JazzButtons">
            <section class="notActiveButton">
                <a href="Jazz_Main.php">Jazz Line-up</a>
            </section>
            <section class="activeButton">
                <a href="Jazz_Ticketpage.php">Tickets</a>
            </section>
        </section>
        <section class="JazzDayButtons">
            <section class="thursdayButton" id="thursdayButton"><a id="thursdayButtonLink"
                                                                   href="javascript:ShowThursdayTickets('tickets', 'thursdayButton', 'thursdayButtonLink',
                                                                   'fridayButton', 'fridayButtonLink', 'saturdayButton', 'saturdayButtonLink', 'sundayButton',
                                                                   'sundayButtonLink')">Thursday</a>

            </section>
            <section class="fridayButton" id="fridayButton"><a id="fridayButtonLink" href="# ">Friday</a></section>
            <section class="saturdayButton" id="fridayButton"><a id="saturdayButtonLink" href="#">Saturday</a></section>
            <section class="sundayButton" id="sundayButton"><a id="saturdayButtonLink" href="#">Sunday</a></section>
        </section>
    </section>
    <section class="tickets" id="tickets">
        <section class="leftSideTicket1" id="leftSideTicket1">
            <img src="images/GumboKings1.jpg">
            <h1>Gumbo Kings</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Morbi semper hendrerit ex eu semper. Sed vitae lectus in nibh facilisis vestibulum at non est.
                Suspendisse feugiat, odio eget consectetur varius, augue mauris sodales ipsum, sed ultrices mi ipsum
                eu
                sem.</p>
        </section>
        <section class="rightSideTicket1" id="rightSideTicket1">
            <label class="dayLabel">Thu 28 Jul</label>
            <label class="timeLabel">18:00-19:00</label>
            <label class="priceLabel">€15,00</label>
            <label class="locationLabel">Patronaat</label>
            <div class="buyButtonTicketRow1" id="buyButtonTicketRow1">
                <a href="javascript:SwapToBuyScreen('leftSideTicket1','rightSideTicket1', 'leftSideTicketBuy1','rightSideTicketBuy1' )">
                    <img src="images/BuyIcon.png">
                    <label class="buyLabel">Buy Now</label>
                </a>
            </div>
        </section>
        <section class="leftSideTicketBuy1" id="leftSideTicketBuy1">
            <div class="CloseAndAddButton">
                <div class="closeTicketScreenRow1" id="closeTicketScreenRow1">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket1','rightSideTicket1', 'leftSideTicketBuy1','rightSideTicketBuy1' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </div>
                <div class="AddToCartButton">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </div>
            </div>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>

                <label class="titleArtist">Gare du Nord Saturday</label>
                <label class="priceArtist">€15,00</label>
                <div class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </div>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <div class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </div>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <div class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                </div>

            </section>

        </section>
        <section class="rightSideTicketBuy1" id="rightSideTicketBuy1">
            <label class="artistLabel">Gumbo Kings</label>
            <label class="timeLabelBuy">18:00-19:00</label>
            <label class="locationLabelBuy">Location: Patronaat</label>
            <img src="images/GumboKings1.jpg">
        </section>


        <section class="leftSideTicket2" id="leftSideTicket2">
            <img src="images/WickedJazzSounds1.jpg">
            <h1>Wicked Jazz Sounds</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Suspendisse egestas, lorem efficitur lobortis pulvinar, purus mi maximus risus, nec ullamcorper nulla
                lacus at dolor.</p>
        </section>
        <section class="rightSideTicket2" id="rightSideTicket2">
            <label class="dayLabel">Thu 28 Jul</label>
            <label class="timeLabel">18:00-19:00</label>
            <label class="priceLabel">€15,00</label>
            <label class="locationLabel">Patronaat</label>
            <div class="buyButtonTicketRow1">
                <a href="javascript:SwapToBuyScreen('leftSideTicket2','rightSideTicket2', 'leftSideTicketBuy2','rightSideTicketBuy2' )">
                    <img src="images/BuyIcon.png">
                    <label class="buyLabel">Buy Now</label>
                </a>
            </div>
        </section>
        <section class="leftSideTicketBuy2" id="leftSideTicketBuy2">
            <div class="CloseAndAddButton">
                <div class="closeTicketScreenRow1" id="closeTicketScreenRow1">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket2','rightSideTicket2', 'leftSideTicketBuy2','rightSideTicketBuy2' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </div>
                <div class="AddToCartButton">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </div>
            </div>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>

                <label class="titleArtist">Wicked Jazz Sounds Saturday</label>
                <label class="priceArtist">€15,00</label>
                <div class="amountArtist">
                    <button class="minusArtist" id="minusArtist2">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist2"/>
                    <button class="plusArtist" id="plusArtist2">+</button>
                    <script>
                        addTicket('minusArtist2', 'inputArtist2', 'plusArtist2')
                    </script>
                </div>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <div class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay2">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay2"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay2">+</button>
                    <script>
                        addTicket('minusAllAccessDay2', 'inputAllAccessDay2', 'plusAllAccessDay2')
                    </script>
                </div>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <div class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend2">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend2"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend2">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend2', 'inputAllAccessWeekend2', 'plusAllAccessWeekend2')
                    </script>
                </div>
            </section>
        </section>
        <section class="rightSideTicketBuy2" id="rightSideTicketBuy2">
            <label class="timeLabelBuy">Wicked Jazz Sounds</label>
            <label class="timeLabelBuy">18:00-19:00</label>
            <label class="locationLabelBuy">Location: Patronaat</label>
            <img src="images/WickedJazzSounds1.jpg">
        </section>
        <section class="leftSideTicket3" id="leftSideTicket3">
            <img src="images/Evolve1.jpg">
            <h1>Evolve</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Proin pulvinar tellus sed lacus interdum porttitor. Donec finibus neque sed dignissim tempor. Vivamus
                tincidunt felis in nunc consectetur viverra. Praesent egestas semper auctor. Cras fringilla pharetra mi,
                in pulvinar erat venenatis a. Nullam rutrum mollis lacinia.</p>
        </section>
        <section class="rightSideTicket3" id="rightSideTicket3">
            <label class="dayLabel">Thu 28 Jul</label>
            <label class="timeLabel">19:30-20:30</label>
            <label class="priceLabel">€15,00</label>
            <label class="locationLabel">Patronaat</label>
            <div class="buyButtonTicketRow2">
                <a href="javascript:SwapToBuyScreen('leftSideTicket3','rightSideTicket3', 'leftSideTicketBuy3','rightSideTicketBuy3' )">
                    <img src="images/BuyIcon.png">
                    <label class="buyLabel">Buy Now</label>
                </a>
            </div>
        </section>
        <section class="leftSideTicketBuy3" id="leftSideTicketBuy3">
            <div class="CloseAndAddButton">
                <div class="closeTicketScreenRow2" id="closeTicketScreenRow2">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket3','rightSideTicket3', 'leftSideTicketBuy3','rightSideTicketBuy3' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </div>
                <div class="AddToCartButton">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </div>
            </div>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>

                <label class="titleArtist">Evolve</label>
                <label class="priceArtist">€15,00</label>
                <div class="amountArtist">
                    <button class="minusArtist" id="minusArtist3">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist3"/>
                    <button class="plusArtist" id="plusArtist3">+</button>
                    <script>
                        addTicket('minusArtist3', 'inputArtist3', 'plusArtist3')
                    </script>
                </div>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <div class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay3">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay3"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay3">+</button>
                    <script>
                        addTicket('minusAllAccessDay3', 'inputAllAccessDay3', 'plusAllAccessDay3')
                    </script>
                </div>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <div class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend3">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend3"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend3">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend3', 'inputAllAccessWeekend3', 'plusAllAccessWeekend3')
                    </script>
                </div>
            </section>
        </section>
        <section class="rightSideTicketBuy3" id="rightSideTicketBuy3">
            <label class="artistLabel">Evolve</label>
            <label class="timeLabelBuy">19:30-20:30</label>
            <label class="locationLabelBuy">Location: Patronaat</label>
            <img src="images/Evolve1.jpg">
        </section>
        <section class="leftSideTicket4" id="leftSideTicket4">
            <img src="images/TomThomsonAssemble1.jpg">
            <h1>Tom Thomson Assemble</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Proin pulvinar tellus sed lacus interdum porttitor. Donec finibus neque sed dignissim tempor. Vivamus
                tincidunt felis in nunc consectetur viverra. Praesent egestas semper auctor. Cras fringilla pharetra mi,
                in pulvinar erat venenatis a. Nullam rutrum mollis lacinia.</p>
        </section>
        <section class="rightSideTicket4" id="rightSideTicket4">
            <label class="dayLabel">Thu 28 Jul</label>
            <label class="timeLabel">19:30-20:30</label>
            <label class="priceLabel">€15,00</label>
            <label class="locationLabel">Patronaat</label>
            <div class="buyButtonTicketRow2">
                <a href="javascript:SwapToBuyScreen('leftSideTicket4','rightSideTicket4', 'leftSideTicketBuy4','rightSideTicketBuy4' )">
                    <img src="images/BuyIcon.png">
                    <label class="buyLabel">Buy Now</label>
                </a>
            </div>
        </section>
        <section class="leftSideTicketBuy4" id="leftSideTicketBuy4">
            <div class="CloseAndAddButton">
                <div class="closeTicketScreenRow2" id="closeTicketScreenRow2">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket4','rightSideTicket4', 'leftSideTicketBuy4','rightSideTicketBuy4' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </div>

                <div class="AddToCartButton">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </div>
            </div>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>

                <label class="titleArtist">Tom Thomson Assemble</label>
                <label class="priceArtist">€15,00</label>
                <div class="amountArtist">
                    <button class="minusArtist" id="minusArtist4">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist4"/>
                    <button class="plusArtist" id="plusArtist4">+</button>
                    <script>
                        addTicket('minusArtist4', 'inputArtist4', 'plusArtist4')
                    </script>
                </div>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <div class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay4">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay4"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay4">+</button>
                    <script>
                        addTicket('minusAllAccessDay4', 'inputAllAccessDay4', 'plusAllAccessDay4')
                    </script>
                </div>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <div class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend4">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend4"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend4">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend4', 'inputAllAccessWeekend4', 'plusAllAccessWeekend4')
                    </script>
                </div>
            </section>
        </section>
        <section class="rightSideTicketBuy4" id="rightSideTicketBuy4">
            <label class="artistLabel">Tom Thomson</label>
            <label class="timeLabelBuy">19:30-20:30</label>
            <label class="locationLabelBuy">Location: Patronaat</label>
            <img src="images/TomThomsonAssemble1.jpg">
        </section>
        <section class="leftSideTicket5" id="leftSideTicket5">
            <img src="images/NtjamRosie1.jpg">
            <h1>Ntjam Rosie</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Sed vel commodo risus. Fusce est ante, posuere mattis cursus non, laoreet et libero. Curabitur
                ullamcorper arcu at blandit faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a
                molestie risus.</p>
        </section>
        <section class="rightSideTicket5" id="rightSideTicket5">
            <label class="dayLabel">Thu 28 Jul</label>
            <label class="timeLabel">21:00-22:00</label>
            <label class="priceLabel">€15,00</label>
            <label class="locationLabel">Patronaat</label>
            <div class="buyButtonTicketRow3">
                <a href="javascript:SwapToBuyScreen('leftSideTicket5','rightSideTicket5', 'leftSideTicketBuy5','rightSideTicketBuy5' )">
                    <img src="images/BuyIcon.png">
                    <label class="buyLabel">Buy Now</label>
                </a>
            </div>
        </section>
        <section class="leftSideTicketBuy5" id="leftSideTicketBuy5">
            <div class="CloseAndAddButton">
                <div class="closeTicketScreenRow3" id="closeTicketScreenRow3">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket5','rightSideTicket5', 'leftSideTicketBuy5','rightSideTicketBuy5' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </div>
                <div class="AddToCartButton">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </div>
            </div>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>

                <label class="titleArtist">Ntjam Rosie</label>
                <label class="priceArtist">€15,00</label>
                <div class="amountArtist">
                    <button class="minusArtist" id="minusArtist5">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist5"/>
                    <button class="plusArtist" id="plusArtist5">+</button>
                    <script>
                        addTicket('minusArtist5', 'inputArtist5', 'plusArtist5')
                    </script>
                </div>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <div class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay5">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay5"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay5">+</button>
                    <script>
                        addTicket('minusAllAccessDay5', 'inputAllAccessDay5', 'plusAllAccessDay5')
                    </script>
                </div>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <div class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend5">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend5"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend5">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend5', 'inputAllAccessWeekend5', 'plusAllAccessWeekend5')
                    </script>
                </div>
            </section>
        </section>
        <section class="rightSideTicketBuy5" id="rightSideTicketBuy5">
            <label class="artistLabel">Ntjam Rosie</label>
            <label class="timeLabelBuy">21:00-22:00</label>
            <label class="locationLabelBuy">Location: Patronaat</label>
            <img src="images/NtjamRosie1.jpg">
        </section>
        <section class="leftSideTicket6" id="leftSideTicket6">
            <img src="images/JonnaFraser1.jpg">
            <h1>Jonna Fraser</h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Proin pulvinar tellus sed lacus interdum porttitor. Donec finibus neque sed dignissim tempor. Vivamus
                tincidunt felis in nunc consectetur viverra. Praesent egestas semper auctor. Cras fringilla pharetra mi,
                in pulvinar erat venenatis a. Nullam rutrum mollis lacinia.</p>
        </section>
        <section class="rightSideTicket6" id="rightSideTicket6">
            <label class="dayLabel">Thu 28 Jul</label>
            <label class="timeLabel">21:00-22:00</label>
            <label class="priceLabel">€15,00</label>
            <label class="locationLabel">Patronaat</label>
            <div class="buyButtonTicketRow3">
                <a href="javascript:SwapToBuyScreen('leftSideTicket6','rightSideTicket6', 'leftSideTicketBuy6','rightSideTicketBuy6' )">
                    <img src="images/BuyIcon.png">
                    <label class="buyLabel">Buy Now</label>
                </a>
            </div>
        </section>
        <section class="leftSideTicketBuy6" id="leftSideTicketBuy6">
            <div class="CloseAndAddButton">
                <div class="closeTicketScreenRow3" id="closeTicketScreenRow3">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket6','rightSideTicket6', 'leftSideTicketBuy6','rightSideTicketBuy6' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </div>
                <div class="AddToCartButton">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </div>
            </div>
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>

                <label class="titleArtist">Jonna Fraser</label>
                <label class="priceArtist">€15,00</label>
                <div class="amountArtist">
                    <button class="minusArtist" id="minusArtist6">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist6"/>
                    <button class="plusArtist" id="plusArtist6">+</button>
                    <script>
                        addTicket('minusArtist6', 'inputArtist6', 'plusArtist6')
                    </script>
                </div>
                <label class="titleAllAccessDay">All-Access Thursday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <div class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay6">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay6"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay6">+</button>
                    <script>
                        addTicket('minusAllAccessDay6', 'inputAllAccessDay6', 'plusAllAccessDay6')
                    </script>
                </div>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <div class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend6">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend6"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend6">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend6', 'inputAllAccessWeekend6', 'plusAllAccessWeekend6')
                    </script>
                </div>
            </section>
        </section>
        <section class="rightSideTicketBuy6" id="rightSideTicketBuy6">
            <label class="artistLabel">Jonna Fraser</label>
            <label class="timeLabelBuy">21:00-22:00</label>
            <label class="locationLabelBuy">Location: Patronaat</label>
            <img src="images/JonnaFraser1.jpg">
        </section>
    </section>
</section>
</body>
</html>