<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `credit` WHERE `credit`.`id` = '$id'");

header('Location:/');