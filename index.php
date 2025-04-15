<?php
// Start session for login tracking
session_start();

// If already logged in, redirect to dashboard
if (isset($_SESSION['email'])) {
    header("Location: user/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lot Reservation System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
    <div class="left-section">
        <h2>WELCOME!</h2>
        <p>Lot Reservation System</p>
    </div>
    <div class="right-section">
        <h2>LOGIN</h2>

        <!-- Login Error Message -->
        <?php if (isset($_GET['error'])): ?>
            <p style="color: red; font-weight: bold;"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn-login">Log In</button>
        </form>

        <p><a href="register.php" class="btn-create">Create Account</a></p>
    </div>
</div>

</body>
</html>
