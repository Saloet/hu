<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$Amount = $_POST['Amount'];
$Soum = $_POST['Soum'];
$Id_credit	 = $_POST['Id_credit'];

mysqli_query($connect,"INSERT INTO `cashout` (`id`, `Amount`, `Soum`, `Id_credit`) VALUES ('id', '$Amount', '$Soum', '$Id_credit')");

header('Location: /');
