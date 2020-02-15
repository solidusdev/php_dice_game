<?php

    echo nl2br("----- Welcome to the Dice Game! ------" . "\n\n");
    echo nl2br("Rules are:" . "\n\n");
    echo nl2br("1. CPU A or CPU B must reach 3 wins in order to end the game" . "\n");
    echo nl2br("2. Draws do not count as either a win or loss" . "\n");
    echo nl2br("\nBegin!" . "\n");

    $cpu_A_score = 0;
    $cpu_B_score = 0;
    $round = 0;

    function calculate_game($cpu_A_roll, $cpu_B_roll, $round) {

        if ($cpu_A_roll > $cpu_B_roll) {
            echo ('CPU A has won Round ' . $round);
            return true;
        }

        else if ($cpu_A_roll < $cpu_B_roll) {
            echo ('CPU B has won Round ' . $round);
            return false;
        }

        else {
            echo nl2br("Round " . $round . " is a draw!\n");
        }
    }

    while ($cpu_A_score < 3 && $cpu_B_score < 3) {
        
        $cpu_A_roll = rand(1,6);
        $cpu_B_roll = rand(1,6);
        $round++;

        echo nl2br("\nCPU A Roll: " . $cpu_A_roll . "\nCPU B Roll: " . $cpu_B_roll . "\n");
        $determine_winner = calculate_game($cpu_A_roll, $cpu_B_roll, $round);

        if ($determine_winner === true) {
            $cpu_A_score++;
            echo nl2br("\nCPU A Score: " . $cpu_A_score . "\n");
        }

        else if ($determine_winner === false) {
            $cpu_B_score++;
            echo nl2br("\nCPU B Score " .  $cpu_B_score . "\n");
        }
    }

    if ($cpu_A_score > $cpu_B_score) {
        echo nl2br("\nCPU A wins at Round: " . $round);
    }

    else {
        echo nl2br("\nCPU B wins at Round: " . $round);
    }
?>