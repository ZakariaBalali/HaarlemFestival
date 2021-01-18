<?php
require_once '../Model/Historic.php';
require_once '../Logic/HistoricLogic.php';
?>
<!DOCTYPE HTML>
<?php
        // // cookie will expire when the browser close
        // if(isset($_GET['day'])){
        //     $cookie_name = "day";
        //     $cookie_value = $_GET['day'];
        //     setcookie($cookie_name, $cookie_value);
        // }
        // else if(!isset($_GET['day'])){
        //     if(!isset($_COOKIE["day"])) {
        //         $cookie_name = "day";
        //         $cookie_value = "2018-07-26 00:00:00";
        //         setcookie($cookie_name, $cookie_value);
        //     }
        // }

        // if(isset($_GET['language'])){
        //     $cookie_name = "language";
        //     $cookie_value = $_GET['language'];
        //     setcookie($cookie_name, $cookie_value);
        // }
        // else if(!isset($_GET['language'])){
        //     if(!isset($_COOKIE["language"])) {
        //         $cookie_name = "language";
        //         $cookie_value = "english";
        //         setcookie($cookie_name, $cookie_value);
        //     }
        // }
    ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Historic</title>
    <meta name="description" content="Haarlem Historic">
    <meta name="keywords" content="History, Haarlem, Buildings">
    <link href="css/HistoricMain.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/HistoricScript.js"></script>
    <script src="js/MainScript.js"></script>
</head>
<body>
<?php
    //creating new historic logic
    $historicLogic = new HistoricLogic();
    $historicTour = (array)$historicLogic->GetAllHistoricTours();
?>
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
    <a class="active"  href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">

    <!-- <section id="popupAddedTicket" class="popupAddedTicket">
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
                        <th>Historic English</th>
                        <th>Sat Jul 28th</th>
                        <th>13:00-15:00</th>
                        <th>€17,50</th>
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
    </section> -->

    <section class=eventName>
        <h2>Haarlem Historic tour</h2>
    </section>
    <section class="infoBox">
        <section id=startingPoint>
            <h3>Startingpoint</h3>
            <p>The tour starts near of the ‘Church of St. Bavo’, ‘Grote Markt’ in the centre of Haarlem.</p>
        </section>
        <section id=duration>
            <h3>Duration | Distance</h3>
            <p>2,5 hours (with a 15-minute break) | 4 km (2.4 ml)</p>
        </section>
        <section id=covidMeasures>
            <h3>Covid-19 safety measures</h3>
            <p>1.5 m distance<br>General hand and face hygiene<br>Screening for COVID-19 symptoms before entry</p>
        </section>
        <section id=price>
            <h3>Price</h3>
            <p>Normal ticket €17,50,- p.p.<br>Family ticket €60,- (4 participants)</p>
        </section>
        <section id=additionalInfo>
            <h3>Additional information</h3>
            <p>Due to the nature of this walk participants must be a <B STYLE="text-decoration: underline;">minimum of 12 years old</B> and <B STYLE="text-decoration: underline;">no strollers are allowed</B></p>
        </section>
    </section>
    <section class="programBox">
        <section id=programInfo>
            <h3>Program</h3>
            <p>We offer multiple programs. The tours will be in Dutch, English or Chinese. All tours start at the St. Bavo. (Note that some days do not include all different languages).<br><br>The price of a normal ticket is €17,50 euros.<br>The price of a family ticket is €60 euros. A family ticket is for 4 persons and is 14% cheaper than a normal ticket.<br>Reservation is mandatory</p>
        </section>
        <p id="programQuestion"><br>Select a day and language to see the program</p>
        <button id="button26th" name="day" value="2018-07-26 00:00:00" onclick="buttonClick(this.id)" selected>Thu 26 July</button>
        <button id="button27th" name="day" value="2018-07-27 00:00:00" onclick="buttonClick(this.id)">Fri 27 July</button>
        <button id="button28th" name="day" value="2018-07-28 00:00:00" onclick="buttonClick(this.id)">Sat 28 July</button>
        <button id="button29th" name="day" value="2018-07-29 00:00:00" onclick="buttonClick(this.id)">Sun 29 July</button>
        <br>
        <label class="radioButtonLanguage">
            <input onchange="radioButtonClick(this.id)" type="radio" id="btnEnglish" name="language" value="english" checked>English
        </label>
        <label class="radioButtonLanguage">
            <input onchange="radioButtonClick(this.id)" type="radio" id="btnDutch" name="language" value="dutch">Dutch
        </label>
        <label class="radioButtonLanguage">
            <input onchange="radioButtonClick(this.id)" type="radio" id="btnChinese" name="language" value="chinese">Chinese
        </label>

        <!-- program 26th  -->    
        <table class= "programTable" id="historicThursdayEnglish">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-27 00:00:00" && $tour->getLanguage()=="english"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }}?>
        </table>
        <table class= "programTable" id="historicThursdayDutch">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-27 00:00:00" && $tour->getLanguage()=="dutch"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicThursdayChinese">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-26 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-27 00:00:00" && $tour->getLanguage()=="chinese"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>

        <!-- program 27th  -->    
        <table class= "programTable" id="historicFridayEnglish">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-28 00:00:00" && $tour->getLanguage()=="english"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicFridayDutch">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-28 00:00:00" && $tour->getLanguage()=="dutch"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicFridayChinese">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-27 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-28 00:00:00" && $tour->getLanguage()=="chinese"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>

        <!-- program 28th  -->    
        <table class= "programTable" id="historicSaturdayEnglish">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-29 00:00:00" && $tour->getLanguage()=="english"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicSaturdayDutch">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-29 00:00:00" && $tour->getLanguage()=="dutch"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicSaturdayChinese">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-28 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-29 00:00:00" && $tour->getLanguage()=="chinese"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>

        <!-- program 30th  -->    
        <table class= "programTable" id="historicSundayEnglish">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-30 00:00:00" && $tour->getLanguage()=="english"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicSundayDutch">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-30 00:00:00" && $tour->getLanguage()=="dutch"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <table class= "programTable" id="historicSundayChinese">
            <tr><th>Time</th><th>Language</th><th>Seats left</th></tr>
            <?php 
                foreach ($historicTour as $tour) {
                    if($tour->getEvent()->getStartTime()>="2018-07-29 00:00:00" && $tour->getEvent()->getEndTime()<="2018-07-30 00:00:00" && $tour->getLanguage()=="chinese"){?>
                        <tr>
                            <td> <?php echo $timeFormat = date('H:i', strtotime($tour->getEvent()->getStartTime())); ?> </td>
                            <td> <?php echo $tour->getLanguage() ?> </td>
                            <td> <?php echo $tour->getEvent()->getSeats() ?> </td>
                        </tr>
            <?php }} ?>
        </table>
        <button id="buyButton" onclick="showPopUp('popupBuyTicket')">Get your tickets now!</button>
    </section>

    <!-- TicketpopUp -->
    <form action="../Logic/ShoppingCartLogic.php" method="post" id="popupBuyTicket" class="popupBuyTicket">
        <section id="popupContent">
            <h1>Order your tickets for the historic event</h1>
            <section class=orderTicket>
                <label class="selectDateText" for="selectDate">Select day:</label>
                <select id="SelectDate" name="selectDate" required>
                    <option value="" disabled selected>Select a day</option>
                    <option name="day" value='2018-07-26'>Thur 26 July</option>
                    <option name="day" value='2018-07-27'>Fri 27 July</option>
                    <option name="day" value='2018-07-28'>Sat 28 July</option>
                    <option name="day" value='2018-07-29'>Sun 29 July</option>            
                </select>
                <br>
                <br>
                <label class="selectTimeText" for="selectTime">Select Time:</label>
                <select id="SelectTime" name="selectTime" required>
                    <option value="" disabled selected>Select a timeslot</option>
                    <option name="time" value='10:00:00'>10:00</option>
                    <option name="time" value='13:00:00'>13:00</option>
                    <option name="time" value='16:00:00'>16:00</option>       
                </select>
                <?php
                    // $Tickets = (array)$historicLogic->GetTicketByDay($_POST["selectDate"] . ' ' . $_POST["selectTime"]);
                    // var_dump($Tickets); 
                ?>
                <br><br>
                <label class="selectLanguageText" for="selectLanguage">Select Language:</label>
                <br>
                <label class="radioButtonPopUp">
                    <input type="radio" id="english" name="language" value="english" required >English
                </label>
                <br>
                <label class="radioButtonPopUp">
                    <input type="radio" id="dutch" name="language" value="dutch">Dutch
                </label>
                <br>
                <label class="radioButtonPopUp">
                     <input type="radio" id="chinese" name="language" value="chinese">Chinese
                </label>
                <br><br>
                <label class="selectTicketText" for="selectTicket">Select your ticket:</label>
                <section id="warningBox">
                    <section id=warningsMessage>
                        <h4>Important Note</h4>
                        <p>participants must be a minimum of 12 years old<br> and no strollers are allowed.</p>
                    </section>
                </section>
                <section id="tickets">
                    <section id="normalTicket">
                        <h3>Normal Ticket</h3>
                        <p>€17,50</p>
                        <p id=normalTicketEuroSign >€</p>
                        <p id=normalTicketPrice>0,00</p>
                        <select id="normalTicketAmount" name="normalTicketAmount" onchange="CalculateNormalTicket(this.value),CalculateTotalPrice()">
                            <option value="0" selected>0</option>
                            <?php 
                            for ($i = 1; $i < 13; $i++) {?>
                                <option value=<?php echo $i?>><?php echo $i ?></option>
                            <?php } ?>     
                        </select>
                    </section>
                    <section id="familyTicket">
                        <h3>Family Ticket</h3>
                        <p>€60,00</p>
                        <p id=familyTicketEuroSign >€</p>
                        <p id=familyTicketPrice >0,00</p>
                        <select id="familyTicketAmount" name="familyTicketAmount" onchange="CalculateFamilyTicket(this.value),CalculateTotalPrice()">
                            <option value="0" selected>0</option>
                            <?php 
                            for ($i = 1; $i < 4; $i++) {?>
                                <option value=<?php echo $i?>><?php echo $i ?></option>
                            <?php } ?>
                        </select>      
                        </select>
                        <h6>(4 participants)</h6>
                        <img src='images/historic/historic_discount_image.jpg' alt="14% discount" id="discountImage">
                        <h4>Total</h4>
                        <p3 id="totalPriceTickets">€ 0,00</p3>
                    </section>
                    <button id="cancelButton" onclick="closePopUp('popupBuyTicket')">Cancel</button>
                    <button id="addToCartButton" type="submit" name="AddToShoppingCartHistoric">Add to cart</button>
                    <!-- <button id="addToCartButton" onclick="closePopUp('popupBuyTicket')">Add to cart</button> -->
                    <!-- <script>
                        modal('popupAddedTicket', 'addToCartButton', 'closeButton')
                    </script> -->
                </section>
            </section>
        </section>
        </form>
    <section class="venuesBox">
        <section id=venuesInfo>
            <h3>Venues</h3>
            <p>In these historic tours we will come across the following 9 venues.</p>
            <img src='images/historic/historic_googleMaps_locaties.jpg' alt="Locations of venues which will be visited" id="googleMapsImage">
        </section>
        <section id=venuesTekst>
            <p>1  Church of St. Bavo<br>2  Grote Markt<br>3  De Hallen<br>4  Proveniershof<br>5  Jopenkerk (Break location)<br>6  Waalse Kerk Haarlem<br>7  Molen de Adriaan<br>8  Amsterdamse Poort<br>9  Hof van Bakenes </p>
            <img src='images/historic/historic_venues.jpg' id="venuesImage">
        </section>
    </section>
</section>

</body>
</html>