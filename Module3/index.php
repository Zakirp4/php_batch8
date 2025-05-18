<?php
// Load tasks from JSON file
$tasks = json_decode(file_get_contents('tasks.json'), true);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Simple To-Do App</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>My To-Do List</h1>
    <form action="add.php" method="POST">
      <input type="text" name="task" placeholder="Enter a new task">
      <button type="submit">Add Task</button>
    </form>
    <ul>
      <?php foreach ($tasks as $index => $task): ?>
        <li>
          <form action="toggle.php" method="POST" style="display:inline">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <button class="task-btn <?php echo $task['done'] ? 'done' : ''; ?>">
              <?php echo htmlspecialchars($task['text']); ?>
            </button>
          </form>
          <form action="delete.php" method="POST" style="display:inline">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <button class="delete">Delete</button>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
