<?php
if (isset($_POST['index'])) {
  $index = (int)$_POST['index'];
  $tasks = json_decode(file_get_contents('tasks.json'), true);
  if (isset($tasks[$index])) {
    array_splice($tasks, $index, 1);
    file_put_contents('tasks.json', json_encode($tasks));
  }
}
header("Location: index.php");
exit;
?>