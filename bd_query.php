<?php
$mysqli = new mysqli('127.0.0.1', 'taras', '123456', 'taras');
$key = isset($_COOKIE['user_key']) ?  $_COOKIE['user_key'] : $value;
$sql = "SELECT * FROM `user` WHERE `user_key` = '$key'";
$result = $mysqli->query($sql);
$actor = $result->fetch_assoc();

// var_dump($actor['pay']);

?>