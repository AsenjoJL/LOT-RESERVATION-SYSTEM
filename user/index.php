<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../index.php?error=Access+denied.+Please+log+in.");
    exit();
}

// Optional: You can pull more user data here if needed
$email = $_SESSION['email'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Lot Reservation System</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
</head>
<body>

<nav class="navbar">
    <div class="nav-left">
        <img src="../icons/user.jpg" alt="User Logo" class="user-icon">
    </div>
    <div class="nav-right">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Lots</a></li>
            <li><a href="#">Reservations</a></li>
            <li><a href="#">Payments</a></li>
            <li><a href="../logout.php" title="Log out"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </div>
</nav>

<header class="hero">
    <h1>Welcome, <?php echo htmlspecialchars($email); ?>!</h1>
    <p>Role: <?php echo htmlspecialchars($role); ?></p>
</header>

<section class="recommended">
    <h2>Recommended For You</h2>
    <div class="lot-container">
        <!-- Sample cards (replace with dynamic DB content later) -->
        <?php
        $lots = [
            ["img" => "../images/lot1.jpg", "num" => 9, "size" => 150, "loc" => "City A"],
            ["img" => "../images/lot2.jpg", "num" => 13, "size" => 250, "loc" => "City B"],
            ["img" => "../images/lot3.jpg", "num" => 28, "size" => 350, "loc" => "City C"],
            ["img" => "../images/lot4.jpg", "num" => 21, "size" => 450, "loc" => "City D"],
        ];

        foreach ($lots as $lot) {
            echo "<div class='lot-card'>
                    <img src='{$lot['img']}' alt='Lot Image'>
                    <p>Lot Number: {$lot['num']} &bull; Size: {$lot['size']} sqm</p>
                    <p>Location: {$lot['loc']}</p>
                    <p class='status available'>Status: Available</p>
                    <button>View</button>
                </div>";
        }
        ?>
    </div>
</section>

</body>
</html>
