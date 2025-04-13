<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login - BONIK DORBAR</title></head>
<body>
<h2>Admin Login</h2>
<form action="login.php" method="post">
    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>
    <button type="submit">Login</button>
</form>
</body>
</html>