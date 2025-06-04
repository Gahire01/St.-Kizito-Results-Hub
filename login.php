<?php
require 'includes/db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $user = $stmt->get_result()->fetch_assoc();

  if ($user && password_verify($password, $user["password"])) {
    $_SESSION["name"] = $user["name"];
    $_SESSION["email"] = $user["email"];
    header("Location: dashboard.php");
  } else {
    echo "Invalid login";
  }
}
?>

<form method="POST">
  <h2>Login</h2>
  <input type="email" name="email" required placeholder="Email">
  <input type="password" name="password" required placeholder="Password">
  <button type="submit">Login</button>
</form>
