<?php

require_once 'config/connect.php';

$id = $_GET['id'];

$bank = mysqli_query($connect, "SELECT * FROM `customer` WHERE `id` = '$id' ");

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
        <input type="text" name="name" value="<?= $bank['name'] ?>">
        <p>age</p>
        <input type="number" name="age" value="<?= $bank['age'] ?>">
        <p>tele_number</p> <br>
        <input type="number" name="tele_number" value="<?= $bank['tele_number'] ?>">
        <br><br><button type="submit">Update</button>
    </form>
</body>
</html>