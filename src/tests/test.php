<?php
require_once '../classes/Invoices.php';

$invoices = new Invoices();

$invoices->amountSpentPerMonth();
$refMonth = json_encode($invoices->getRefMonth());
$totalValue = json_encode($invoices->getTotalValue());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CP ELETRIC HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <form action="" method="POST">
      <input class="input100" type="text" name="email" placeholder="Email">
      <input class="input100" type="password" name="pass" placeholder="Password">
      <button class="login100-form-btn">
        Login
      </button>
    </form>
  <div class="username"><?php  print_r($refMonth); print_r($totalValue); ?></div>
  <?php


  ?>
  </body>
</html>


