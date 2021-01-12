<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Haarlem Program</title>
    <meta name="description" content="Haarlem MyProgram">
    <meta name="keywords" content="Create your own Programme">
    <link href="css/MyProgram.css" rel="stylesheet" type="text/css">
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
            <input id="checkBoxDance" type="checkbox" checked value="dance" />
            <label for="checkBoxLabal">Dance</label>
        </li>
        <li>
            <input id="checkBoxFood" type="checkbox" checked value="food" />
            <label for="checkBoxLabal">Food</label>
        </li>
        <li>
            <input id="checkBoxJazz" type="checkbox" checked value="jazz" />
            <label for="checkBoxLabal">Jazz</label>
        </li>
        <li>
            <input id="checkBoxHistoric" type="checkbox" checked value="historic" />
            <label for="checkBoxLabal">Historic</label>
        </li>
    </section>
    <section class="dayFilter">
        <h4>Showtimes</h4>
        <br>
        <button id="allDaysButton">All days</button>
        <button id="26thButton">Thu Jul 26th</button>
        <button id="27thButton">Fri Jul 27th</button>
        <button id="28thButton">Sat Jul 28th</button>
        <button id="29thButton">Sun Jul 29th</button>

    </section>  



</section>


</body>
</html>