<!DOCTYPE html>
<html>
<head>
    <title>Rishindra Karrolla c73ed097</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>

    <?php
    $correctnumber = 79; // The correct number for the game

    // Check if the 'guess' parameter is set
    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];

        // Check if the guess is not numeric
        if (!is_numeric($guess)) {
            echo "Your guess is not a number";
        } 
        // Check if the guess is too low
        else if ($guess < $correctnumber) {
            echo "Your guess is too low";
        } 
        // Check if the guess is too high
        else if ($guess > $correctnumber) {
            echo "Your guess is too high";
        } 
        // Check if the guess is correct
        else if ($guess == $correctnumber) {
            echo "Congratulations - You are right";
        }
    } 
    // If the 'guess' parameter is missing
    else {
        echo "Missing guess parameter";
        echo "<br>Your guess is too short";
    }
    ?>
</body>
</html>
