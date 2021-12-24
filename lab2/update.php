<?php

require_once 'config/connect.php';

$id = $_GET['id'];

$bank = mysqli_query($connect, "SELECT * FROM `credit
    ` WHERE `id` = '$id' ");

$bank = mysqli_fetch_assoc($bank);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Bank</title>
</head>
<style>
    body {
      background-color: #FFF8DC;

  }
</style>
<body>
    <h3>Update Bank</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $bank['id'] ?>">
        <p>name</p>
        <input type="text" name="Number" value="<?= $bank['name'] ?>">
        <p>Date</p>
        <input type="number" name="Date" value="<?= $bank['Date'] ?>">
        <p>Id_cashout</p> <br>
        <input type="number" name="Id_cashout" value="<?= $bank['Id_cashout'] ?>">
        <br><br><button type="submit">Update</button>
    </form>
</body>
</html>