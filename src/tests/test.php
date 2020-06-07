<?php
require_once '../classes/Users.php';

$user = new Users();

$userEmail = addslashes($_POST['email']);
$userPassword = md5(addslashes($_POST['pass']));
$user->userLogin($userEmail, $userPassword);

$name = $user->getName();
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
  <div class="username"><?php echo $name; ?></div>
  <?php


  ?>
  </body>
</html>


