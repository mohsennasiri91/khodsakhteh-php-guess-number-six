<?php
session_start();
include_once './includes/functions.php';
if (isset($_POST['game'])) {
    switch ($_POST['game']) {
        case 'start':
            setGameOptions(true, 6, 10);
            break;
        default:
            setGameOptions(false, 0, 0);
    }
} else {
    setGameOptions(false, 0, 0);
}
if ($_SESSION['game-started'] == true) {
    header("Location:./");
    die();
} else {
    header("Location:./about.php");
    die();
}
