<?php
$mysqli = new mysqli('127.0.0.1', 'taras', '123456', 'taras');
$sql = "INSERT INTO `user` (`id`, `user_key`, `pay`) VALUES (NULL, '$value', '0')";
$result = $mysqli->query($sql);

// $actor = $result->fetch_assoc();
// var_dump($actor);
?>