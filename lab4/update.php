<?php

require_once 'config/connect.php';

$id = $_GET['id'];

$bank = mysqli_query($connect, "SELECT * FROM `balance` WHERE `id` = '$id' ");

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
        <p>Check_balance</p>
        <input type="number" name="Check_balance" value="<?= $bank['Check_balance'] ?>">
        <p>Transfer</p>
        <input type="number" name="Transfer" value="<?= $bank['Transfer'] ?>">
        <p>Cashout</p> <br>
        <input type="number" name="Cashout" value="<?= $bank['Cashout'] ?>">
        <p>name</p>
        <input type="number" name="Id_customer" value="<?= $bank['Id_customer'] ?>">
        <p>age</p>
        <input type="number" name="Id_cashout" value="<?= $bank['Id_cashout'] ?>">
        <br><br><button type="submit">Update</button>
    </form>
</body>
</html>