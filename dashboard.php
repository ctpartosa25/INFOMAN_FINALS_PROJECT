<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
