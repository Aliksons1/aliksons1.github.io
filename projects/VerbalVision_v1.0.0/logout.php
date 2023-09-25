<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page or another appropriate page
header("Location: /verbalvision/index.php");
exit;
?>