<?php
session_start();

$EventID = $_POST['eventID'];


if (isset($_POST['plusSession'])) {
    if ($_SESSION["Products"][$EventID]['Amount'] < 10) {
        $_SESSION["Products"][$EventID]['Amount'] += 1; // Add this
    }
    header('Location: ../View/Shopping_Cart.php');
}

if (isset($_POST['minusSession'])) {
    if ($_SESSION["Products"][$EventID]['Amount'] > 1) {
        $_SESSION["Products"][$EventID]['Amount'] -= 1; // Add this
    }
    header('Location: ../View/Shopping_Cart.php');
}

if (isset($_POST['deleteSession'])) {
    unset($_SESSION['Products'][$EventID]);
    header('Location: ../View/Shopping_Cart.php');
}

