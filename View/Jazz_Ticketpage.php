<?php
require_once '../Logic/JazzLogic.php';
?>
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
    <a class="active" href="Jazz_Main.php">Jazz</a>
    <a href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">

    <section id="popupAddedTicket" class="popupAddedTicket">
        <section class="popup-content">

            <section class="popup-header">
                <img src="images/icon_successfull.png">
                <h1>Item(s) added to Shopping cart</h1>
            </section>
            <section class="popup-body">
                <table class="addedTickets">
                    <tr>
                        <th>Amount</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Timeslot</th>
                        <th>Price</th>
                    </tr>
                    <tr class="tableContent">
                        <th>1x</th>
                        <th>Gumbo Kings</th>
                        <th>Sat Jul 28th</th>
                        <th>18:00-19:00</th>
                        <th>€15,00</th>
                    </tr>
                </table>
            </section>
            <section class="popup-footer">
                <button class="closeButton" id="closeButton">Continue Shopping</button>
                <button onclick="window.location.href='Program_Main.php';" class="programButton">View in Program
                </button>
                <button onclick="window.location.href='Shopping_Cart.php';" class="shoppingCartButton">To Shopping
                    cart
                </button>
            </section>
        </section>
    </section>

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
            <section class="thursdayButton" id="thursdayButton">
                <a id="thursdayButtonLink"
                   href="javascript:filterSelection('thursdayButton','fridayButton','saturdayButton','sundayButton', 'thursdayButtonLink',
                   'fridayButtonLink', 'saturdayButtonLink', 'sundayButtonLink', 'ticketsThursday','ticketsFriday','ticketsSaturday','ticketsSunday')">Thursday</a>
            </section>
            <section class="fridayButton" id="fridayButton">
                <a id="fridayButtonLink"
                   href="javascript:filterSelection('fridayButton','thursdayButton','saturdayButton','sundayButton', 'fridayButtonLink',
                   'thursdayButtonLink', 'saturdayButtonLink', 'sundayButtonLink','ticketsFriday','ticketsThursday','ticketsSaturday','ticketsSunday')">
                    Friday</a>
            </section>
            <section class="saturdayButton" id="fridayButton"><a id="saturdayButtonLink" href="#">Saturday</a></section>
            <section class="sundayButton" id="sundayButton"><a id="saturdayButtonLink" href="#">Sunday</a></section>
        </section>
    </section>
    <section class="ticketsThursday" id="ticketsThursday">
        <?php
        $JazzEvents = [];
        $jazzLogic = new JazzLogic();
        $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-26 00:00:00", "2018-07-27 00:00:00");
        $i = 1;
        ?>
        <?php
        foreach ($JazzEvents as $jazz) {
            ?>
            <section class="leftSideTicket<?php echo $i ?>" id="leftSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <img src="images/<?php echo $jazz->getImage() ?>.jpg">
                <h1><?php echo $jazz->getBandName() ?></h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p><?php echo $jazz->getDescription() ?></p>
            </section>
            <section class="rightSideTicket<?php echo $i ?>" id="rightSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <label class="dayLabel">Thu 26 Jul</label>
                <label class="timeLabel"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="priceLabel">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <label class="locationLabel"><?php echo $jazz->getLocation() ?></label>
                <section class="buyButtonTicket<?php echo $i ?>">
                    <a href="javascript:SwapToBuyScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                        <img src="images/BuyIcon.png">
                        <label class="buyLabel">Buy Now</label>
                    </a>
                </section>
            </section>
            <section class="leftSideTicketBuy<?php echo $i ?>" id="leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <section class="CloseAndAddButton">
                    <section class="closeTicketScreenTicket<?php echo $i ?>"
                             id="closeTicketScreenTicket<?php echo $i ?>">
                        <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                            <img src="images/BuyIcon.png">
                            <label class="closeLabel">Back</label>
                        </a>
                    </section>
                    <button class="AddToCartButton" id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                        <img src="images/ShoppingCart.png">
                        <label>Add to Cart</label>
                    </button>
                    <script>
                        modal('popupAddedTicket', 'AddToCartButton<?php echo $jazz->getEvent_ID()?>', 'closeButton')
                    </script>
                </section>
                <section class="ticketGridArea">
                    <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                    <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                    <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountArtist">
                        <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                        <input class="inputArtist" type="number" value="0"
                               id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                        <script>
                            addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessDay">All-Access Thursday</label>
                    <label class="priceAllAccessDay">€35,00</label>
                    <section class="amountAllAccessDay">
                        <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessday" type="number" value="0"
                               id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessWeekend">All-Access Weekend</label>
                    <label class="priceAllAccessWeekend"> €80,00</label>
                    <section class="amountAllAccessWeekend">
                        <button class="minusAllAccessWeekend"
                                id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessWeekend" type="number" value="0"
                               id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessWeekend"
                                id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>

                </section>
            </section>
            <section class="rightSideTicketBuy<?php echo $i ?>"
                     id="rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <label class="artistLabel"><?php echo $jazz->getBandName(); ?></label>
                <label class="timeLabelBuy"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="locationLabelBuy"><?php echo $jazz->getLocation(); ?></label>
                <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
            </section>

            <?php $i++;
        } ?>
    </section>
    <section class="ticketsFriday" id="ticketsFriday">
        <?php
        $JazzEvents = [];
        $jazzLogic = new JazzLogic();
        $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-27 00:00:00", "2018-07-28 00:00:00");
        $i = 1;
        ?>
        <?php
        foreach ($JazzEvents as $jazz) {
            ?>
            <section class="leftSideTicket<?php echo $i ?>" id="leftSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <img src="images/<?php echo $jazz->getImage() ?>.jpg">
                <h1><?php echo $jazz->getBandName() ?></h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p><?php echo $jazz->getDescription() ?></p>
            </section>
            <section class="rightSideTicket<?php echo $i ?>" id="rightSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <label class="dayLabel">Fri 27 Jul</label>
                <label class="timeLabel"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="priceLabel">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <label class="locationLabel"><?php echo $jazz->getLocation() ?></label>
                <section class="buyButtonTicket<?php echo $i ?>">
                    <a href="javascript:SwapToBuyScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                        <img src="images/BuyIcon.png">
                        <label class="buyLabel">Buy Now</label>
                    </a>
                </section>
            </section>
            <section class="leftSideTicketBuy<?php echo $i ?>" id="leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <section class="CloseAndAddButton">
                    <section class="closeTicketScreenTicket<?php echo $i ?>"
                             id="closeTicketScreenTicket<?php echo $i ?>">
                        <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                            <img src="images/BuyIcon.png">
                            <label class="closeLabel">Back</label>
                        </a>
                    </section>
                    <button class="AddToCartButton" id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                        <img src="images/ShoppingCart.png">
                        <label>Add to Cart</label>
                    </button>
                    <script>
                        modal('popupAddedTicket', 'AddToCartButton<?php echo $jazz->getEvent_ID()?>', 'closeButton')
                    </script>
                </section>
                <section class="ticketGridArea">
                    <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                    <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                    <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountArtist">
                        <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                        <input class="inputArtist" type="number" value="0"
                               id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                        <script>
                            addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessDay">All-Access Thursday</label>
                    <label class="priceAllAccessDay">€35,00</label>
                    <section class="amountAllAccessDay">
                        <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessday" type="number" value="0"
                               id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessWeekend">All-Access Weekend</label>
                    <label class="priceAllAccessWeekend"> €80,00</label>
                    <section class="amountAllAccessWeekend">
                        <button class="minusAllAccessWeekend"
                                id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessWeekend" type="number" value="0"
                               id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessWeekend"
                                id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>

                </section>
            </section>
            <section class="rightSideTicketBuy<?php echo $i ?>"
                     id="rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <label class="artistLabel"><?php echo $jazz->getBandName(); ?></label>
                <label class="timeLabelBuy"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="locationLabelBuy"><?php echo $jazz->getLocation(); ?></label>
                <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
            </section>

            <?php $i++;
        } ?>
    </section>
    <section class="ticketsSaturday" id="ticketsSaturday">
        <?php
        $JazzEvents = [];
        $jazzLogic = new JazzLogic();
        $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-28 00:00:00", "2018-07-29 00:00:00");
        $i = 1;
        ?>
        <?php
        foreach ($JazzEvents as $jazz) {
            ?>
            <section class="leftSideTicket<?php echo $i ?>" id="leftSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <img src="images/<?php echo $jazz->getImage() ?>.jpg">
                <h1><?php echo $jazz->getBandName() ?></h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p><?php echo $jazz->getDescription() ?></p>
            </section>
            <section class="rightSideTicket<?php echo $i ?>" id="rightSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <label class="dayLabel">Sat 28 Jul</label>
                <label class="timeLabel"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="priceLabel">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <label class="locationLabel"><?php echo $jazz->getLocation() ?></label>
                <section class="buyButtonTicket<?php echo $i ?>">
                    <a href="javascript:SwapToBuyScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                        <img src="images/BuyIcon.png">
                        <label class="buyLabel">Buy Now</label>
                    </a>
                </section>
            </section>
            <section class="leftSideTicketBuy<?php echo $i ?>" id="leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <section class="CloseAndAddButton">
                    <section class="closeTicketScreenTicket<?php echo $i ?>"
                             id="closeTicketScreenTicket<?php echo $i ?>">
                        <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                            <img src="images/BuyIcon.png">
                            <label class="closeLabel">Back</label>
                        </a>
                    </section>
                    <button class="AddToCartButton" id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                        <img src="images/ShoppingCart.png">
                        <label>Add to Cart</label>
                    </button>
                    <script>
                        modal('popupAddedTicket', 'AddToCartButton<?php echo $jazz->getEvent_ID()?>', 'closeButton')
                    </script>
                </section>
                <section class="ticketGridArea">
                    <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                    <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                    <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountArtist">
                        <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                        <input class="inputArtist" type="number" value="0"
                               id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                        <script>
                            addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessDay">All-Access Thursday</label>
                    <label class="priceAllAccessDay">€35,00</label>
                    <section class="amountAllAccessDay">
                        <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessday" type="number" value="0"
                               id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessWeekend">All-Access Weekend</label>
                    <label class="priceAllAccessWeekend"> €80,00</label>
                    <section class="amountAllAccessWeekend">
                        <button class="minusAllAccessWeekend"
                                id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessWeekend" type="number" value="0"
                               id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessWeekend"
                                id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>

                </section>
            </section>
            <section class="rightSideTicketBuy<?php echo $i ?>"
                     id="rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <label class="artistLabel"><?php echo $jazz->getBandName(); ?></label>
                <label class="timeLabelBuy"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="locationLabelBuy"><?php echo $jazz->getLocation(); ?></label>
                <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
            </section>

            <?php $i++;
        } ?>
    </section>
    <section class="ticketsSunday" id="ticketsSunday">
        <?php
        $JazzEvents = [];
        $jazzLogic = new JazzLogic();
        $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-29 00:00:00", "2018-07-30 00:00:00");
        $i = 1;
        ?>
        <?php
        foreach ($JazzEvents as $jazz) {
            ?>
            <section class="leftSideTicket<?php echo $i ?>" id="leftSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <img src="images/<?php echo $jazz->getImage() ?>.jpg">
                <h1><?php echo $jazz->getBandName() ?></h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p><?php echo $jazz->getDescription() ?></p>
            </section>
            <section class="rightSideTicket<?php echo $i ?>" id="rightSideTicket<?php echo $jazz->getEvent_ID() ?>">
                <label class="dayLabel">Sun 29 Jul</label>
                <label class="timeLabel"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="priceLabel">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <label class="locationLabel"><?php echo $jazz->getLocation() ?></label>
                <section class="buyButtonTicket<?php echo $i ?>">
                    <a href="javascript:SwapToBuyScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                        <img src="images/BuyIcon.png">
                        <label class="buyLabel">Buy Now</label>
                    </a>
                </section>
            </section>
            <section class="leftSideTicketBuy<?php echo $i ?>" id="leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <section class="CloseAndAddButton">
                    <section class="closeTicketScreenTicket<?php echo $i ?>"
                             id="closeTicketScreenTicket<?php echo $i ?>">
                        <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                            <img src="images/BuyIcon.png">
                            <label class="closeLabel">Back</label>
                        </a>
                    </section>
                    <button class="AddToCartButton" id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                        <img src="images/ShoppingCart.png">
                        <label>Add to Cart</label>
                    </button>
                    <script>
                        modal('popupAddedTicket', 'AddToCartButton<?php echo $jazz->getEvent_ID()?>', 'closeButton')
                    </script>
                </section>
                <section class="ticketGridArea">
                    <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                    <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                    <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountArtist">
                        <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                        <input class="inputArtist" type="number" value="0"
                               id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                        <script>
                            addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessDay">All-Access Thursday</label>
                    <label class="priceAllAccessDay">€35,00</label>
                    <section class="amountAllAccessDay">
                        <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessday" type="number" value="0"
                               id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessWeekend">All-Access Weekend</label>
                    <label class="priceAllAccessWeekend"> €80,00</label>
                    <section class="amountAllAccessWeekend">
                        <button class="minusAllAccessWeekend"
                                id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessWeekend" type="number" value="0"
                               id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessWeekend"
                                id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>

                </section>
            </section>
            <section class="rightSideTicketBuy<?php echo $i ?>"
                     id="rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>">
                <label class="artistLabel"><?php echo $jazz->getBandName(); ?></label>
                <label class="timeLabelBuy"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                <label class="locationLabelBuy"><?php echo $jazz->getLocation(); ?></label>
                <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
            </section>

            <?php $i++;
        } ?>
    </section>
</body>
</html>