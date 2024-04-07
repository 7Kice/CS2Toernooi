<?php
session_start(); // Start the session

// Check if bracket data is already saved in session
if(isset($_SESSION['bracket_data'])) {
    $teams = $_SESSION['bracket_data']['teams'];
    $num_teams = $_SESSION['bracket_data']['num_teams'];
} else {
    $teams = array(); // Default empty array
    $num_teams = 0; // Default value
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_teams = isset($_POST['num_teams']) ? (int)$_POST['num_teams'] : 0;
    
    // Validate number of teams
    if ($num_teams < 2 || $num_teams > 32) {
        echo "<p>Number of teams should be between 2 and 32.</p>";
        exit;
    }

    // Get team names
    $teams = array();
    for ($i = 0; $i < $num_teams; $i++) {
        if (!empty($_POST['team'][$i])) {
            $teams[] = $_POST['team'][$i];
        } else {
            $teams[] = "Team " . ($i + 1);
        }
    }

    // Shuffle teams for random seeding
    shuffle($teams);

    // Save generated bracket data in session
    $_SESSION['bracket_data'] = array(
        'teams' => $teams,
        'num_teams' => $num_teams
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Bracket</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include('header.php'); ?>

    <div class="container">
        <div class="bracket-box">
            <?php if ($num_teams > 0): ?>
                <h2>Tournament Bracket - Round 1</h2>
                <ul>
                <?php for ($match = 1; $match <= $num_teams / 2; $match++): ?>
                    <li>
                        <strong>Match <?php echo $match; ?>:</strong>
                        <span><?php echo $teams[$match * 2 - 2]; ?></span>
                        <span>vs.</span>
                        <span><?php echo $teams[$match * 2 - 1]; ?></span>
                    </li>
                <?php endfor; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html> 


