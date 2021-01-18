<?php
session_start()
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Program</title>
    <meta name="description" content="Haarlem MyProgram">
    <meta name="keywords" content="Create your own Programme">
    <link href="css/MyProgram.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/MyProgramScript.js"></script>
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
            <input id="Dance" type="checkbox" checked value="dance" onclick="checkBox(this.id)" /> Dance
        </li>
        <li>
            <input id="Food" type="checkbox" checked value="food" onclick="checkBox(this.id)"/> Food
        </li>
        <li>
            <input id="Jazz" type="checkbox" checked value="jazz" onclick="checkBox(this.id)"/> Jazz
        </li>
        <li>
            <input id="Historic" type="checkbox" checked value="historic" onclick="checkBox(this.id)"/> Historic
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

    <?php
    if (isset($_SESSION['Products'])) { 
        ?>
    <?php foreach ($_SESSION['Products'] as $item){?>
            <ul>
                <section id="<?php echo $timeFormat = date('D', strtotime($item['StartTime'])); ?>" name = "<?php echo $item['EventName']?>" class="box <?php echo $item['EventName']; echo "\r\n"; echo $timeFormat = date('D', strtotime($item['StartTime'])); ?>">
                    <section class="<?php echo $item['EventName']?>" id="eventBox">
                        <p id= eventName>Haarlem <?php echo $item['EventName']?></p>
                    </section>
                    <section id="ticketBoxLeft">
                        <img src=
                            <?php if ($item['EventName']=="Dance" || $item['EventName']== "Combi Dance") {echo'images/dance_background_homepage.jpg';}
                            elseif ($item['EventName']=="Jazz" || $item['EventName']== "Combi Jazz") {echo'images/jazz_background_homepage.jpg';}
                            elseif ($item['EventName']=="Food") {echo'images/food_background_homepage.jpg';}
                            elseif ($item['EventName']=="Historic") {echo'images/historic_background_homepage.jpg';}
                            ?> id="ticketImage">
                    </section>
                    <section id="ticketBoxRight">
                        <p id="ticketTitle"><?php echo $item['ProductName']; echo "\r\n";?></p>
                        <p id="ticketDate">Date: <?php echo $timeFormat = date('D d F ', strtotime($item['StartTime'])); ?></p>
                        <p id="ticetTimeSlot"> StartTime: <?php echo $timeFormat = date('H:i', strtotime($item['StartTime'])); ?></p>
                    </section>
                </section>
            </ul>
    <?php }?>

    <?php } else {?> <p id="warning"><?php echo" Add tickets to shoppingcart to see myProgam";}?></p>



</section>


</body>
</html>