<?php
session_start();

if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
	header("location: ../src/pages/home.php");
} else {
	header("location: ..src/pages/login.php");
}
?>
