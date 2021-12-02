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
    <link href="css/JazzMain.css" rel="stylesheet" type="text/css">
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
    <a class="active" href="Jazz_Main.php">Jazz</a>
    <a href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">

    <section class="lineupRoster">
        <h1>Haarlem Jazz Line-up</h1>
        <section class="JazzButtons">
            <section class="activeButton">
                <a href="Jazz_Main.php">Jazz Line-up</a>
            </section>
            <section class="notActiveButton">
                <a href="Jazz_Ticketpage.php">Tickets</a>
            </section>
        </section>


        <section class="lineupThursday">
            <section class="titleThursday">
                Thursday
            </section>
            <?php   $JazzEvents = [];
            $jazzLogic = new JazzLogic();
            $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-26 00:00:00", "2018-07-27 00:00:00");
            $i =1;
            foreach ($JazzEvents

                     as $jazz) {
                ?>
          <section class="artist<?php echo $i; ?>">
                <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
                <label class="title<?php echo $i;?>"><?php echo $jazz->getBandName() ?> </label>
                <label class="time<?php echo $i;?>"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                    -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
            </section>
            <?php $i++;
            } ?>
        </section>

        <section class="lineupFriday">
            <section class="titleFriday">
                Friday
            </section>
            <?php   $JazzEvents = [];
            $jazzLogic = new JazzLogic();
            $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-27 00:00:00", "2018-07-28 00:00:00");
            foreach ($JazzEvents

                     as $jazz) {
                ?>
              <section class="artist<?php echo $i; ?>">
                    <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
                    <label class="title<?php echo $i;?>"><?php echo $jazz->getBandName() ?> </label>
                    <label class="time<?php echo $i;?>"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                        -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                </section>
                <?php $i++;
            } ?>
        </section>
        <section class="lineupSaturday">
            <section class="titleSaturday">
                Saturday
            </section>
            <?php   $JazzEvents = [];
            $jazzLogic = new JazzLogic();
            $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-28 00:00:00", "2018-07-29 00:00:00");
            foreach ($JazzEvents

                     as $jazz) {
                ?>
              <section class="artist<?php echo $i; ?>">
                    <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
                    <label class="title<?php echo $i;?>"><?php echo $jazz->getBandName() ?> </label>
                    <label class="time<?php echo $i;?>"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                        -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                </section>
                <?php $i++;
            } ?>

        </section>
        <section class="lineupSunday">
            <section class="titleSunday">
                Sunday
            </section>
            <?php   $JazzEvents = [];
            $jazzLogic = new JazzLogic();
            $JazzEvents = (array)$jazzLogic->GetAllJazzEvents("2018-07-29 00:00:00", "2018-07-30 00:00:00");
            foreach ($JazzEvents

                     as $jazz) {
                ?>
              <section class="artist<?php echo $i; ?>">
                    <img src="images/<?php echo $jazz->getImage(); ?>.jpg">
                    <label class="title<?php echo $i;?>"><?php echo $jazz->getBandName() ?> </label>
                    <label class="time<?php echo $i;?>"><?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getStartTime())); ?>
                        -<?php echo $timeFormat = date('H:i', strtotime($jazz->getEvent()->getEndTime())); ?></label>
                </section>
                <?php $i++;
            } ?>

        </section>
    </section>
</section>
</body>
</html>