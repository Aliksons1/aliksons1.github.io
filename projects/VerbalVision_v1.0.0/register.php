<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

  <?php
  require_once "db_conn.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];
    $email = $_POST["email"];

    // Check if passwords match
    if ($password !== $password_confirm) {
      echo "Passwords do not match. Please try again.";
    } else {




      // Hash the password
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (username, password_hash, email) VALUES (?, ?, ?)";
      $stmt = $conn->prepare($sql);

      // Bind parameters
      $stmt->bind_param("sss", $username, $passwordHash, $email);

      if ($stmt->execute()) {

        header("Location: /verbalvision/");
        exit();
      } else {
        echo "Error during registration: " . $stmt->error . " (Error code: " . $stmt->errno . ")";
      }

      $stmt->close();
      $conn->close();


    }

  }
  ?>
  <script>


</script>


  <div class="container-sm">
    <div class="register-form">
      <h2>Register</h2>

      <form action="register.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputUsername" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="userHelp"
            required>
          <div id="userHelp" class="form-text">Pick a unique username!</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password_confirm" class="form-control" id="password_confirm" required>
        </div>
        <div class="mb-3">
          <label for="password_confirm">Retype Password:</label>
          <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Sign up for our newsletter!</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>




</body>

</html>