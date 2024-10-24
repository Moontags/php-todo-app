<?php

session_start();

if (isset($_POST['task_index'])) {
    $task_index = $_POST['task_index'];

    // Remove the task from the session array
    if (isset($_SESSION['tasks'][$task_index])) {
        unset($_SESSION['tasks'][$task_index]);

        // Re-index the array to avoid gaps in the index numbers
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
}

// Redirect back to the todo.php page
header("Location: todo.php");
exit();
