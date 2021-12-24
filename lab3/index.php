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
    <h1 style='color: #A52A2A'>База даних "Наш Банк" таблиця cashout</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Soum</th>
            <th>Id_credit</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php


            $banks = mysqli_query($connect, "SELECT * FROM `cashout`");


            $banks = mysqli_fetch_all($banks);


            foreach ($banks as $bank) {
                ?>
                <tr>
                    <td><?= $bank[0] ?></td>
                    <td><?= $bank[1] ?></td>
                    <td><?= $bank[2] ?></td>
                    <td><?= $bank[3] ?></td>
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
            <p>Amount</p>
            <input type="number" name="Amount" placeholder="Amount">
            <p>Soum</p>
            <input type="number" name="Soum" placeholder="Soum"> 
            <p>Id_credit</p>
            <input type="number" name="Id_credit" placeholder="Id_credit"> <br> <br>
            <button type="submit" name="send">Add new customer</button>
            </form>
        </body>
        </html>