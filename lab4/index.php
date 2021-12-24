<?php

require_once 'config/connect.php';

?>


<?php

 /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
      $name = "First name is required";
   }
   else {
      $name = test_input($_POST["name"]);
   }
   if (empty($_POST["age"])) {
      $age = "Last name is required";
   }
   else {
      $age = test_input($_POST["age"]);
   }
   if (empty($_POST["tele_number"])) {
      $tele_number = "Email is required";
   }
   else {
      $tele_number = test_input($_POST["tele_number"]);
   }

}
echo $name;
echo $age;
echo $tele_number;*/

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank</title>
</head>
<style>
    th, td {
        padding: 15px;
    }

    th {
        background: #BDB76B;
        color: #2F4F4F;
    }

    td {
        background: #8FBC8F;
    }

    body {
      background-color: #ADD8E6;
      margin-top:20px;

  }

</style>
<body>
    <h1 style='color: #A52A2A'>База даних "Наш Банк" таблиця balance</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Check_balance</th>
            <th>Transfer</th>
            <th>Cashout</th>
            <th>Id_customer</th>
            <th>Id_cashout</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php


            $banks = mysqli_query($connect, "SELECT * FROM `balance`");


            $banks = mysqli_fetch_all($banks);


            foreach ($banks as $bank) {
                ?>
                <tr>
                    <td><?= $bank[0] ?></td>
                    <td><?= $bank[1] ?></td>
                    <td><?= $bank[2] ?></td>
                    <td><?= $bank[3] ?></td>
                    <td><?= $bank[4] ?></td>
                    <td><?= $bank[5] ?></td>
                    <td><a href="update.php?id=<?= $bank[0] ?>">Update</a></td>
                    <td><a style="color: red;" href="vendor/delete.php?id=<?= $bank[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <h3>Add new customer</h3>
        <form action="vendor/create.php" method="POST">
            <p style='color: red;font-style: italic;'>Ведіть дані</p>
            <p>Check_balance</p>
            <input type="number" name="Check_balance" placeholder="Check_balance">
            <p>Transfer</p>
            <input type="number" name="Transfer" placeholder="age"> 
            <p>Cashout</p>
            <input type="number" name="Cashout" placeholder="Cashout"><br> <br>
            <p>Id_customer</p>
            <input type="number" name="Id_customer" placeholder="Id_customer">
            <p>Id_cashout</p>
            <input type="number" name="Id_cashout" placeholder="Id_cashout">
            <button type="submit" name="send">Add new customer</button>
            </form>
        </body>
        </html>