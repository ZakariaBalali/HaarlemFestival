<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link href="css/CMS.css" rel="stylesheet" type="text/css">
    <link href="css/CMSDashboard.css" rel="stylesheet" type="text/css">
</head>

<section class="topBanner">
    <p id="currentUser">Logged in as: Daan de Jong &nbsp;</p>
</section>

<section class="navBar">
    <ul>
        <li><a href=""><u>Dashboard</u></a></li>
        <li><a href="">Jazz Page</a></li>
        <li><a href="">Dance Page</a></li>
        <li><a href="">Historic Page</a></li>
        <li><a href="">Food Page</a></li>
        <li id="logout"><a href="">Log out</a></li>
    </ul>
</section>

<section class="workSpace">
    <h1 id="welcome">Welcome Daan de Jong</h1>

    <section class="turnover">
        <b id="turnoverTitle">Turnover</b>
        <section class="datePick">
            From
            <input type="date" class="datePicker" id="start" name="trip-start" value="2020-11-29" min="2020-11-1" max="2022-12-31">
            To
            <input type="date" class="datePicker" id="end" name="trip-end" value="2020-11-29" min="2020-11-1" max="2022-12-31">
        </section>

        <section class="infoBoxes">
            <section class="infoBox">
                <b>Haarlem Dance</b>
                <p id="dance">Tickets: <br> All Access Day Passes <br> All Access All Days Passes:  <br><br> Turnover:</p>
            </section>

            <section class="infoBox">
                <b>Haarlem Jazz</b>
                <p id="jazz">Tickets: <br> All Access Day Passes <br> All Access All Days Passes:  <br><br> Turnover:</p>
            </section>

            <section class="infoBox">
                <b>Haarlem Food</b>
                <p id="food">Tickets: <br> &nbsp;of which reduced(-12) <br><br><br> Turnover:</p>
            </section>

            <section class="infoBox">
                <b>Haarlem Historic</b>
                <p id="historic">Tickets: <br> Family tickets: <br><br><br> Turnover:</p>
            </section>
        </section>

        <button id="details" type="button">See details</button>

    </section>
</section>

</html>