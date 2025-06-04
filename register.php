<?php
require 'includes/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $email, $password);

  if ($stmt->execute()) {
    header("Location: login.php");
  } else {
    echo "Error: " . $stmt->error;
  }
}
?>

<form method="POST">
  <h2>Register</h2>
  <input type="text" name="name" required placeholder="Full Name">
  <input type="email" name="email" required placeholder="Email">
  <input type="password" name="password" required placeholder="Password">
  <button type="submit">Register</button>
</form>
