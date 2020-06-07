<?php
require_once '../controllers/config.php';

class Users {

  private $name;

  public function userLogin($email, $password) {
    global $pdoConnection;
    $sql = "SELECT * FROM users WHERE user_email = :user_email AND user_password = :user_password";
		$sql = $pdoConnection->prepare($sql);
		$sql->bindValue(':user_email', $email);
    $sql->bindValue(':user_password', $password);
		$sql->execute();
		
    if($sql->rowCount() > 0) {
      $data = $sql->fetch();
      $username = explode(" ", $data['user_name']);
      $_SESSION['userid'] = strtoupper($username[0]);
			header("Location: ../../public/index.php");
    }
  }
}
?>