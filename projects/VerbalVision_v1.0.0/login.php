<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

<?php
require_once "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    $sql = "SELECT user_id, username, password_hash FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $enteredUsername);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        // User with the entered username found
        $stmt->bind_result($userId, $dbUsername, $hashedPassword);
        $stmt->fetch();

        // Verify the entered password against the hashed password
        if (password_verify($enteredPassword, $hashedPassword)) {
            // Password is correct, allow login
            session_start();

            // After successful login
            $_SESSION['user_id'] = $userId;

            // Store the username in the session as well (optional but useful)
            $_SESSION['username'] = $dbUsername;

            // Redirect to the user page
            header("Location: index.php");
            exit;
        } else {
            // Password is incorrect, deny login
            echo "Incorrect password.";
        }

    } else {
        // User with the entered username not found
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>




    <div class="container-sm">
        <div class="login-form">
            <h2>Login</h2>

            <form action="login.php" method="POST">
                <div class="row mb-3">
                    <label for="exampleInputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputUsername"
                        aria-describedby="userHelp">
                </div>
                <div class="row mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>

                <p>Don't have an account? <a href="register.php">Register</a></p>
            </form>


        </div>
    </div>
</body>

</html>