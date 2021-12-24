<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$Number = $_POST['Number'];
$Date = $_POST['Date'];
$Id_cashout = $_POST['Id_cashout'];


mysqli_query($connect, "UPDATE `customer` SET `id` = '$id',`Number` = '$Number', `Date` = '$Date' `Id_cashout` = '$Id_cashout' WHERE `customer`.`id` = '$id'");


header('Location: /');