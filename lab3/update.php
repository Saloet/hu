<?php

require_once 'config/connect.php';

$id = $_GET['id'];

$bank = mysqli_query($connect, "SELECT * FROM `cashout` WHERE `id` = '$id' ");

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
        <p>Amount</p>
        <input type="number" name="Amount" value="<?= $bank['Amount'] ?>">
        <p>Soum</p>
        <input type="number" name="Soum" value="<?= $bank['Soum'] ?>">
        <p>Id_credit</p> <br>
        <input type="number" name="Id_credit" value="<?= $bank['Id_credit'] ?>">
        <br><br><button type="submit">Update</button>
    </form>
</body>
</html>