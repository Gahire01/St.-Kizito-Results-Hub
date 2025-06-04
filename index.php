<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>St. Kizito Results Hub</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Welcome to St. Kizito Results Hub</h1>
    <?php if (isset($_SESSION['name'])): ?>
      <p>Hello, <?= $_SESSION['name'] ?>! <a href="logout.php">Logout</a></p>
      <a href="dashboard.php" class="btn">Go to Dashboard</a>
    <?php else: ?>
      <a href="login.php" class="btn">Login</a>
      <a href="register.php" class="btn">Register</a>
    <?php endif; ?>
  </div>
</body>
</html>
