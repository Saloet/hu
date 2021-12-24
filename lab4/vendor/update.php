<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$Check_balance = $_POST['Check_balance'];
$Transfer = $_POST['Transfer'];
$Cashout = $_POST['Cashout'];
$Id_customer = $_POST['Id_customer'];
$Id_cashout = $_POST['Id_cashout'];


mysqli_query($connect, "UPDATE `balance` SET `id` = '$id',`Check_balance` = '$Check_balance', `Transfer` = '$Transfer' `Cashout` = '$Cashout' ,`Id_customer` = '$Id_customer', `Id_cashout` = '$Id_cashout' WHERE `balance`.`id` = '$id'");


header('Location: /');