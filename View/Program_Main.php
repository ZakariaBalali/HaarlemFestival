<?php
require_once '../Model/Jazz.php';
require_once '../Model/Historic.php';
require_once '../Model/Food.php';
require_once '../Model/Dance.php';
require_once '../Logic/JazzLogic.php';
require_once '../Logic/DanceLogic.php';
require_once '../Logic/HistoricLogic.php';
require_once '../Logic/FoodLogic.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Program</title>
    <meta name="description" content="Haarlem Program">
    <meta name="keywords" content="Create your own Programme">
    <link href="css/ProgramMain.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/Program_MainScript.js"></script>
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
    <a class="active" href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">
    <section class="buttons">
        <section class="programButton">
            <a href="Program_Main.php">PROGRAM</a>
        </section>
        <section class="myProgramButton">
            <a href="MyProgram.php">MY PROGRAM</a>
        </section>  
    </section>

    <section class="eventFilter">
        <h4>Events</h4>
        <li>
            <input id="checkBoxDance" type="checkbox" checked value="dance" onclick="checkBox(this.id,'dance')" /> Dance
        </li>
        <li>
            <input id="checkBoxFood" type="checkbox" checked value="food" onclick="checkBox(this.id,'food')"/> Food
        </li>
        <li>
            <input id="checkBoxJazz" type="checkbox" checked value="jazz" onclick="checkBox(this.id,'jazz')"/> Jazz
        </li>
        <li>
            <input id="checkBoxHistoric" type="checkbox" checked value="historic" onclick="checkBox(this.id,'historic')"/> Historic
        </li>
    </section>
    <section class="dayFilter">
        <h4 id="dayFilterTitle">Showtimes</h4>
        <br>
        <button id="allButton" value="All" onclick="filterButtons(this.id)">All days</button>
        <button id="button26th" value="2018-07-26 00:00:00" onclick="filterButtons(this.id)" >Thu Jul 26th</button>
        <button id="button27th" value="2018-07-27 00:00:00" onclick="filterButtons(this.id)" >Fri Jul 27th</button>
        <button id="button28th" value="2018-07-28 00:00:00" onclick="filterButtons(this.id)" >Sat Jul 28th</button>
        <button id="button29th" value="2018-07-29 00:00:00" onclick="filterButtons(this.id)" >Sun Jul 29th</button>

    </section>
    <section class= "programSection">
        <section class="dance" id="dance">
            <?php
                $danceTickets = [];
                $danceLogic = new DanceLogic();
                $danceTickets = (array)$danceLogic->GetAllDanceTickets();
            ?>
            <section class= "danceLeftSide">
                <p>Haarlem Dance </p>
                <img src='images/dance_background_homepage.jpg' id="danceImage">
            </section>
            <!-- dance program Thursday 26th -->
            <section class= "danceRightSide thursday" id="danceThursday">
                <p>Thursday 26 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($danceTickets as $ticket) {
                            if($ticket->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-27 00:00:00"){
                                $i++?>
                                <button class=Dancebuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getArtistName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- dance program Thursday 27th -->
            <section class= "danceRightSide friday" id="danceFriday">
                <p>Friday 27 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($danceTickets as $ticket) {
                            if($ticket->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-28 00:00:00"){
                                $i++?>
                                <button class=Dancebuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getArtistName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- dance program Satday 28th -->
            <section class= "danceRightSide saturday" id="danceSaturday">
                <p>Saturday 28 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($danceTickets as $ticket) {
                            if($ticket->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-29 00:00:00"){
                                $i++?>
                                <button class=Dancebuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getArtistName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- dance program Sunday 29th -->
            <section class= "danceRightSide sunday" id="danceSunday">
                <p>Sunday 29 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($danceTickets as $ticket) {
                            if($ticket->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-30 00:00:00"){
                                $i++?>
                                <button class=Dancebuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getArtistName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
        </section>
        <section class="food" id="food">
            <?php
                $foodEvents = [];
                $foodLogic = new FoodLogic();
                $foodEvents = (array)$foodLogic->GetAllFoodEvents();
            ?>
            <section class= "foodLeftSide">
                <p>Haarlem Food </p>
                <img src='images/food_background_homepage.jpg' id="foodImage">
            </section>
            <!-- food program Thursday 26th -->
            <section class= "foodRightSide thursday" id="foodThursday">
                <p>Thursday 26 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($foodEvents as $event) { 
                            if($event->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $event->getEvent()->getEndTime()<="2018-07-27 00:00:00"){
                                $i++?>
                                <button class=Foodbuttons type="submit" value="<?php echo $event->getEvent_ID()?>">
                                <b><?php echo $event->getRestaurantName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($event->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($event->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- food program Friday 27th -->
            <section class= "foodRightSide friday" id="foodFriday">
                <p>Friday 27 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($foodEvents as $event) { 
                            if($event->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $event->getEvent()->getEndTime()<="2018-07-28 00:00:00"){
                                $i++?>
                                <button class=Foodbuttons type="submit" value="<?php echo $event->getEvent_ID()?>">
                                <b><?php echo $event->getRestaurantName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($event->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($event->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- food program Saturday 28th -->
            <section class= "foodRightSide saturday" id="foodSaturday">
                <p>Saturday 28 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($foodEvents as $event) { 
                            if($event->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $event->getEvent()->getEndTime()<="2018-07-29 00:00:00"){
                                $i++?>
                                <button class=Foodbuttons type="submit" value="<?php echo $event->getEvent_ID()?>">
                                <b><?php echo $event->getRestaurantName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($event->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($event->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <section class= "foodRightSide sunday" id="foodSunday">
                <p>Sunday 29 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($foodEvents as $event) { 
                            if($event->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $event->getEvent()->getEndTime()<="2018-07-30 00:00:00"){
                                $i++?>
                                <button class=Foodbuttons type="submit" value="<?php echo $event->getEvent_ID()?>">
                                <b><?php echo $event->getRestaurantName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($event->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($event->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
        </section>
        <section class="jazz" id="jazz">
            <?php
                $jazzTickets = [];
                $jazzLogic = new JazzLogic();
                $jazzTickets = (array)$jazzLogic->GetAllJazzTickets();
            ?>
            <section class= "jazzLeftSide">
                <p>Haarlem Jazz </p>
                <img src='images/jazz_background_homepage.jpg' id="jazzImage">
            </section>
            <!-- jazz program Thursday 26th -->
            <section class= "jazzRightSide thursday" id="jazzThursday">
                <p>Thursday 26 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($jazzTickets as $ticket) { 
                            if($ticket->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-27 00:00:00"){
                                $i++?>
                                <button class=Jazzbuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getBandName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- jazz program Friday 27th -->
            <section class= "jazzRightSide friday" id="jazzFriday">
                <p>Friday 27 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($jazzTickets as $ticket) { 
                            if($ticket->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-28 00:00:00"){
                                $i++?>
                                <button class=Jazzbuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getBandName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- jazz program Saturday 28th -->
            <section class= "jazzRightSide saturday" id="jazzSaturday">
                <p>Saturday 28 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($jazzTickets as $ticket) { 
                            if($ticket->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-29 00:00:00"){
                                $i++?>
                                <button class=Jazzbuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getBandName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
            <!-- jazz program Thursday 29th -->
            <section class= "jazzRightSide sunday" id="jazzSunday">
                <p>Sunday 29 July</p>
                    <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                        <?php 
                        $i=0;
                        foreach ($jazzTickets as $ticket) { 
                            if($ticket->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $ticket->getEvent()->getEndTime()<="2018-07-30 00:00:00"){
                                $i++?>
                                <button class=Jazzbuttons type="submit" value="<?php echo $ticket->getEvent_ID()?>">
                                <b><?php echo $ticket->getBandName() ?></b><br>
                                <?php echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($ticket->getEvent()->getEndTime())); ?>
                            </button>
                            <?php if($i==3){echo "<br>"; $i=0;}
                            }
                        }?>
                    <!-- </form> -->
            </section>
        </section>
        <section class="historic" id="historic">
            <?php
                $historicTours = [];
                $historicLogic = new HistoricLogic();
                $historicTours = (array)$historicLogic->GetAllHistoricTours();
            ?>
            <section class= "historicLeftSide">
                <p>Haarlem Historic </p>
                <img src='images/historic_background_homepage.jpg' id="historicImage">
            </section>
            <!-- historic program Thursday 26th -->
            <section class= "historicRightSide thursday" id="historicThursday">
                <p>Thursday 26 July</p>
                <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                    <?php 
                    $i=0;
                    foreach ($historicTours as $tour) { 
                        if($tour->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-27 00:00:00"){
                            $i++?>
                            <button class=Historicbuttons type="submit" name="Program" value="<?php echo $tour->getEvent_ID()?>">
                            <img src=
                                <?php if ($tour->getLanguage()=="english") {echo'images/historic/english_flag.jpg';}
                                elseif ($tour->getLanguage()=="dutch") {echo'images/historic/dutch_flag.jpg';}
                                elseif ($tour->getLanguage()=="chinese") {echo'images/historic/chinees_flag.jpg';}
                                ?> class="historicIcon">
                            <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getEndTime())); ?>
                        </button>
                        <?php if($i==3){echo "<br>"; $i=0;}
                        }
                    }?>
                <!-- </form> -->
            </section>
            <?php //echo "<br>";?>

            <!-- historic program Friday 27th -->
            <section class= "historicRightSide friday" id="historicFriday">
                <p>Friday 27 July</p>
                <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                    <?php 
                    $i=0;
                    foreach ($historicTours as $tour) { 
                        if($tour->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-28 00:00:00"){
                            $i++?>
                            <button class=Historicbuttons type="submit" name="Program" value="<?php echo $tour->getEvent_ID()?>">
                            <img src=
                                <?php if ($tour->getLanguage()=="english") {echo'images/historic/english_flag.jpg';}
                                elseif ($tour->getLanguage()=="dutch") {echo'images/historic/dutch_flag.jpg';}
                                elseif ($tour->getLanguage()=="chinese") {echo'images/historic/chinees_flag.jpg';}
                                ?> class="historicIcon">
                            <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getEndTime())); ?>
                        </button>
                        <?php if($i==3){echo "<br>"; $i=0;}
                        }
                    }?>
                <!-- </form> -->
            </section>

            <!-- historic program Saturday 28th -->
            <section class= "historicRightSide friday" id="historicSaturday">
                <p>Saturday 28 July</p>
                <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                    <?php 
                    $i=0;
                    foreach ($historicTours as $tour) { 
                        if($tour->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-29 00:00:00"){
                            $i++?>
                            <button class=Historicbuttons type="submit" name="Program" value="<?php echo $tour->getEvent_ID()?>">
                            <img src=
                                <?php if ($tour->getLanguage()=="english") {echo'images/historic/english_flag.jpg';}
                                elseif ($tour->getLanguage()=="dutch") {echo'images/historic/dutch_flag.jpg';}
                                elseif ($tour->getLanguage()=="chinese") {echo'images/historic/chinees_flag.jpg';}
                                ?> class="historicIcon">
                            <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getEndTime())); ?>
                        </button>
                        <?php if($i==3){echo "<br>"; $i=0;}
                        }
                    }?>
                <!-- </form> -->
            </section>

            <!-- historic program Sunday 29th -->
            <section class= "historicRightSide friday" id="historicSunday">
                <p>Sunday 29 July</p>
                <!-- <form action="../Logic/ShoppingCartLogic.php" method="post" id="programForm" class="programForm"> -->
                    <?php 
                    $i=0;
                    foreach ($historicTours as $tour) { 
                        if($tour->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-30 00:00:00"){
                            $i++?>
                            <button class=Historicbuttons type="submit" name="Program" value="<?php echo $tour->getEvent_ID()?>">
                            <img src=
                                <?php if ($tour->getLanguage()=="english") {echo'images/historic/english_flag.jpg';}
                                elseif ($tour->getLanguage()=="dutch") {echo'images/historic/dutch_flag.jpg';}
                                elseif ($tour->getLanguage()=="chinese") {echo'images/historic/chinees_flag.jpg';}
                                ?> class="historicIcon">
                            <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getEndTime())); ?>
                        </button>
                        <?php if($i==3){echo "<br>"; $i=0;}
                        }
                    }?>
                <!-- </form> -->
            </section>
    </section>  



</section>


</body>
</html>