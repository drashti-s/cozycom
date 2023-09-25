<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'true') {
    session_unset();

    session_destroy();
    $_SESSION['logged_out'] = true;
}

// Redirect the user to the login page
header('location: login.php');
exit();
?>
