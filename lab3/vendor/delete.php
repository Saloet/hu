<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `cashout` WHERE `cashout`.`id` = '$id'");

header('Location:/');