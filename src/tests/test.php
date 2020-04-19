<?php
require_once '../classes/Users.php';

$user = new Users();

$user->userLogin("pati.tav@gmail.com", "823fec7a2632ea7b498c1d0d11c11377");
$name = $user->getUsername();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CP ELETRIC HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
  <div class="username"><?php echo $name; ?></div>
  </body>
</html>

