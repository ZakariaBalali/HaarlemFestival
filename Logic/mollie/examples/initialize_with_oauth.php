<?php

namespace _PhpScoper5e394cb3b4e38;

/*
 * Make sure to disable the display of errors in production code!
 */
\ini_set('display_errors', 1);
\ini_set('display_startup_errors', 1);
\error_reporting(\E_ALL);
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/functions.php";
/*
 * Initialize the Mollie API library with OAuth.
 *
 * See: https://docs.mollie.com/oauth/overview
 */
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setAccessToken("access_Wwvu7egPcJLLJ9Kb7J632x8wJ2zMeJ");
