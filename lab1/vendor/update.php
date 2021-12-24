<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$tele_number = $_POST['tele_number'];


mysqli_query($connect, "UPDATE `customer` SET `id` = '$id',`name` = '$name', `age` = '$age' `tele_number` = '$tele_number' WHERE `customer`.`id` = '$id'");


header('Location: /');