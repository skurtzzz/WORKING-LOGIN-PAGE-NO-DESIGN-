<?php
session_start();

if (isset($_GET['error'])) {
  $error = "Invalid username or password.";
} else {
  $error = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homestyle.css">
  <title>Login Page</title>
</head>
<body>
  <h1>Login</h1>
  <?php if ($error): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
  </form>
</body>
</html>