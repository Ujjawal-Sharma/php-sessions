<?php
		session_start();
			$username = strstr($_REQUEST['email'], "@", True);
			if(isset($_REQUEST)) {
			$_SESSION['user'][$username] = $_REQUEST;
			$_SESSION['started'] = $_REQUEST['start'];
			$_SESSION['name'] = $_REQUEST['email'];
		}
	
			$path = 'form.php';
			header("Location:form.php");
			//session_destroy();
?>