<?php
require_once '../Logic/FoodLogic.php';
?>

<!DOCTYPE HTML>
<html>

<head>
  <link href="css/ReserveForm.css" rel="stylesheet" type="text/css">
  <script src="js/FoodScript.js"></script>
</head>

<h2>Popup Form</h2>
<p>Click on the button at the bottom of this page to open the login form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>

<!-- Testing what's in the array -->
<p>
  <?php
//Fill array with jazz events
$FoodEvents = [];
$foodLogic = new FoodLogic();
$FoodEvents = (array)$foodLogic->GetFoodTimes("Reservation Restaurant Mr. & Mrs.");


foreach ($FoodEvents as $food) {
    echo $food->getEvent()->getStartTime();

}


  ?>
</p>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="../Logic/ShoppingCartLogic.php" method="post" class="form-container">
    <h1>Reserve</h1>

    <label for="date"><b>Date:</b></label>
    <select>
      <option name="date" value="" disabled selected hidden></option>
      <option name="date" value="26 July">26 July</option>
      <option name="date" value="27 July">27 July</option>
      <option name="date" value="28 July">28 July</option>
      <option name="date" value="29 July">29 July</option>
    </select>

    <!-- Trying to print array starttimes to drop down options -->
    <label for="time"><b>Time:</b></label>
    <select>
      <?php


      require_once '../Logic/FoodLogic.php';

      //Fill array with jazz events
      $FoodEvents = [];
      $foodLogic = new FoodLogic();
      $FoodEvents = (array)$foodLogic->GetFoodTimes("Reservation Restaurant Mr. & Mrs.");
      foreach($FoodEvents as $food){
          ?><option name="time"><?php echo $food->getEvent()->getStartTime() ?></option>;<?php
      }
      ?>
    </select>


    <!-- // while ($rows = $resultSet->fetch_assoc())
      // {
      //   $StartTime = $rows['StartTime'];
      //   echo "<option value='$StartTime'>$StartTime</option>";
      // } -->

    <label for="adults"><b>Adults:</b></label>
    <select>
      <option name="amountAdultTicket" value="" disabled selected hidden></option>
      <option name="amountAdultTicket" value="1">1</option>
      <option name="amountAdultTicket" value="2">2</option>
      <option name="amountAdultTicket" value="3">3</option>
      <option name="amountAdultTicket" value="4">4</option>
      <option name="amountAdultTicket" value="5">5</option>
      <option name="amountAdultTicket" value="6">6</option>
      <option name="amountAdultTicket" value="7">7</option>
    </select>

    <label for="children"><b>Children:</b></label>
    <select name="amountChildTicket" type="number">
      <option name="amountChildTicket" value="" disabled selected hidden></option>
      <option name="amountChildTicket" value="1">1</option>
      <option name="amountChildTicket" value="2">2</option>
      <option name="amountChildTicket" value="3">3</option>
      <option name="amountChildTicket" value="4">4</option>
      <option name="amountChildTicket" value="5">5</option>
      <option name="amountChildTicket" value="6">6</option>
      <option name="amountChildTicket" value="7">7</option>
    </select>

    <label for="comments"><b>Comments:</b></label>
    <textarea rows="6" cols="30" name="comments" type="text"></textarea>

    <p>
      The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
    </p>

    <button type="submit" name="AddToShoppingCartFood" class="btn">Confirm</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

</html>