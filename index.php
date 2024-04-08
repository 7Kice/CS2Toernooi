<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    include('header.php')
    ?>
<div class="main-wrapper">

    <!-- Main Image Section -->
    <div class="main-image">
        <div class="image-overlay">
            <h2>CS2 Toernooi</h2>
            <p>Klik hieronder om aan te melden!</p>
            <button href="signup.php" class="new-button">Aanmelden</button>
            <button href="toernooi.php" class="new-button">Meer info</button>
        </div>
    </div>

    <!-- Grid Section -->
    <div class="grid-container">
        <div class="grid-item">
            <a href="https://liquipedia.net/counterstrike/Ropz" target="_blank">
                <img class="RobinCool" src="./img/Erebezoeker_RobinKool.jpeg" alt="Robin Kool">
            </a>
            <h2>Robin Kool</h2>
            <p>Professional Esports Player van CS2</p>
        </div>
        <div class="grid-item">
            <a href="https://liquipedia.net/counterstrike/S1mple" target="_blank">
                <img class="S1mple" src="./img/Erebezoeker_S1mple.jpg" alt="S1mple">
            </a>
            <h2>S1mple</h2>
            <p>Professional Esports Player van CS2</p>
        </div>
    </div>

</div>

    <?php
    include('footer.php')
    ?>

</body>

</html>