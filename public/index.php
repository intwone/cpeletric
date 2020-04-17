<?php
session_start();

if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
	echo 'AREA RESTRITA';
} else {
	header("location: login.php");
}
?>
