<?php
// Initialize the session.
session_start();

// Unset all of the session variables.
$_SESSION = array();
// Finally, destroy the session.
session_destroy();

header('Location: ../View/Shopping_Cart.php');