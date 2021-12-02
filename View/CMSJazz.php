<?php
require_once '../DAL/JazzDAL.php';
require_once '../DAL/EventDAL.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link href="css/CMS.css" rel="stylesheet" type="text/css">
    <link href="css/CMSJazz.css" rel="stylesheet" type="text/css">
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

<table style="width:60%">
  <tr>
    <th>Band</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Location</th>
    <th>Price</th>
    <th>Seats</th>
    <th>Edit</th>
  </tr>
  <?php
        // logic laag!!
        $jazzDAL = new JazzDAL();
        $eventDal = new EventDAL();
        $shows = $jazzDAL->GetAllJazzTickets();
        foreach ($shows as $show) { ?>
          <tr>
            <td><?php echo $show->getBandName() ?></td>
            <td><?php echo $show->getEvent()->getStartTime(); ?></td>
            <td><?php echo $show->getEvent()->getEndTime(); ?></td>
            <td><?php echo $show->getLocation() ?></td>
            <td><?php echo number_format((float)$show->getEvent()->getPrice(), 2, ',', ''); ?></td>
            <td><?php echo $eventDal->GetSeats($show->getEvent_ID()); ?></td>

            <td><a href="" name="edit">Edit</a></td>
          </tr>
        <?php } ?>
</table>



    
</section>

</html>