<?php
function setGameOptions($started = false, $number = 0, $hearts = 10)
{
    $temp = "";
    for ($i = 0; $i < $number; $i++) {
        $temp .= rand(0, 9);
    }
    $_SESSION['game-started'] = $started;
    $_SESSION['number'] = $temp;
    $_SESSION['guesses'] = [];
    $_SESSION['hearts'] = $hearts;
}
