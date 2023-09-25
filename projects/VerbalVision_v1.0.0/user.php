<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit;
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Welcome, <?php echo $username; ?>!</h1>
    
    <!-- Display user-specific content here -->
    
    <form action="logout.php" method="POST">
        <input type="submit" value="Log Out">
    </form>

    <a href="index.php" class="btn btn-dark">Home</a>
</body>
</html>
