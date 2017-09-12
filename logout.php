<?php
	session_start();
	session_unset($_SESSION['state']);
	//session_destroy();

	header('Location: index.php');
?>