<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$tele_number = $_POST['tele_number'];

mysqli_query($connect,"INSERT INTO `customer` (`id`, `name`, `age`, `tele_number`) VALUES ('id', '$name', '$age', '$tele_number')");

header('Location: /');
