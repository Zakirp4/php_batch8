<?php
if (isset($_POST['index'])) {
  $index = (int)$_POST['index'];
  $tasks = json_decode(file_get_contents('tasks.json'), true);
  if (isset($tasks[$index])) {
    $tasks[$index]['done'] = !$tasks[$index]['done'];
    file_put_contents('tasks.json', json_encode($tasks));
  }
}
header("Location: index.php");
exit;
?>