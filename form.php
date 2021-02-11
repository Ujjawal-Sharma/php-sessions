<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 
<body>
	<form class="form" action="auth.php" method="POST">
		<div class="img-overlay"></div>
		<div class="username">
		<?php 
			session_start();
			if(!empty($_SESSION['name'])) {
			$name =  strstr($_SESSION['name'],"@",True);
			echo "Hello, ".$name." ";
		}
			else {
			echo "Fill all the fields";
		}
		?>
		</div>
		<h1>Join our community of developer from all over the world</h1>
		<div class="input">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="email"/>
		</div>
		<div class="input">
			<label for="password">Password</label>
			<input type="password" id="password" placeholder="password" name="password">
		</div>
		<input type="hidden" name="start" 
		value="<?php date_default_timezone_set('Asia/Calcutta'); 
		echo date('F j, Y, g:i a');?>">
		<button class="button">Sign In</button>
		<p>Already have an account</p>
		<div class="history">
		<?php
			foreach($_SESSION['user'] as $key => $value) {
					echo "<br><h2> ".$value[email]."</h2><br>";
					echo "<h2>".$_SESSION['started']."</h2>";
				echo "<br><hr>";
			}
		?>
		</div>
		<div class="username">
		</div>
	</form>
</body>
</html>