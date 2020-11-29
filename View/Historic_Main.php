<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Historic</title>
    <meta name="description" content="Haarlem Historic">
    <meta name="keywords" content="History, Haarlem, Buildings">
    <link href="css/HistoricMain.css" rel="stylesheet" type="text/css">
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
    <a href="Jazz_Main.php">Jazz</a>
    <a class="active"  href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
    <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
</section>

<section class="MainContent">
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
            <p>1.5 m distance</p>
            <p>General hand and face hygiene</p>
            <p>Screening for COVID-19 symptoms before entry</p>
        </section>
        <section id=price>
            <h3>Price</h3>
            <p>Normal ticket €17,50,- p.p.</p>
            <p>Family ticket €60,- (4 participants)</p>
        </section>
        <section id=additionalInfo>
            <h3>Additional information</h3>
            <p>Due to the nature of this walk participants must be a <B STYLE="text-decoration: underline;">minimum of 12 years old</B> and <B STYLE="text-decoration: underline;">no strollers are allowed</B></p>
        </section>
    </section>
    <section class="programBox">
        <section id=programInfo>
            <h3>Program</h3>
            <p1>We offer multiple programs. The tours will be in Dutch, English or Chinese. All tours start at the St. Bavo. (Note that some days do not include all different languages). </p1>
            <p>The price of a normal ticket is €17,50 euros.</p>
            <p>The price of a family ticket is €60 euros. A family ticket is for 4 persons and is 14% cheaper than a normal ticket. </p>
            <p>Reservation is mandatory</p>
        </section>
        <p id="programQuestion">Select a day and language to see the program</p>
        <button class="dayButton">Thu 26 July</button>
        <button class="dayButton">Fri 27 July</button>
        <button class="dayButton">Sat 28 July</button>
        <button class="dayButton">Sun 29 July</button>
        <form>
            <label class="radioButtonLanguage">
                <input type="radio" id="english" name="language" value="english" checked>English
            </label>
            <label class="radioButtonLanguage">
                <input type="radio" id="dutch" name="language" value="dutch">Dutch
            </label>
            <label class="radioButtonLanguage">
                <input type="radio" id="chinese" name="language" value="chinese">Chinese
            </label>
        </form>
        <table id=programTable>
            <tr>
                <th>Time</th>
                <th>Language</th>
                <th>Seats left</th>
            </tr>
            <tr>
                <td>8:00</td>
                <td>English</td>
                <td>12</td>
            </tr>
            <tr>
                <td>10:00</td>
                <td>English</td>
                <td>12</td>
            </tr>
            <tr>
                <td>12:00</td>
                <td>English</td>
                <td>12</td>
            </tr>
        </table>
        <!-- comment-->
        <form>
            <button id="buyButton" formaction="#popup">Get your tickets now!</button>
        </form>
       <!-- <button id="buyButton" href="#popup">Get your tickets now!</button>-->
    </section>
    <section class="popup">
        <form class=orderTicket>
        
        </form>
    </section>
    <section class="venuesBox">
        <section id=venuesInfo>
            <h3>Venues</h3>
            <p>In these historic tours we will come across the following 9 venues.</p>

            <img src='images/historic/historic_googleMaps_locaties.jpg' alt="Locations of venues which will be visited" id="googleMapsImage">
        </section>
        <section id=venuesTekst>
            <p>1  Church of St. Bavo</p>
            <p>2  Grote Markt</p>
            <p>3  De Hallen</p>
            <p>4  Proveniershof</p>
            <p>5  Jopenkerk (Break location)</p>
            <p>6  Waalse Kerk Haarlem</p>
            <p>7  Molen de Adriaan</p>
            <p>8  Amsterdamse Poort</p>
            <p>9  Hof van Bakenes</p>
            <img src='images/historic/historic_venues.jpg' id="venuesImage">
        </section>
    </section>
</section>

</body>
</html>