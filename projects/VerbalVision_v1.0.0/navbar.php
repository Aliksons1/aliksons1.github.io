<?php
// Debugging: Check if the session variable is set
if (isset($_SESSION['user_id'])) {
    echo "User is logged in";
} else {
    echo "User is not logged in";
}
?>

