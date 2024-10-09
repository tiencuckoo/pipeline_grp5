<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock-Paper-Scissors</title>
</head>
<body>
    <h1>Rock-Paper-Scissors Game</h1>
    <form method="POST">
        <label for="choice">Choose Rock, Paper, or Scissors:</label>
        <input type="text" id="choice" name="choice" required>
        <button type="submit">Play</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userChoice = strtolower($_POST["choice"]);
        $choices = ["rock", "paper", "scissors"];
        $computerChoice = $choices[array_rand($choices)];

        echo "<p>You chose: $userChoice</p>";
        echo "<p>Computer chose: $computerChoice</p>";

        if ($userChoice === $computerChoice) {
            echo "<p>It's a tie!</p>";
        } elseif (
            ($userChoice === "rock" && $computerChoice === "scissors") ||
            ($userChoice === "paper" && $computerChoice === "rock") ||
            ($userChoice === "scissors" && $computerChoice === "paper")
        ) {
            echo "<p>You win!</p>";
        } else {
            echo "<p>You lose!</p>";
        }
    }
    ?>
</body>
</html>
