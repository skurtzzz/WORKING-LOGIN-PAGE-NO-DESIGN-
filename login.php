<?php
require_once 'config.php';

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM Login WHERE Login_Username = ? AND Login_Password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();

  if ($stmt->get_result()->num_rows > 0) {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
  } else {
    header('Location: index.php?error=true');
  }

  $stmt->close();
}
?>