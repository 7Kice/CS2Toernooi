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

    <!-- New Image and Information Block -->
    <div class="grid-container">
  <!-- Other grid items -->

  <div class="grid-item info-block">
        <img src="./img/Informatie_Gaming_Foto.jpg" alt="Descriptive Text for Accessibility">
        <div class="info-text">
            <h3>Informatie Over CS2 Toernooi</h3>
            <p>Het CS2-toernooi is een jaarlijks evenement georganiseerd door het Vista College. Het brengt fans en spelers van het spel Counter-Strike 2 samen. Elk jaar komen er bekende spelers die veel geld hebben gewonnen met het spel. 

            Een bekende speler is Robin Kool, die in het team FaZe Clan zit. Hij is erg goed in CS2 en veel mensen kijken naar hem op. Een andere top speler is s1mple van Team Falcon. Hij is ook heel bekend en heeft veel prijzen gewonnen.

            Het toernooi is niet alleen een wedstrijd, maar ook een plek waar mensen die van games houden elkaar kunnen ontmoeten. Met beroemde spelers zoals Robin en s1mple trekt het toernooi veel aandacht. Het is een belangrijk evenement voor iedereen die van esports houdt.</p>
        </div>
    </div>
</div>


</div>

</div>

    <?php
    include('footer.php')
    ?>

</body>

</html>