 <?php
session_start();

$dsn = "mysql:dbname=system_management;host=localhost";
$dbuser = "root";
$operationalSystem = PHP_OS;
global $pdoConnection;

if($operationalSystem == "WINNT") {
  $dbpassword = "";
} else {
  $dbpassword = "root";
}

try {
  $pdoConnection = new PDO($dsn, $dbuser, $dbpassword);
} catch(PDOexception $e) {
  echo "ERROR: ".$e->getMessage();
  exit;
}
?>