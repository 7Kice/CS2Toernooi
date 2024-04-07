<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security test</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
    include('header.php')
    ?>

<main>

<div class="form-top">
</div>

<div class="form-container">
  <h2>Team Registration Form</h2>
  <form action="insert_data.php" method="post">
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="team_name">Team Name:</label><br>
    <input type="text" id="team_name" name="team_name" required><br>

    <label for="player1">Player 1:</label><br>
    <input type="text" id="player1" name="player1" required><br>

    <label for="player2">Player 2:</label><br>
    <input type="text" id="player2" name="player2" required><br>

    <label for="player3">Player 3:</label><br>
    <input type="text" id="player3" name="player3" required><br>

    <label for="player4">Player 4:</label><br>
    <input type="text" id="player4" name="player4" required><br>

    <label for="player5">Player 5:</label><br>
    <input type="text" id="player5" name="player5" required><br><br>

    <input type="submit" value="Submit">
  </form>
</div>

<div class="form-bottom">
</div>

</main>

    <?php
    include('footer.php')
    ?>

</body>

</html>