<?php

$user_choice = $_POST['choice'];

function computer_choice() {
    $choices = array("rock", "paper", "scissors");
    $index = rand(0, 2);
    return $choices[$index];
}

function determine_winner($user_choice, $computer_choice) {
    if ($user_choice == $computer_choice) {
        return "It's a tie!";
    }
    elseif($user_choice == "rock" && $computer_choice == "scissors") {
        return "You win!";
    }
    elseif($user_choice == "paper" && $computer_choice == "rock") {
        return "You win!";
    }
    elseif($user_choice == "scissors" && $computer_choice == "paper") {
        return "You win!";
    } else {
        return "Computer wins!";
    }
}

if (!empty($user_choice)) {
    $computer_choice = computer_choice();
    $result = determine_winner($user_choice, $computer_choice);

    echo "You chose $user_choice.<br>";
    echo "Computer chose $computer_choice.<br>";
    echo "$result";
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="radio" name="choice" value="rock"> Rock <br>
        <input type="radio" name="choice" value="paper"> Paper <br>
        <input type="radio" name="choice" value="scissors"> Scissors <br>
        <input type="submit" value="Play">
    </form>
</body>
</html>
