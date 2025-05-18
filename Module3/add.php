<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $taskText = trim($_POST['task']);
  if ($taskText !== '') {
    $taskText = htmlspecialchars($taskText);
    $tasks = json_decode(file_get_contents('tasks.json'), true);
    $tasks[] = ["text" => $taskText, "done" => false];
    file_put_contents('tasks.json', json_encode($tasks));
  }
  header("Location: index.php");
  exit;
}
?>