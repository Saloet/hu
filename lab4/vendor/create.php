<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$Check_balance = $_POST['Check_balance'];
$Transfer = $_POST['Transfer'];
$Cashout = $_POST['Cashout'];
$Id_customer = $_POST['Id_customer'];
$Id_cashout = $_POST['Id_cashout'];

mysqli_query($connect,"INSERT INTO `balance` (`id`, `Check_balance`, `Transfer`, `Cashout`,`Id_customer`, `Id_cashout`) VALUES ('id', '$Check_balance', '$Transfer', '$Cashout',`Id_customer`, `Id_cashout`)");

header('Location: /');
