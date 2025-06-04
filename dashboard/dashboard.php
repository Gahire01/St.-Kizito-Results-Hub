<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit;
}
?>
<h2>Welcome, <?= $_SESSION['name'] ?>!</h2>
<a href="logout.php">Logout</a>
