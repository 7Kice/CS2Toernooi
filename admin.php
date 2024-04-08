<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
    include('header.php')
    ?>

<main>

<div class="tournament-bracket">
    <h1>Generate Tournament Round</h1>
    <form action="generate_bracket.php" method="post">
        <label for="num_teams">Number of Teams:</label>
        <input type="number" id="num_teams" name="num_teams" min="2" required>
        <div id="team_names"></div>
        <button type="button" onclick="addTeamInputs()">Add Team Names</button>
        <button type="submit">Generate Bracket</button>
    </form>
</div>

<script>
function addTeamInputs() {
    var num_teams = parseInt(document.getElementById("num_teams").value);
    var teamNamesDiv = document.getElementById("team_names");
    teamNamesDiv.innerHTML = ""; // Clear previous inputs

    for (var i = 1; i <= num_teams; i++) {
        var input = document.createElement("input");
        input.type = "text";
        input.name = "team[]" // Use an array for team names
        input.placeholder = "Team " + i;
        input.required = true;
        teamNamesDiv.appendChild(input);
        teamNamesDiv.appendChild(document.createElement("br"));
    }
}
</script>

<div class="AdminContainer">
    <div class="AdminPanel">
        <h2 class="PanelName">
            Admin Panel
        </h2>
        <a href="login.php" class="LogoutButton">Logout</a>
        <div class="AdminContent">
            <?php
            require("connection.php");
            $sql = "SELECT email, teamName, player1, player2, player3, player4, player5 FROM signup";
            $result = $conn->query($sql);
            ?>

            <div class="Email">
                <h2 class="EmailText">Email</h2>

                <?php
                $result->data_seek(0);

                while ($row = $result->fetch_assoc()) {
                    echo '<h2 class="EmailData">' . $row['email'] . "</h2>";
                }
                ?>
            </div>

            <div class="TeamName">
                <h2 class="TeamNameText">Team Name</h2>
                <?php
                $result->data_seek(0);

                while ($row = $result->fetch_assoc()) {
                    echo '<h2 class="TeamNameData">'
                        . $row['teamName'] . "</h2>";
                }
                ?>
            </div>

            <div class="Players">
                <h2 class="PlayersText">Players</h2>
                <ul>
                    <?php
                    $result->data_seek(0);

                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="PlayerData">' . $row['player1'] . "</li>";
                        echo '<li class="PlayerData">' . $row['player2'] . "</li>";
                        echo '<li class="PlayerData">' . $row['player3'] . "</li>";
                        echo '<li class="PlayerData">' . $row['player4'] . "</li>";
                        echo '<li class="PlayerData">' . $row['player5'] . "</li>";
                    }
                    ?>
                </ul>
            </div>

            <?php
            $conn->close();
            ?>
        </div>
    </div>
</div>


</main>


    <?php
    include('footer.php')
    ?>

</body>

</html>