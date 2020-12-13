<?php
require_once '../DAL/JazzDAL.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>CMS</title>
    <link href="css/CMS.css" rel="stylesheet" type="text/css">
    <link href="css/EditJazz.css" rel="stylesheet" type="text/css">
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

    <?php
    $jazzDAL = new JazzDAL();
    $jazzEvent = $jazzDAL->GetJazzEventById(1); ?>
    <section class="bandImage" ?>
        <img src="images/<?php echo $jazzEvent->getImage() ?>.jpg ">
        <button type="submit" name="editImage">Change image</button>
    </section>

    
    <!-- <form action="" -->
    <input type="text" id="bandName" name="bandName" value="<?php echo $jazzEvent->getBandName() ?>">

    <?php
    if (isset($_POST['save'])) {
        $description= $_POST['description'];
        $jazzEvent->setDescription($description);
        $jazzDAL->SaveDescription($jazzEvent);         
    }
    ?>

    <p> <?php ?> </p>

    <form action="" method="post">
        <h2>About the band</h2>
        <textarea id="about" name="description" rows="10" cols="50"><?php echo $description=$jazzEvent->getDescription(); ?></textarea>

        <button type="submit" name="save" class="btnSave">Save Changes</button>
    </form>

    
</section>

</html>