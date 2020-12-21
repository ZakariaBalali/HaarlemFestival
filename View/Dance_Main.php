<?php
require_once '../Logic/DanceLogic.php';
require_once '../Logic/CombiLogic.php';
?>
<!DOCTYPE HTML>
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
    <p id="subtitle1">COMMING ARTISTS</p>
   
    <!--row 1 -->
    <section class="ArtistsRow1">
        <img src="./images/arminvanbuuren.jpg " href="# "/>
        <img src="./images/hardwell.jpg " href="# "/>
        <img src="./images/afrojack.jpg " href="# "/>

        <!--row 2 -->
        <section class="ArtistsRow2">
            <img src="./images/martingarrix.jpg " href="# "/>
            <img src="./images/nickyromero.jpg " href="# "/>
            <img src="./images/tiesto.jpg " href="# "/>
        </section>
    </section>
    <p id="subtitle2">CHOOSE DAY FOR TICKET</p>

    <!--row Days -->
    <section class="DaysRow">
        <button class="dayButton dayActive" onclick="filterSelection('ticketsFriday')" id="fridayBtn">
            Friday, Jul 27th
        </button>
        <button class="dayButton" onclick="filterSelection('ticketsSaturday')" id="saturdayBtn">
            Saturday, Jul 28th
        </button>
        <button class="dayButton" onclick="filterSelection('ticketsSunday')" id="sundayBtn">
            Sunday, Jul 29th
        </button>
    </section>
    <!-- Filter on day buttons -->

    <script>
        //Function to make the buttons work and filter different ticket section
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("grid-container");
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

    <!--tickets -->

    </div>


    <!-- tickets friday -->
    <section class="grid-container ticketsFriday show" id="ticketsFriday">
        <?php
        $DanceEvents = [];
        $danceLogic = new DanceLogic();
        $DanceEvents = (array)$danceLogic->GetAllDanceEvents("2018-07-27 00:00:00", "2018-07-28 00:00:00");
        //Fill array with the two combi events
        $CombiEvents = [];
        $combiLogic = new CombiLogic();
        $CombiEvents = (array)$combiLogic->GetAllCombiEventsByName("All-Access Friday Dance", "All-Access Weekend Dance");

        $i = 1;
        ?>
        <?php
        foreach ($DanceEvents as $dance) {
            ?>
            <section name="ticket<?php echo $i ?>Title" class="ticket<?php echo $i ?>Title"
                     id="ticket<?php echo $dance->getEvent_ID() ?>Title"><?php echo $dance->getArtistName() ?></section>
            <section class="ticket<?php echo $i ?>Detail" id="ticket<?php echo $dance->getEvent_ID() ?>Detail">

                <section class="leftsideDetail">
                    <img class="imagesLeft" src="images/<?php echo $dance->getImage(); ?>.jpg">
                </section>
                <section class="rightsideDetail">
                    <label class="dayLabel ">Date:<?php echo $dayFormat = date("d/m/y", strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="timeLabel">Time:<?php echo $timeFormat = date('H:i', strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="locationLabel">Location:<?php echo $dance->getLocation() ?></label>
                    <br>
                    <label class="durationLabel">Duration:<?php echo $dance->getDuration() ?>min</label>
                    <br>
                    <label class="priceLabel">Price:€<?php echo number_format((float)$dance->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <br>
                    <br>

                    <button class="buyTicket<?php echo $i ?>Btn"
                            onclick="showBuyTicket('buyTicket<?php echo $dance->getEvent_ID() ?>', 'ticket<?php echo $dance->getEvent_ID() ?>Title')">Buy now
                    </button>

                </section>
            </section>

            <!--Achterkant tickets -->

            <section class="buyTicket<?php echo $i ?>" id="buyTicket<?php echo $dance->getEvent_ID() ?>">
                <!--<section class="buyTicket<?php // echo $i ?>Title" id="BuyTicket<?php //echo $i ?>Title"><?php //echo $dance->getArtistName() ?></section> -->
                <section class="buyTicketLeftside" id="buyTicket1Leftside">
                    <label class="dayLabel">Date:<?php echo $dayFormat = date("d/m/y", strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="timeLabel">Time:<?php echo $timeFormat = date('H:i', strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="locationLabel">Location:<?php echo $dance->getLocation() ?></label>
                    <br>
                    <img class="imagesLeft" src="images/<?php echo $dance->getImage(); ?>.jpg">
                </section>
                <section class="buyTicketRightside" id="buyTicketRightside">
                    <section class="ticketGridArea">

                        <label class="titleRegular">Regular ticket</label>
                        <label class="priceRegular">€<?php echo number_format((float)$dance->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountRegular">
                            <button class="minusRegular" id="minusRegular<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputRegular" type="number" value="0"
                                   id="inputRegular<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusRegular" id="plusRegular<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusRegular<?php echo $dance->getEvent_ID()?>', 'inputRegular<?php echo $dance->getEvent_ID()?>', 'plusRegular<?php echo $dance->getEvent_ID()?>')
                            </script>
                        </section>
                        <label class="titleAllAccessDay"><?php echo $CombiEvents[0]->getTicketName(); ?></label>
                        <label class="priceAllAccessDay">€<?php echo number_format((float)$CombiEvents[0]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountAllAccessDay">
                            <button class="minusAllAccessDay"
                                    id="minusAllAccessDay<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputAllAccessday" type="number" value="0"
                                   id="inputAllAccessDay<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusAllAccessDay"
                                    id="plusAllAccessDay<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusAllAccessDay<?php echo $dance->getEvent_ID()?>', 'inputAllAccessDay<?php echo $dance->getEvent_ID()?>', 'plusAllAccessDay<?php echo $dance->getEvent_ID()?>')
                            </script>
                        </section>
                        <label class="titleAllAccessWeekend"><?php echo $CombiEvents[1]->getTicketName(); ?></label>
                        <label class="priceAllAccessWeekend">€<?php echo number_format((float)$CombiEvents[1]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountAllAccessWeekend">
                            <button class="minusAllAccessWeekend"
                                    id="minusAllAccessWeekend<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputAllAccessWeekend" type="number" value="0"
                                   id="inputAllAccessWeekend<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusAllAccessWeekend"
                                    id="plusAllAccessWeekend<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusAllAccessWeekend<?php echo $dance->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $dance->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $dance->getEvent_ID()?>')
                            </script>

                        </section>
                        <button class="buttonAddTicket<?php echo $i ?>"> Add</button>
                    </section>

                </section>


            </section>

            <?php $i++;
        } ?>
    </section>

    <!--tickets sunday -->

    <section class="grid-container ticketsSaturday" id="ticketsSaturday">
        <?php
        $DanceEvents = [];
        $danceLogic = new DanceLogic();
        $DanceEvents = (array)$danceLogic->GetAllDanceEvents("2018-07-28 00:00:00", "2018-07-29 00:00:00");
    //Fill array with the two combi events
        $CombiEvents = [];
        $combiLogic = new CombiLogic();
        $CombiEvents = (array)$combiLogic->GetAllCombiEventsByName("All-Access Saturday Dance", "All-Access Weekend Dance");

        $i = 1;
        ?>
        <?php
        foreach ($DanceEvents as $dance) {
            ?>
            <section name="ticket<?php echo $i ?>Title" class="ticket<?php echo $i ?>Title"
                     id="ticket<?php echo $dance->getEvent_ID() ?>Title"><?php echo $dance->getArtistName() ?></section>
            <section class="ticket<?php echo $i ?>Detail" id="ticket<?php echo $dance->getEvent_ID() ?>Detail">

                <section class="leftsideDetail">
                    <img class="imagesLeft" src="images/<?php echo $dance->getImage(); ?>.jpg">
                </section>
                <section class="rightsideDetail">
                    <label class="dayLabel ">Date:<?php echo $dayFormat = date("d/m/y", strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="timeLabel">Time:<?php echo $timeFormat = date('H:i', strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="locationLabel">Location:<?php echo $dance->getLocation() ?></label>
                    <br>
                    <label class="durationLabel">Duration:<?php echo $dance->getDuration() ?>min</label>
                    <br>
                    <label class="priceLabel">Price:€<?php echo number_format((float)$dance->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <br>
                    <br>

                    <button class="buyTicket<?php echo $i ?>Btn"
                            onclick="showBuyTicket('buyTicket<?php echo $dance->getEvent_ID() ?>', 'ticket<?php echo $dance->getEvent_ID() ?>Title')">Buy now
                    </button>

                </section>
            </section>

            <!--Achterkant tickets -->

            <section class="buyTicket<?php echo $i ?>" id="buyTicket<?php echo $dance->getEvent_ID() ?>">
                <!--<section class="buyTicket<?php // echo $i ?>Title" id="BuyTicket<?php //echo $i ?>Title"><?php //echo $dance->getArtistName() ?></section> -->
                <section class="buyTicketLeftside" id="buyTicket1Leftside">
                    <label class="dayLabel">Date:<?php echo $dayFormat = date("d/m/y", strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="timeLabel">Time:<?php echo $timeFormat = date('H:i', strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="locationLabel">Location:<?php echo $dance->getLocation() ?></label>
                    <br>
                    <img class="imagesLeft" src="images/<?php echo $dance->getImage(); ?>.jpg">
                </section>
                <section class="buyTicketRightside" id="buyTicketRightside">
                    <section class="ticketGridArea">

                        <label class="titleRegular">Regular ticket</label>
                        <label class="priceRegular">€<?php echo number_format((float)$dance->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountRegular">
                            <button class="minusRegular" id="minusRegular<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputRegular" type="number" value="0"
                                   id="inputRegular<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusRegular" id="plusRegular<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusRegular<?php echo $dance->getEvent_ID()?>', 'inputRegular<?php echo $dance->getEvent_ID()?>', 'plusRegular<?php echo $dance->getEvent_ID()?>')
                            </script>
                        </section>
                        <label class="titleAllAccessDay"><?php echo $CombiEvents[0]->getTicketName(); ?></label>
                        <label class="priceAllAccessDay">€<?php echo number_format((float)$CombiEvents[0]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountAllAccessDay">
                            <button class="minusAllAccessDay"
                                    id="minusAllAccessDay<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputAllAccessday" type="number" value="0"
                                   id="inputAllAccessDay<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusAllAccessDay"
                                    id="plusAllAccessDay<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusAllAccessDay<?php echo $dance->getEvent_ID()?>', 'inputAllAccessDay<?php echo $dance->getEvent_ID()?>', 'plusAllAccessDay<?php echo $dance->getEvent_ID()?>')
                            </script>
                        </section>
                        <label class="titleAllAccessWeekend"><?php echo $CombiEvents[1]->getTicketName(); ?></label>
                        <label class="priceAllAccessWeekend"> €<?php echo number_format((float)$CombiEvents[1]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountAllAccessWeekend">
                            <button class="minusAllAccessWeekend"
                                    id="minusAllAccessWeekend<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputAllAccessWeekend" type="number" value="0"
                                   id="inputAllAccessWeekend<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusAllAccessWeekend"
                                    id="plusAllAccessWeekend<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusAllAccessWeekend<?php echo $dance->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $dance->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $dance->getEvent_ID()?>')
                            </script>

                        </section>
                        <button class="buttonAddTicket<?php echo $i ?>"> Add</button>
                    </section>

                </section>


            </section>

            <?php $i++;
        } ?>
    </section>
    <section class="grid-container ticketsSunday" id="ticketsSunday">
        <?php
        $DanceEvents = [];
        $danceLogic = new DanceLogic();
        $DanceEvents = (array)$danceLogic->GetAllDanceEvents("2018-07-29 00:00:00", "2018-07-30 00:00:00");
        //Fill array with the two combi events
        $CombiEvents = [];
        $combiLogic = new CombiLogic();
        $CombiEvents = (array)$combiLogic->GetAllCombiEventsByName("All-Access Sunday Dance", "All-Access Weekend Dance");
        $i = 1;
        ?>
        <?php
        foreach ($DanceEvents as $dance) {
            ?>
            <section name="ticket<?php echo $i ?>Title" class="ticket<?php echo $i ?>Title"
                     id="ticket<?php echo $dance->getEvent_ID() ?>Title"><?php echo $dance->getArtistName() ?></section>
            <section class="ticket<?php echo $i ?>Detail" id="ticket<?php echo $dance->getEvent_ID() ?>Detail">

                <section class="leftsideDetail">
                    <img class="imagesLeft" src="images/<?php echo $dance->getImage(); ?>.jpg">
                </section>
                <section class="rightsideDetail">
                    <label class="dayLabel ">Date:<?php echo $dayFormat = date("d/m/y", strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="timeLabel">Time:<?php echo $timeFormat = date('H:i', strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="locationLabel">Location:<?php echo $dance->getLocation() ?></label>
                    <br>
                    <label class="durationLabel">Duration:<?php echo $dance->getDuration() ?>min</label>
                    <br>
                    <label class="priceLabel">Price:€<?php echo number_format((float)$dance->getEvent()->getPrice(), 2, ',', ''); ?></label>
                    <br>
                    <br>

                    <button class="buyTicket<?php echo $i ?>Btn"
                            onclick="showBuyTicket('buyTicket<?php echo $dance->getEvent_ID() ?>', 'ticket<?php echo $dance->getEvent_ID() ?>Title')">Buy now
                    </button>

                </section>
            </section>

            <!--Achterkant tickets -->

            <section class="buyTicket<?php echo $i ?>" id="buyTicket<?php echo $dance->getEvent_ID() ?>">
                <!--<section class="buyTicket<?php // echo $i ?>Title" id="BuyTicket<?php //echo $i ?>Title"><?php //echo $dance->getArtistName() ?></section> -->
                <section class="buyTicketLeftside" id="buyTicket1Leftside">
                    <label class="dayLabel">Date:<?php echo $dayFormat = date("d/m/y", strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="timeLabel">Time:<?php echo $timeFormat = date('H:i', strtotime($dance->getEvent()->getStartTime())); ?></label>
                    <br>
                    <label class="locationLabel">Location:<?php echo $dance->getLocation() ?></label>
                    <br>
                    <img class="imagesLeft" src="images/<?php echo $dance->getImage(); ?>.jpg">
                </section>
                <section class="buyTicketRightside" id="buyTicketRightside">
                    <section class="ticketGridArea">

                        <label class="titleRegular">Regular ticket</label>
                        <label class="priceRegular">€<?php echo number_format((float)$dance->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountRegular">
                            <button class="minusRegular" id="minusRegular<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputRegular" type="number" value="0"
                                   id="inputRegular<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusRegular" id="plusRegular<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusRegular<?php echo $dance->getEvent_ID()?>', 'inputRegular<?php echo $dance->getEvent_ID()?>', 'plusRegular<?php echo $dance->getEvent_ID()?>')
                            </script>
                        </section>
                        <label class="titleAllAccessDay"><?php echo $CombiEvents[0]->getTicketName(); ?></label>
                        <label class="priceAllAccessDay">€<?php echo number_format((float)$CombiEvents[0]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountAllAccessDay">
                            <button class="minusAllAccessDay"
                                    id="minusAllAccessDay<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputAllAccessday" type="number" value="0"
                                   id="inputAllAccessDay<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusAllAccessDay"
                                    id="plusAllAccessDay<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusAllAccessDay<?php echo $dance->getEvent_ID()?>', 'inputAllAccessDay<?php echo $dance->getEvent_ID()?>', 'plusAllAccessDay<?php echo $dance->getEvent_ID()?>')
                            </script>
                        </section>
                        <label class="titleAllAccessWeekend"><?php echo $CombiEvents[1]->getTicketName(); ?></label>
                        <label class="priceAllAccessWeekend">€<?php echo number_format((float)$CombiEvents[1]->getEvent()->getPrice(), 2, ',', ''); ?></label>
                        <section class="amountAllAccessWeekend">
                            <button class="minusAllAccessWeekend"
                                    id="minusAllAccessWeekend<?php echo $dance->getEvent_ID() ?>">−
                            </button>
                            <input class="inputAllAccessWeekend" type="number" value="0"
                                   id="inputAllAccessWeekend<?php echo $dance->getEvent_ID() ?>"/>
                            <button class="plusAllAccessWeekend"
                                    id="plusAllAccessWeekend<?php echo $dance->getEvent_ID() ?>">+
                            </button>
                            <script>
                                addTicket('minusAllAccessWeekend<?php echo $dance->getEvent_ID()?>', 'inputAllAccessWeekend<?php echo $dance->getEvent_ID()?>', 'plusAllAccessWeekend<?php echo $dance->getEvent_ID()?>')
                            </script>

                        </section>
                        <button class="buttonAddTicket<?php echo $i ?>"> Add</button>
                    </section>

                </section>


            </section>

            <?php $i++;
        } ?>
    </section>

</section>


</body>
</html>