<?php
require_once '../Logic/JazzLogic.php';
require_once '../Logic/CombiLogic.php';
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
                <button onclick="window.location.href='Shopping_Cart.php';" class="shoppingCartButton">To Shopping cart
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
        <section class="JazzDayButtons" id="myBtnContainer">
            <button class="dayButton dayActive" onclick="filterSelection('ticketsThursday')" id="thursdayButton">
                Thursday
            </button>
            <button class="dayButton" onclick="filterSelection('ticketsFriday')" id="fridayButton">Friday
            </button>
            <button class="dayButton" onclick="filterSelection('ticketsSaturday')" id="saturdayButton">Saturday</button>
            <button class="dayButton" onclick="filterSelection('ticketsSunday')" id="sundayButton"> Sunday
            </button>
        </section>
    </section>
    <script>
        //Function to make the buttons work and filter different ticket section
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("ticketSection");
            if (c == "all") c = "";
            // Add the "show" class (display:grid) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        // Show filtered elements
        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        // Hide elements that are not selected
        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        var btns = document.getElementsByClassName("dayButton");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("dayActive");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace("dayActive", "");
                }
                this.className = "dayButton dayActive";
            });
        }
    </script>
    <section class="ticketSection ticketsThursday show" id="ticketsThursday">
        <?php
        $JazzEvents = [];
        $jazzLogic = new JazzLogic();
        $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-26 00:00:00", "2018-07-27 00:00:00");
        $i = 1;

        $CombiEvents = [];
        $combiLogic = new CombiLogic();
        $CombiEvents = (array)$combiLogic->GetAllCombiEventsByName("All-Access Thursday Jazz", "All-Access Weekend Jazz")
        ?>
        <?php
        foreach ($JazzEvents

        as $jazz) {
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
            <form action="../Logic/ShoppingCartLogic.php" method="post" id="AddToCart<?php echo $jazz->getEvent_ID() ?>">


                <input style="display: none" class="valueArtist" name="artistID" type="text"
                       value="<?php echo $jazz->getEvent_ID(); ?>"/>
                <input style="display: none" class="valueAllAccessDay" name="allAccessDayID" type="text"
                       value="<?php echo $CombiEvents[0]->getEvent_ID(); ?>"/>
                <input style="display: none" class="valueAllAccessWeekend" name="allAccessWeekendID" type="text"
                       value="<?php echo $CombiEvents[1]->getEvent_ID(); ?>"/>


                <section class="ticketGridArea">
                    <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                    <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                    <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountArtist">
                        <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                        <input class="inputArtist" name="amountArtist" type="number" value="0"
                               id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                        <script>
                            addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessDay"><?php echo $CombiEvents[0]->getTicketName(); ?></label>
                    <label class="priceAllAccessDay">€<?php echo number_format((float)$CombiEvents[0]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountAllAccessDay">
                        <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessday" name="amountAllAccessDay" type="number" value="0"
                               id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessWeekend"><?php echo $CombiEvents[1]->getTicketName(); ?></label>
                    <label class="priceAllAccessWeekend">€<?php echo number_format((float)$CombiEvents[1]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountAllAccessWeekend">
                        <button class="minusAllAccessWeekend"
                                id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessWeekend" name="amountAllAccessWeekend" type="number" value="0"
                               id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessWeekend"
                                id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>

                </section>
                <section class="CloseAndAddButton">
                    <section class="closeTicketScreenTicket<?php echo $i ?>"
                             id="closeTicketScreenTicket<?php echo $i ?>">
                        <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                            <img src="images/BuyIcon.png">
                            <label class="closeLabel">Back</label>
                        </a>
                    </section>
                    <button form="AddToCart<?php echo $jazz->getEvent_ID();?>" type="submit" name="AddToShoppingCartMusic" value="submit"
                            class="AddToCartButton"
                            id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                        <img src="images/ShoppingCart.png">
                        <label>Add to Cart</label>
                    </button>
            </form>
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
    <section class="ticketSection ticketsFriday" id="ticketsFriday">
        <?php
        $JazzEvents = [];
        $jazzLogic = new JazzLogic();
        $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-27 00:00:00", "2018-07-28 00:00:00");
        $i = 1;

        $CombiEvents = [];
        $combiLogic = new CombiLogic();
        $CombiEvents = (array)$combiLogic->GetAllCombiEventsByName("All-Access Friday Jazz", "All-Access Weekend Jazz")
        ?>
        <?php
        foreach ($JazzEvents

        as $jazz) {
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
            <form action="../Logic/ShoppingCartLogic.php" method="post" id="AddToCart<?php echo $jazz->getEvent_ID() ?>">


                <input style="display: none" class="valueArtist" name="artistID" type="text"
                       value="<?php echo $jazz->getEvent_ID(); ?>"/>
                <input style="display: none" class="valueAllAccessDay" name="allAccessDayID" type="text"
                       value="<?php echo $CombiEvents[0]->getEvent_ID(); ?>"/>
                <input style="display: none" class="valueAllAccessWeekend" name="allAccessWeekendID" type="text"
                       value="<?php echo $CombiEvents[1]->getEvent_ID(); ?>"/>


                <section class="ticketGridArea">
                    <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                    <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                    <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                    <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountArtist">
                        <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                        <input class="inputArtist" name="amountArtist" type="number" value="0"
                               id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                        <script>
                            addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessDay"><?php echo $CombiEvents[0]->getTicketName(); ?></label>
                    <label class="priceAllAccessDay">€<?php echo number_format((float)$CombiEvents[0]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountAllAccessDay">
                        <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessday" name="amountAllAccessDay" type="number" value="0"
                               id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>
                    <label class="titleAllAccessWeekend"><?php echo $CombiEvents[1]->getTicketName(); ?></label>
                    <label class="priceAllAccessWeekend">€<?php echo number_format((float)$CombiEvents[1]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <section class="amountAllAccessWeekend">
                        <button class="minusAllAccessWeekend"
                                id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                        </button>
                        <input class="inputAllAccessWeekend" name="amountAllAccessWeekend" type="number" value="0"
                               id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                        <button class="plusAllAccessWeekend"
                                id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                        </button>
                        <script>
                            addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                        </script>
                    </section>

                </section>
                <section class="CloseAndAddButton">
                    <section class="closeTicketScreenTicket<?php echo $i ?>"
                             id="closeTicketScreenTicket<?php echo $i ?>">
                        <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                            <img src="images/BuyIcon.png">
                            <label class="closeLabel">Back</label>
                        </a>
                    </section>
                    <button form="AddToCart<?php echo $jazz->getEvent_ID();?>" type="submit" name="AddToShoppingCartMusic" value="submit"
                            class="AddToCartButton"
                            id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                        <img src="images/ShoppingCart.png">
                        <label>Add to Cart</label>
                    </button>
            </form>
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
<section class="ticketSection ticketsSaturday" id="ticketsSaturday">
    <?php
    $JazzEvents = [];
    $jazzLogic = new JazzLogic();
    $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-28 00:00:00", "2018-07-29 00:00:00");
    $i = 1;

    $CombiEvents = [];
    $combiLogic = new CombiLogic();
    $CombiEvents = (array)$combiLogic->GetAllCombiEventsByName("All-Access Saturday Jazz", "All-Access Weekend Jazz")
    ?>
    <?php
    foreach ($JazzEvents

    as $jazz) {
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
        <form action="../Logic/ShoppingCartLogic.php" method="post" id="AddToCart<?php echo $jazz->getEvent_ID() ?>">


            <input style="display: none" class="valueArtist" name="artistID" type="text"
                   value="<?php echo $jazz->getEvent_ID(); ?>"/>
            <input style="display: none" class="valueAllAccessDay" name="allAccessDayID" type="text"
                   value="<?php echo $CombiEvents[0]->getEvent_ID(); ?>"/>
            <input style="display: none" class="valueAllAccessWeekend" name="allAccessWeekendID" type="text"
                   value="<?php echo $CombiEvents[1]->getEvent_ID(); ?>"/>


            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="amountGrid">Amount</label>
                <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist<?php echo $jazz->getEvent_ID() ?>">−</button>
                    <input class="inputArtist" name="amountArtist" type="number" value="0"
                           id="inputArtist<?php echo $jazz->getEvent_ID() ?>"/>
                    <button class="plusArtist" id="plusArtist<?php echo $jazz->getEvent_ID() ?>">+</button>
                    <script>
                        addTicket('minusArtist<?php echo $jazz->getEvent_ID()?>', 'inputArtist<?php echo $jazz->getEvent_ID()?>', 'plusArtist<?php echo $jazz->getEvent_ID()?>')
                    </script>
                </section>
                <label class="titleAllAccessDay"><?php echo $CombiEvents[0]->getTicketName(); ?></label>
                <label class="priceAllAccessDay">€<?php echo number_format((float)$CombiEvents[0]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">−
                    </button>
                    <input class="inputAllAccessday" name="amountAllAccessDay" type="number" value="0"
                           id="inputAllAccessDay<?php echo $jazz->getEvent_ID() ?>"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay<?php echo $jazz->getEvent_ID() ?>">+
                    </button>
                    <script>
                        addTicket('minusAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessDay<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessDay<?php echo $jazz->getEvent_ID()?>')
                    </script>
                </section>
                <label class="titleAllAccessWeekend"><?php echo $CombiEvents[1]->getTicketName(); ?></label>
                <label class="priceAllAccessWeekend">€<?php echo number_format((float)$CombiEvents[1]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend"
                            id="minusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">−
                    </button>
                    <input class="inputAllAccessWeekend" name="amountAllAccessWeekend" type="number" value="0"
                           id="inputAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>"/>
                    <button class="plusAllAccessWeekend"
                            id="plusAllAccessWeekend<?php echo $jazz->getEvent_ID() ?>">+
                    </button>
                    <script>
                        addTicket('minusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $jazz->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $jazz->getEvent_ID()?>')
                    </script>
                </section>

            </section>
            <section class="CloseAndAddButton">
                <section class="closeTicketScreenTicket<?php echo $i ?>"
                         id="closeTicketScreenTicket<?php echo $i ?>">
                    <a href="javascript:SwapBackToTicketScreen('leftSideTicket<?php echo $jazz->getEvent_ID() ?>','rightSideTicket<?php echo $jazz->getEvent_ID() ?>', 'leftSideTicketBuy<?php echo $jazz->getEvent_ID() ?>','rightSideTicketBuy<?php echo $jazz->getEvent_ID() ?>' )">
                        <img src="images/BuyIcon.png">
                        <label class="closeLabel">Back</label>
                    </a>
                </section>
                <button form="AddToCart<?php echo $jazz->getEvent_ID();?>" type="submit" name="AddToShoppingCartMusic" value="submit"
                        class="AddToCartButton"
                        id="AddToCartButton<?php echo $jazz->getEvent_ID() ?>">
                    <img src="images/ShoppingCart.png">
                    <label>Add to Cart</label>
                </button>
        </form>
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
<section class="ticketSection ticketsSunday" id="ticketsSunday">
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
            <section class="ticketGridArea">
                <label style="font-weight: bold; font-size: 1.4375rem" class="titleGrid">Title</label>
                <label style="font-weight: bold; font-size: 1.4375rem" class="priceGrid">Price</label>
                <label class="titleArtist"><?php echo $jazz->getBandName(); ?></label>
                <label class="priceArtist">€<?php echo number_format((float)$jazz->getEvent()->getPrice(), 2, ',', ''); ?></label>
                <label class="titleAllAccessDay">All-Access Sunday</label>
                <label class="priceAllAccessDay">€0,00</label>
                <label class="titleAllAccessWeekend">All jazz events are free to visit on sunday!</label>

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