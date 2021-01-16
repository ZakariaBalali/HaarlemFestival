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
      <option value="" disabled selected hidden></option>
      <option value="26 July">26 July</option>
      <option value="27 July">27 July</option>
      <option value="28 July">28 July</option>
      <option value="29 July">29 July</option>
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
          ?><option><?php echo $food->getEvent()->getStartTime() ?></option>;<?php
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
      <option value="" disabled selected hidden></option>
      <option value="1adult">1</option>
      <option value="2adults">2</option>
      <option value="3adults">3</option>
      <option value="4adults">4</option>
      <option value="5adults">5</option>
      <option value="6adults">6</option>
      <option value="7adults">7</option>
    </select>

    <label for="adults"><b>Children:</b></label>
    <select>
      <option value="" disabled selected hidden></option>
      <option value="1child">1</option>
      <option value="2children">2</option>
      <option value="3children">3</option>
      <option value="4children">4</option>
      <option value="5children">5</option>
      <option value="6children">6</option>
      <option value="7children">7</option>
    </select>

    <label for="comments"><b>Comments:</b></label>
    <textarea rows="6" cols="30" name="comments"></textarea>

    <p>
      The reservation fee is &euro;10 per person. The total reservation fee will be deducted from the final check.
    </p>

    <button type="submit" class="btn">Confirm</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>

</html>