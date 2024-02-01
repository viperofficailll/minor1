<?php
session_start(); // Start the session

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Display the username and location from the session
$email = $_SESSION["email"];
$location = isset($_SESSION["location"]) ? $_SESSION["location"] : "Unknown";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home Page</title>
</head>

<body>
    <div class="header">
        <h1 class="animated fadeInDown hover-effect">FlavorFinds</h1>
        <nav>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="signout.php">Sign Out</a></li>
            </ul>
        </nav>
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
        <form action="search.php" method="post">
            <label for="food">Enter the food you want to eat:</label>
            <input type="text" id="food" name="food" class="search-input" required>
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <!-- Recommended Food Section -->
    <div class="food-list">
        <div class="food-item">
            <img src="food1.jpg" alt="Recommended Food 1">
        </div>
        <div class="food-item">
            <img src="food2.jpg" alt="Recommended Food 2">
        </div>
        <div class="food-item">
            <img src="food3.jpg" alt="Recommended Food 3">
        </div>
        <div class="food-item">
            <img src="food4.jpg" alt="Recommended Food 4">
        </div>
        <div class="food-item">
            <img src="food5.jpg" alt="Recommended Food 5">
        </div>
    </div>

    <!-- User Button -->
    <button class="user-button" onclick="location.href='user_profile.php'">
        <?php
        // Assuming you have the user's email stored in a session variable
        if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
        } else {
            echo "User";
        }
        ?>
    </button>

</body>

</html>
