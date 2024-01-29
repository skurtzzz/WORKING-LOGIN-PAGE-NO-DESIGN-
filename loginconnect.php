<?php
// Connect to the database
$host = 'localhost';
$user = 'Login_Username';
$password = 'Login_Password';
$dbname = 'diary';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare a SQL query to select the user from the database
$sql = "SELECT * FROM Login WHERE Login_Username = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);

// Get the result
$result = mysqli_stmt_get_result($stmt);

// Check if the user exists
if (mysqli_num_rows($result) == 1) {
    // Fetch the user data
    $user = mysqli_fetch_assoc($result);

    // Verify the password
    if (password_verify($password, $user['Login_Password'])) {
        // Password is correct, start a session and redirect to the dashboard
        session_start();
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit();
    } else {
        // Password is incorrect, show an error message
        $error = 'Incorrect password';
    }
} else {
    // User not found, show an error message
    $error = 'User not found';
}

// Close the database connection
mysqli_close($conn);

// Send the error message back to the frontend
echo json_encode(['error' => $error]);