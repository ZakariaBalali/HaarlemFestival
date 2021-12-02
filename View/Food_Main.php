<?php
require_once '../Logic/FoodLogic.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Haarlem Food</title>
    <meta name="description" content="Haarlem Food">
    <meta name="keywords" content="Food, Restaurants, International">
    <link href="css/FoodMain.css" rel="stylesheet" type="text/css">
    <link href="css/Banner.css" rel="stylesheet" type="text/css">
    <link href="css/ReserveForm.css" rel="stylesheet" type="text/css">
    <script src="js/FoodScript.js"></script>
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
        <a class="active" href="Food_Main.php">Food</a>
        <a href="Jazz_Main.php">Jazz</a>
        <a href="Historic_Main.php">Historic</a>
        <a href="Program_Main.php">Program</a>
        <a href="Shopping_Cart.php"><img src="images/icon_shoppingcart.png"></a>
    </section>

    <section class="FoodImageContainer">
        <img class="FoodImage" src="images/foie-gras-and-cranberry.jpg">
        <h4 class="FoodHeader">Food</h4>
        <h1 class="RestaurantsHeader">Restaurants</h1>
        <p class="FoodMainText1">
            On this page we have a selection of Haarlem's finest restaurants. The choice is all yours with different cuisines to choose from.
        </p>

        <p class="FoodMainText2">
            <u><strong>The reservation fee is &euro;10 per person</strong></u>
            . The total reservation fee will be deducted from the final check at the restaurant.
        </p>
    </section>

    <article class="Restaurants">
        <section class="Rest1">
            <img id="MrAndMrs" src="images/mr&mrs.jpg">
            <h2 id="Rest1Header">Restaurant Mr. & Mrs.</h2>
            <h1 id="Rest1Cuisine">Dutch, Fish & seafood, European</h1>
            <p id="Rest1Text">
                Our menu consists of luxurious starters, cold and warm. The dishes are made for one person.
            </p>
            <img id="Stars4" src="images/4stars.png">
            <strong id="Rest1Price">Price: &euro;45</strong>
            <button id="ReserveButton" onclick="openForm1()">Make Reservation</button>
        </section>

        <section class="Rest2">
            <img id="MrAndMrs" src="images/ratatouille.jpg">
            <h2 id="Rest1Header">Ratatouille</h2>
            <h1 id="Rest1Cuisine">French, Fish & seafood, European</h1>
            <p id="Rest1Text">
                Discover it for yourself: exclusive a la carte dishes, surprising taste palettes and an extensive wine list.
            </p>
            <img id="Stars4" src="images/4stars.png">
            <strong id="Rest1Price">Price: &euro;45</strong>
            <button id="ReserveButton" onclick="openForm2()">Make Reservation</button>
        </section>

        <section class="Rest3">
            <img id="MrAndMrs" src="images/lobster-urban.jpg">
            <h2 id="Rest1Header">Urban Frenchy Bistro Toujours</h2>
            <h1 id="Rest1Cuisine">Dutch, Fish & seafood, European</h1>
            <p id="Rest1Text">
                Luxurious starters, cold as well as warm. You can choose from a sweet dessert or a cheese platter. The dishes are made for one person.
            </p>
            <img id="Stars3" src="images/3stars.png">
            <strong id="Rest2Price">Price: &euro;35</strong>
            <button id="ReserveButton2" onclick="openForm3()">Make Reservation</button>
        </section>

        <section class="Rest4">
            <img id="MrAndMrs" src="images/steak-golden.jpg">
            <h2 id="Rest1Header">The Golden Bull</h2>
            <h1 id="Rest1Cuisine">Steakhouse, Argentinian, European</h1>
            <p id="Rest1Text">
                In addition to high quality steaks, we offer a wide range of special wines. All our meat is prepared on the lava rock grill.
            </p>
            <img id="Stars3" src="images/3stars.png">
            <strong id="Rest2Price">Price: &euro;35</strong>
            <button id="ReserveButton2" onclick="openForm4()">Make Reservation</button>
        </section>

        <section class="Rest5">
            <img id="MrAndMrs" src="images/specktakel.jpg">
            <h2 id="Rest1Header">Specktakel</h2>
            <h1 id="Rest1Cuisine">European, International, Asian</h1>
            <p id="Rest1Text">
                We cook with worldly and honest ingredients. Every quarter our menu changes based on seasonal ingredients.
            </p>
            <img id="Stars3" src="images/3stars.png">
            <strong id="Rest2Price">Price: &euro;35</strong>
            <button id="ReserveButton2" onclick="openForm5()">Make Reservation</button>
        </section>

        <section class="Rest6">
            <img id="MrAndMrs" src="images/brinkman.jpg">
            <h2 id="Rest1Header">Grand Cafe Brinkman</h2>
            <h1 id="Rest1Cuisine">Dutch, European, Modern</h1>
            <p id="Rest1Text">
                Known for good food, perfect coffee and staff who provide excellent service with passion and pleasure. Visit Cafe Brinkman for a meal you won't forget.
            </p>
            <img id="Stars3" src="images/3stars.png">
            <strong id="Rest2Price">Price: &euro;35</strong>
            <button id="ReserveButton2" onclick="openForm6()">Make Reservation</button>
        </section>

        <section class="Rest7">
            <img id="MrAndMrs" src="images/ml.jpg">
            <h2 id="Rest1Header">Restaurant ML</h2>
            <h1 id="Rest1Cuisine">Dutch, Fish & seafood, European</h1>
            <p id="Rest1Text">
                Restaurant ML's kitchen is playful and pushes the boundaries of tradition and innovation.
            </p>
            <img id="Stars4" src="images/4stars.png">
            <strong id="Rest1Price">Price: &euro;45</strong>
            <button id="ReserveButton" onclick="openForm7()">Make Reservation</button>
        </section>

        <section class="Rest8">
            <img id="MrAndMrs" src="images/fris.jpg">
            <h2 id="Rest1Header">Restaurant Fris</h2>
            <h1 id="Rest1Cuisine">Dutch, French, European</h1>
            <p id="Rest1Text">
                At Fris, passion and respect for the product come first with pure flavors from a classic French cuisine.
            </p>
            <img id="Stars4" src="images/4stars.png">
            <strong id="Rest1Price">Price: &euro;45</strong>
            <button id="ReserveButton" onclick="openForm8()">Make Reservation</button>
        </section>
    </article>

    <!-- Form1 -->
    <div class="form-popup" id="myForm1">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Restaurant Mr. & Mrs.">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Restaurant Mr. & Mrs.");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm1()">Cancel</button>
        </form>
    </div>

    <!-- Form2 -->
    <div class="form-popup" id="myForm2">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Ratatouille">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Ratatouille");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm2()">Cancel</button>
        </form>
    </div>

    <!-- Form3 -->
    <div class="form-popup" id="myForm3">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Urban Frenchy Bistro Toujours">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Urban Frenchy Bistro Toujours");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm3()">Cancel</button>
        </form>
    </div>

    <!-- Form4 -->
    <div class="form-popup" id="myForm4">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="The Golden Bull">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("The Golden Bull");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm4()">Cancel</button>
        </form>
    </div>

    <!-- Form5 -->
    <div class="form-popup" id="myForm5">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Specktakel">

            <!-- Trying to print array starttimes to drop down options -->
            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Specktakel");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm5()">Cancel</button>
        </form>
    </div>

    <!-- Form6 -->
    <div class="form-popup" id="myForm6">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Grand Cafe Brinkman">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Grand Cafe Brinkman");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm6()">Cancel</button>
        </form>
    </div>

    <!-- Form7 -->
    <div class="form-popup" id="myForm7">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Restaurant ML">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Restaurant ML");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm7()">Cancel</button>
        </form>
    </div>

    <!-- Form8 -->
    <div class="form-popup" id="myForm8">
        <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
            <h1 id="ReserveHeader">Reserve</h1>

            <input type="hidden" name="restaurant" value="Restaurant Fris">

            <label id="FormLabel" for="time"><b>Date/Time:</b></label>
            <select name="time">
                <?php

                //Fill array with food events
                $FoodEvents = [];
                $foodLogic = new FoodLogic();
                $FoodEvents = (array)$foodLogic->GetFoodTimes("Restaurant Fris");
                foreach ($FoodEvents as $food) {
                ?><option value="<?php echo $food->getEvent()->getStartTime() ?>"><?php echo $timeFormat = date('d-m H:i', strtotime($food->getEvent()->getStartTime())) ?></option>;<?php
                                                                                                                                                                                    }
                                                                                                                                                                                        ?>
            </select> <br><br>

            <label id="FormLabel" for="adults"><b>Adults:</b></label>
            <select name="amountAdultTicket">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="children"><b>Children:</b></label>
            <select name="amountChildTicket" type="number">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select> <br><br>

            <label id="FormLabel" for="comments"><b>Comments:</b></label>
            <textarea rows="6" cols="30" name="comments" type="text"></textarea>

            <p id="FormText">
                The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
            </p>

            <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
            <button type="button" class="btn cancel" onclick="closeForm8()">Cancel</button>
        </form>
    </div>
</body>

</html>