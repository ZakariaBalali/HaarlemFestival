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
    <p id="subtitle" >Choose day or artist for tickets</p>
                     <!--row 1 -->
    <section class="ArtistsRow1">
     <img src="./images/arminvanbuuren.jpg " href="# " />
     <img src="./images/hardwell.jpg " href="# "/>
     <img src="./images/afrojack.jpg " href="# "/>

                    <!--row 2 -->
     <section class="ArtistsRow2">
     <img src="./images/martingarrix.jpg "href="# " />
     <img src="./images/nickyromero.jpg "href="# " />
     <img src="./images/tiesto.jpg "href="# " />
     </section>
    </section>

                   <!--row Days -->
    <section class="DaysRow" >
    <button  class="allTicketsBtn"href="# " onclick="window.location.reload(true);" >All tickets</button>
    <button  class="fridayBtn"href="# " >Friday, Jul 27th</button>
    <button  class="saturdayBtn"href="# ">Saturday, Jul 28th</button>
    <button  class="sundayBtn"href="# ">Sunday, Jul 29th</button>
    </section>

                 <!--tickets -->
       
    <section class="Tickets">
        <!--ticket1 -->
    <div class="grid-container">
    <div class="ticket1Title" id="ticket1Title">Nicky Romero/Afrojack</div>
    <div class="ticket1Detail" id="ticket1Detail">
        <section class="rightsideDetail">
            <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
            <label class="durationLabel">Duration: 360 min</label>
            <br>
            <label class="priceLabel">Price: €75,00</label>
            <br>
            <br>
           
            <button class="buyTicket1Btn" onclick="showBuyTicket1()">Buy now</button>
                
        </section>
        <section class="leftsideDetail">
            <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
    </div>
                         <!-- achterkant ticket1 -->
    <section class="buyTicket1" id="buyTicket1">
    <section class="buyTicket1Title" id="buyTicket1Title">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
             

                       <!--ticket2 -->
      <div class="ticket2Title"  id="ticket2Title">Tiesto</div>
      <div class="ticket2Detail" id="ticket2Detail">
    <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 22:00</label>
            <br>
            <label class="locationLabel">Location: Club Stalker</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket2Btn" onclick="showBuyTicket2()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/tiesto1.jpg">
    </section>
      </div>

         <!-- achterkant ticket2 -->
    <section class="buyTicket2" id="buyTicket2">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>

                    <!--ticket3 -->
      <div class="ticket3Title" id="ticket3Title">Hardwell</div>
      <div class="ticket3Detail">
      <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 23:00</label>
            <br>
            <label class="locationLabel">Location: Jopenkerk</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket3Btn"onclick="showBuyTicket3()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/hardwell1.jpg">
    </section>
      </div>
                       <!-- achterkant ticket3 -->
    <section class="buyTicket3" id="buyTicket3">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>

                 <!--ticket4 -->
     <div class="ticket4Title" id="ticket4Title">Armin van Buuren</div>
     <div class="ticket4Detail">
     <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 22:00</label>
            <br>
            <label class="locationLabel">Location: XO the club</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket4Btn"onclick="showBuyTicket4()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/arminvanbuuren1.jpg">
    </section>
     </div>

             <!-- achterkant ticket4 -->
    <section class="buyTicket4" id="buyTicket4">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                   <!--ticket5 -->
     <div class="ticket5Title" id="ticket5Title">Martin Garrix</div>
    <div class="ticket5Detail" id="ticket5Detail">
        <section class="rightsideDetail">
            <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Club Ruis</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
           
            <button class="buyTicket5Btn" onclick="showBuyTicket5()">Buy now</button>
                
        </section>
        <section class="leftsideDetail">
            <img class="imagesLeft" src="images/martingarrix1.jpg">
        </section>
    </div>
    
       <!-- achterkant ticket5 -->
       <section class="buyTicket5" id="buyTicket5">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                  <!--ticket6 -->    
    <div class="ticket6Title"  id="ticket6Title">Hardwell/Martin Garrix/Armin van Buuren</div>
      <div class="ticket6Detail" id="ticket6Detail">
    <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-28</label>
            <br>
            <label class="timeLabel">Time: 14:00</label>
            <br>
            <label class="locationLabel">Location: Caprera</label>
            <br>
            <label class="durationLabel">Duration: 540 min</label>
            <br>
            <label class="priceLabel">Price: €110,00</label>
            <br>
            <br>
            <button class="buyTicket6Btn"onclick="showBuyTicket6()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/hardwell1.jpg">
    </section>
      </div>

         <!-- achterkant ticket6 -->
    <section class="buyTicket6" id="buyTicket6">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>

                    <!--ticket7 -->
      <div class="ticket7Title" id="ticket7Title">Afrojack</div>
    <div class="ticket7Detail" id="ticket7Detail">
        <section class="rightsideDetail">
            <label class="dayLabel">Date: 2020-07-28</label>
            <br>
            <label class="timeLabel">Time: 22:00</label>
            <br>
            <label class="locationLabel">Location: Jopenkerk</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
           
            <button class="buyTicket7Btn" onclick="showBuyTicket7()">Buy now</button>
                
        </section>
        <section class="leftsideDetail">
            <img class="imagesLeft" src="images/afrojack1.jpg">
        </section>
    </div>

           <!-- achterkant ticket7 -->
    7<section class="buyTicket7" id="buyTicket7">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                    <!--ticket8 -->
    <div class="ticket8Title"  id="ticket8Title">Tiesto</div>
      <div class="ticket8Detail" id="ticket8Detail">
    <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-28</label>
            <br>
            <label class="timeLabel">Time: 21:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
            <label class="durationLabel">Duration: 240 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
            <button class="buyTicket8Btn" onclick="showBuyTicket8()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/tiesto1.jpg">
    </section>
      </div>

          <!-- achterkant ticket8 -->
    <section class="buyTicket8" id="buyTicket8">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                      <!--ticket9 -->
      <div class="ticket9Title" id="ticket9Title">Nicky Romero</div>
    <div class="ticket9Detail" id="ticket9Detail">
        <section class="rightsideDetail">
            <label class="dayLabel">Date: 2020-07-28</label>
            <br>
            <label class="timeLabel">Time: 23:00</label>
            <br>
            <label class="locationLabel">Location: Club Stalker</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
           
            <button class="buyTicket9Btn" onclick="showBuyTicket9()">Buy now</button>
                
        </section>
        <section class="leftsideDetail">
            <img class="imagesLeft" src="images/nickyromero1.jpg">
        </section>
    </div>
   
       <!-- achterkant ticket9 -->
       <section class="buyTicket9" id="buyTicket9">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                    <!--ticket10 -->
    <div class="ticket10Title"  id="ticket10Title">Afrojack/Tiesto/Nicky Romero</div>
      <div class="ticket10Detail" id="ticket10Detail">
    <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-29</label>
            <br>
            <label class="timeLabel">Time: 14:00</label>
            <br>
            <label class="locationLabel">Location: Caprera</label>
            <br>
            <label class="durationLabel">Duration: 540 min</label>
            <br>
            <label class="priceLabel">Price: €110,00</label>
            <br>
            <br>
            <button class="buyTicket10Btn" onclick="showBuyTicket10()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/nickyromeroafrojack.png">
    </section>
      </div>

         <!-- achterkant ticket10 -->
    <section class="buyTicket10" id="buyTicket10">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                 <!--ticket11 -->
      <div class="ticket11Title" id="ticket11Title">Armin van Buuren</div>
    <div class="ticket11Detail" id="ticket11Detail">
        <section class="rightsideDetail">
            <label class="dayLabel">Date: 2020-07-29</label>
            <br>
            <label class="timeLabel">Time: 19:00</label>
            <br>
            <label class="locationLabel">Location: Jopenkerk</label>
            <br>
            <label class="durationLabel">Duration: 900 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
           
            <button class="buyTicket11Btn" onclick="showBuyTicket11()">Buy now</button>
                
        </section>
        <section class="leftsideDetail">
            <img class="imagesLeft" src="images/arminvanbuuren1.jpg">
        </section>
    </div>

       <!-- achterkant ticket11 -->
       <section class="buyTicket11" id="buyTicket11">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>

                 <!--ticket12 -->
    <div class="ticket12Title"  id="ticket12Title">Hardwell</div>
      <div class="ticket12Detail" id="ticket12Detail">
    <section class="rightsideDetail">
      <label class="dayLabel">Date: 2020-07-29</label>
            <br>
            <label class="timeLabel">Time: 21:00</label>
            <br>
            <label class="locationLabel">Location: XO the Club</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €90,00</label>
            <br>
            <br>
            <button class="buyTicket12Btn" onclick="showBuyTicket12()">Buy now</button>
            </br>
    </section>
    <section class="leftsideDetail">
    <img class="imagesLeft" src="images/hardwell1.jpg">
    </section>
      </div>

         <!-- achterkant ticket12 -->
    <section class="buyTicket12" id="buyTicket12">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
                  <!--ticket13 -->
      <div class="ticket13Title" id="ticket13Title">Martin Garrix</div>
    <div class="ticket13Detail" id="ticket13Detail">
        <section class="rightsideDetail">
            <label class="dayLabel">Date: 2020-07-29</label>
            <br>
            <label class="timeLabel">Time: 18:00</label>
            <br>
            <label class="locationLabel">Location: Club Stalker</label>
            <br>
            <label class="durationLabel">Duration: 90 min</label>
            <br>
            <label class="priceLabel">Price: €60,00</label>
            <br>
            <br>
           
            <button class="buyTicket13Btn" onclick="showBuyTicket13()">Buy now</button>
                
        </section>
        <section class="leftsideDetail">
            <img class="imagesLeft" src="images/martingarrix1.jpg">
        </section>
    </div>

       <!-- achterkant ticket13 -->
       <section class="buyTicket13" id="buyTicket13">
    <section class="buyTicketTitle" id="buyTicketTitle">
        
    </section>
        <section class="buyTicketLeftside" id="buyTicket1Leftside">
        <label class="dayLabel">Date: 2020-07-27</label>
            <br>
            <label class="timeLabel">Time: 20:00</label>
            <br>
            <label class="locationLabel">Location: Lichtfabriek</label>
            <br>
        <img class="imagesLeft" src="images/nickyromeroafrojack.png">
        </section>
        <section class="buyTicketRightside" id="buyTicket1Rightside">
        <section class="ticketGridArea">
                
                <label class="titleArtist">Regular ticket</label>
                <label class="priceArtist">€15,00</label>
                <section class="amountArtist">
                    <button class="minusArtist" id="minusArtist1">−</button>
                    <input class="inputArtist" type="number" value="0" id="inputArtist1"/>
                    <button class="plusArtist" id="plusArtist1">+</button>
                    <script>
                        addTicket('minusArtist1', 'inputArtist1', 'plusArtist1')
                    </script>
                </section>
                <label class="titleAllAccessDay">All-Access Friday</label>
                <label class="priceAllAccessDay">€35,00</label>
                <section class="amountAllAccessDay">
                    <button class="minusAllAccessDay" id="minusAllAccessDay1">−</button>
                    <input class="inputAllAccessday" type="number" value="0" id="inputAllAccessDay1"/>
                    <button class="plusAllAccessDay" id="plusAllAccessDay1">+</button>
                    <script>
                        addTicket('minusAllAccessDay1', 'inputAllAccessDay1', 'plusAllAccessDay1')
                    </script>
                </section>
                <label class="titleAllAccessWeekend">All-Access Weekend</label>
                <label class="priceAllAccessWeekend"> €80,00</label>
                <section class="amountAllAccessWeekend">
                    <button class="minusAllAccessWeekend" id="minusAllAccessWeekend1">−</button>
                    <input class="inputAllAccessWeekend" type="number" value="0" id="inputAllAccessWeekend1"/>
                    <button class="plusAllAccessWeekend" id="plusAllAccessWeekend1">+</button>
                    <script>
                        addTicket('minusAllAccessWeekend1', 'inputAllAccessWeekend1', 'plusAllAccessWeekend1')
                    </script>
                    
                </section>
                <button class="buttonAddTicket"> Add</button>
            </section>
        
        </section>
        
            
            
    </section>
</div>



    


    </div>
    
        </section>

        </section>





      </section>




</section>

<section class="Footer">

</section>


</body>
</html>
