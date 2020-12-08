<?php
if (isset($_POST['AddToShoppingCart']))
{
    $user = $userLogic->SearchUserByEmail($_POST['loginEmail']);
    // Check email and password in DAL layer
    if ($loginDal->UserLogin($_POST['loginEmail'], $_POST['loginPassword']))
    {
        $_SESSION['email'] = $user[0]->getEmail();
        $_SESSION['LoggedIn'] = true;
        header('Location: ../View/Homepage.php');
    }

    else{
        echo "<script>alert('Incorrect email or password.')</script>";
    }
};