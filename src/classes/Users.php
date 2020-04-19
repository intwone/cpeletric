<?php
require_once '../controllers/config.php';

class Users {

  private $name;


  /**
   * Checks if the user exist in database
   */
  public function userLogin($email, $password) {
    global $pdoConnection;
    $sql = "SELECT * FROM users WHERE user_email = :user_email AND user_password = :user_password";
		$sql = $pdoConnection->prepare($sql);
		$sql->bindValue(':user_email', $email);
    $sql->bindValue(':user_password', $password);
		$sql->execute();
		
    if($sql->rowCount() > 0) {
      $data = $sql->fetch();
      $_SESSION['userid'] = $data['user_id'];
      $username = explode(" ", $data['user_name']);
      $this->name = strtoupper($username[0]);
			header("Location: ../../public/index.php");
    }
  }

  public function getUsername() {
    return $this->name;
  }
}
?>