<?php

session_start();


if (isset($_POST['task'])) {
    //  Prevent XSS  attacks
    $task = htmlspecialchars($_POST['task']);

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
    $_SESSION['tasks'][] = $task;

    header("Location: todo.php");
    exit();
}


