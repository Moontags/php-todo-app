<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css"> >
</head>
<body>
    <div class="wrapper">
        <h1>Things To Do
        </h1>
        <form action="add_task.php" method="POST">
            <div class="form-group">
                <input type="text" name="task" placeholder="Enter here" required>
            </div>
            <div class="form-group">
                <button type="submit">Add New Goal</button>
            </div>
        </form>
        <h2>Daily Plans</h2>
        <ul>
    <?php
    
    if (isset($_SESSION['tasks']) && count($_SESSION['tasks']) > 0) {
        // Loop through each task and display it as a list item with a delete button
        foreach ($_SESSION['tasks'] as $index => $task) {
            echo "<li><span class='task-text'>" . htmlspecialchars($task) . "</span>
                     <form action='delete_task.php' method='POST' style='display:inline'>
                         <input type='hidden' name='task_index' value='$index'>
                         <button type='submit' class='delete-btn'>Delete</button>
                     </form>
                  </li>";
        }
    } else {
         echo "<li class='no-tasks'>No daily plans added yet? Start Today!</li>";
    }
    ?>
</ul>
    </div>
</body>
</html>
