<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$Number = $_POST['Number'];
$Date = $_POST['Date'];
$Id_cashout = $_POST['Id_cashout'];

mysqli_query($connect,"INSERT INTO `credit` (`id`, `Number`, `Date`, `Id_cashout`) VALUES ('id', '$Number', '$Date', '$Id_cashout')");

header('Location: /');
