<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Historic</title>
    <meta name="description" content="Haarlem Historic">
    <meta name="keywords" content="History, Haarlem, Buildings">
    <link href="css/HistoricMain.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <script src="js/HistoricScript.js"></script>
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
                <td>10:00</td>
                <td>English</td>
                <td>12</td>
            </tr>
            <tr>
                <td>13:00</td>
                <td>English</td>
                <td>12</td>
            </tr>
            <tr>
                <td>16:00</td>
                <td>English</td>
                <td>12</td>
            </tr>
        </table>
        <button id="buyButton" onclick="showPopUp()">Get your tickets now!</button>
    </section>
    <section id="popupBuyTicket" class="popupBuyTicket">
        <section id="popupContent">
            <h1>Order your tickets for the historic event</h1>
            <form class=orderTicket method="post">
                <label class="selectDateText" for="selectDate">Select day:</label>
                <select id="SelectDate" name="selectDate">
                    <option value="" disabled selected>Select a day</option>
                    <option value='2021-07-26'>Thur 26 July</option>
                    <option value='2021-07-27'>Fri 27 July</option>
                    <option value='2021-07-28'>Sat 28 July</option>
                    <option value='2021-07-29'>Sun 29 July</option>            
                </select>
                <br>
                <br>
                <label class="selectTimeText" for="selectTime">Select Time:</label>
                <select id="SelectTime" name="selectTime">
                    <option value="" disabled selected>Select a timeslot</option>
                    <option value='10:00'>10:00</option>
                    <option value='13:00'>13:00</option>
                    <option value='16:00'>16:00</option>       
                </select>
                <br><br>
                <label class="selectLanguageText" for="selectLanguage">Select Language:</label>
                <br>
                <label class="radioButtonPopUp">
                    <input type="radio" id="english" name="language" value="english" checked>English
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
                    <section id="tickets">
                        <section id="normalTicket">
                            <h3>Normal Ticket</h3>
                            <p>€17,50</p>
                            <select id="normalTicketAmount" name="normalTicketAmount">
                                <option value="" disabled selected>0</option>
                                <option value='1'>1</option>
                                <option value='12'>2</option>
                                <option value='13'>3</option>       
                            </select>
                        </section>
                        <section id="familyTicket">
                            <h3>Family Ticket</h3>
                            <p>€60,00</p>
                            <select id="familyTicketAmount" name="familyTicketAmount">
                                <option value="" disabled selected>0</option>
                                <option value='1'>1</option>
                                <option value='12'>2</option>
                                <option value='13'>3</option>       
                            </select>
                            <h6>(4 participants)</h6>
                            <img src='images/historic/historic_discount_image.jpg' alt="14% discount" id="discountImage">
                            <h4>Total</h4>
                            <p3 id="totalPriceTickets">€0,00</p3>
                        </section>
                        <button id="cancelButton" onclick="closePopUp()">Cancel</button>
                        <button id="addToCartButton" onclick="">Add to cart</button>
                    </section>
                </section>
            </form>
        </section>
    </section>
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