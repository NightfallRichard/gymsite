<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/support.css">
</head>
<body>
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2C2C2C; padding: 0.5rem 1rem;">
    <a class="navbar-brand" href="home.html" style="font-weight: bold;">FitLife Gym</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="leaderboard.php">Leaderboard</a></li>
            <li class="nav-item"><a class="nav-link" href="diet-tracker.php">Diet Tracker</a></li>
            <li class="nav-item"><a class="nav-link" href="ai-chat.php">AI Chat</a></li>
            <li class="nav-item"><a class="nav-link" href="live-trainer.php">Live Trainer</a></li>
            <li class="nav-item"><a class="nav-link" href="forum.php">Forum</a></li>
            <li class="nav-item"><a class="nav-link" href="support.php">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="/DOLPHIN_GYM/index/store/shoppingcart/index.php">Store</a></li>
        </ul>
    </div>
    <a href="logout.php" 
       style="background: green; color: white; text-decoration: none; padding: 0.8rem 1.5rem; font-size: 1rem; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s ease; text-align: center; margin-left: auto;"
       onmouseover="this.style.background='yellow'; this.style.color='black';"
       onmouseout="this.style.background='green'; this.style.color='white';">
        Logout
    </a>
</nav>


    <main class="container mt-5">
        <h1>Support</h1>

        <div class="support-form">
            <h3>Submit a Support Ticket</h3>
            <form id="supportForm">
                <div class="form-group">
                    <label for="issueTitle">Issue Title</label>
                    <input type="text" id="issueTitle" class="form-control" placeholder="Enter the title of your issue" required>
                </div>
                <div class="form-group">
                    <label for="issueDescription">Issue Description</label>
                    <textarea id="issueDescription" class="form-control" placeholder="Describe your issue in detail" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Ticket</button>
            </form>
        </div>

        <div class="tickets mt-5">
            <h3>Your Support Tickets</h3>
            <div id="ticketList">
                <!-- Dynamic list of tickets will appear here -->
            </div>
        </div>
    </main>

    <footer class="text-center mt-5 py-4" style="background-color: #2C2C2C; color: #D1D1D1;">
        <p>&copy; 2025 FitLife Gym. All Rights Reserved.</p>
    </footer>

    <script src="../js/support.js"></script>
</body>
</html>
