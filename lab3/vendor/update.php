<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$Amount = $_POST['Amount'];
$Soum = $_POST['Soum'];
$Id_credit = $_POST['Id_credit'];


mysqli_query($connect, "UPDATE `cashout` SET `id` = '$id',`Amount` = '$Amount', `Soum` = '$Soum' `Id_credit` = '$Id_credit' WHERE `cashout`.`id` = '$id'");


header('Location: /');