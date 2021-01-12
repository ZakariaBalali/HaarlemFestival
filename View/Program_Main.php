<?php
require_once '../Model/Historic.php';
require_once '../Logic/HistoricLogic.php';
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
            <input id="checkBoxDance" type="checkbox" checked value="dance" onclick="checkBox('checkBoxDance','dance')" /> Dance
        </li>
        <li>
            <input id="checkBoxFood" type="checkbox" checked value="food" onclick="checkBox('checkBoxFood','food')"/> Food
        </li>
        <li>
            <input id="checkBoxJazz" type="checkbox" checked value="jazz" onclick="checkBox('checkBoxJazz','jazz')"/> Jazz
        </li>
        <li>
            <input id="checkBoxHistoric" type="checkbox" checked value="historic" onclick="checkBox('checkBoxHistoric','historic')"/> Historic
        </li>
    </section>
    <section class="dayFilter">
        <h4 id="dayFilterTitle">Showtimes</h4>
        <br>
        <button id="allDaysButton">All days</button>
        <button id="26thButton" value="2018-07-26 00:00:00">Thu Jul 26th</button>
        <button id="27thButton" value="2018-07-27 00:00:00">Fri Jul 27th</button>
        <button id="28thButton" value="2018-07-28 00:00:00">Sat Jul 28th</button>
        <button id="29thButton" value="2018-07-29 00:00:00">Sun Jul 29th</button>

    </section>
    <section class= "programSection">
        <section class="dance" id="dance">
            <section class= "historicLeftSide">
            </section>
            <section class= "historicRightSide">
                <p>Haarlem Dance</p>
            </section>
        </section>
        <section class="food" id="food">
            <p>Haarlem Food</p>
        </section>
        <section class="jazz" id="jazz">
            <p>Haarlem Jazz</p>
        </section>
        <section class="historic" id="historic">
            <?php
                $historicTour = [];
                $historicLogic = new HistoricLogic();
                $historicTour = (array)$historicLogic->GetProgramByDay("2018-07-26 00:00:00", "2018-07-26 00:00:00");
            ?>
            <section class= "historicLeftSide">
                <img src='images/historic_background_homepage.jpg' id="historicImage">
            </section>
            <section class= "historicRightSide">
                <p>Haarlem Historic</p>
                <?php foreach ($historicTour as $tour) { ?>
                <button class=Historicbuttons type="button" value="<?php echo $tour->getEvent_ID()?>"><?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime()));?>- <?php  echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getEndTime())); ?></button>
                <?php }?>
            </section>
            
        </section>
    </section>  



</section>


</body>
</html>