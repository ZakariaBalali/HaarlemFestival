<html>
<head>
<meta charset="UTF-8">
    <title>Haarlem Jazz</title>
    <meta name="description" content="Haarlem Dance">
    <meta name="keywords" content="Dance, smooth, lineup">
    <link href="css/DanceMain.css" rel="stylesheet" type="text/css">
    <link href="css/Main.css" rel="stylesheet" type="text/css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
   
<section class="Banner">
    <section class="leftBanner">
        <img class="logoImage" src="images/logo.png">
        <h1 class="Title">Haarlem Festival</h1>
    </section>
    <section class="rightBanner">
        <h1 class="Date">26-29 July 2021</h1>
        <form>
            <fieldset>
                <p>
                    <label>English</label>
                    <select id = "myList">
                        <option value = "1">one</option>
                        <option value = "2">two</option>
                        <option value = "3">three</option>
                        <option value = "4">four</option>
                    </select>
                </p>
            </fieldset>
        </form>
    </section>
</section>
<section class="NavigationBar">
    <a href="Homepage.php">Home</a>
    <a class="active" href="Dance_Main.php">Dance</a>
    <a href="Food_Main.php">Food</a>
    <a href="Jazz_Main.php">Jazz</a>
    <a href="Historic_Main.php">Historic</a>
    <a href="Program_Main.php">Program</a>
</section>

<section class="MainContent">
    <section class="EventTitle">
    <h2>Haarlem Dance</h2>
    </section>
    <p id="subtitle">Choose day or artist for tickets</p>

                     <!--row 1 -->
    <section class="ArtistsRow1">
     <button type = "submit" class="image1" value = "myimage">
     <img src="./images/arminvanbuuren.jpg " />
     </button>
     <button type = "submit" class="image2" value = "myimage">
      <img src="./images/hardwell.jpg " />
     </button>
     <button type = "submit" class="image3" value = "myimage">
     <img src="./images/afrojack.jpg " />
     </button>
    

                    <!--row 2 -->
     <section class="ArtistsRow2">
     <button type = "submit" class="image4" value = "myimage">
     <img src="./images/arminvanbuuren.jpg " />
     </button>
     <button type = "submit" class="image5" value = "myimage">
      <img src="./images/hardwell.jpg " />
     </button>
     <button type = "submit" class="image6" value = "myimage">
     <img src="./images/afrojack.jpg " />
     </button>
     </section>
    </section>
                   <!--row Days -->
    <section class="DaysRow">
    <button type="button" class="btn btn-light btn-lg mr-5">All tickets</button>
    <button type="button" class="btn btn-light btn-lg">Friday, Jul 27th</button>
    <button type="button" class="btn btn-light btn-lg">Saturday, Jul 28th</button>
    <button type="button" class="btn btn-light btn-lg">Sunday, Jul 29th</button>
    </section>
     
   
   

</section>

<section class="Footer">

</section>


</body>
</html>