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
            <section class="thursdayButton"><a href="# ">Thursday</a></section>
            <section class="fridayButton"><a href="# ">Friday</a></section>
            <section class="saturdayButton"><a href="#">Saturday</a></section>
            <section class="sundayButton"><a href="#">Sunday</a></section>
        </section>
    </section>
    <section class="tickets">

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
            <div class="closeTicketScreenRow1" id="closeTicketScreenRow1">
                <a href="javascript:SwapBackToTicketScreen('leftSideTicket1','rightSideTicket1', 'leftSideTicketBuy1','rightSideTicketBuy1' )">
                    <img src="images/BuyIcon.png">
                    <label class="closeLabel">Back</label>
                </a>
            </div>
        </section>
        <section class="rightSideTicketBuy1" id="rightSideTicketBuy1">

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
            <div class="closeTicketScreenRow1" id="closeTicketScreenRow1">
                <a href="javascript:SwapBackToTicketScreen('leftSideTicket2','rightSideTicket2', 'leftSideTicketBuy2','rightSideTicketBuy2' )">
                    <img src="images/BuyIcon.png">
                    <label class="closeLabel">Back</label>
                </a>
            </div>
        </section>
        <section class="rightSideTicketBuy2" id="rightSideTicketBuy2">

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
            <div class="closeTicketScreenRow2" id="closeTicketScreenRow2">
                <a href="javascript:SwapBackToTicketScreen('leftSideTicket3','rightSideTicket3', 'leftSideTicketBuy3','rightSideTicketBuy3' )">
                    <img src="images/BuyIcon.png">
                    <label class="closeLabel">Back</label>
                </a>
            </div>
        </section>
        <section class="rightSideTicketBuy3" id="rightSideTicketBuy3">

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
            <div class="closeTicketScreenRow2" id="closeTicketScreenRow2">
                <a href="javascript:SwapBackToTicketScreen('leftSideTicket4','rightSideTicket4', 'leftSideTicketBuy4','rightSideTicketBuy4' )">
                    <img src="images/BuyIcon.png">
                    <label class="closeLabel">Back</label>
                </a>
            </div>
        </section>
        <section class="rightSideTicketBuy4" id="rightSideTicketBuy4">

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
            <div class="closeTicketScreenRow3" id="closeTicketScreenRow3">
                <a href="javascript:SwapBackToTicketScreen('leftSideTicket5','rightSideTicket5', 'leftSideTicketBuy5','rightSideTicketBuy5' )">
                    <img src="images/BuyIcon.png">
                    <label class="closeLabel">Back</label>
                </a>
            </div>
        </section>
        <section class="rightSideTicketBuy5" id="rightSideTicketBuy5">

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
            <div class="closeTicketScreenRow3" id="closeTicketScreenRow3">
                <a href="javascript:SwapBackToTicketScreen('leftSideTicket6','rightSideTicket6', 'leftSideTicketBuy6','rightSideTicketBuy6' )">
                    <img src="images/BuyIcon.png">
                    <label class="closeLabel">Back</label>
                </a>
            </div>
        </section>
        <section class="rightSideTicketBuy6" id="rightSideTicketBuy6">

        </section>
    </section>
</section>
</body>
</html>