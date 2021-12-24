<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `balance` WHERE `balance`.`id` = '$id'");

header('Location:/');