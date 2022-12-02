<?php
session_start();
?>
<html lang="en">
<head>
	<link rel="stylesheet" href="login.css">

	<title>WEB LOGIN</title>
</head>
<body>	
		<div class="body">
			<h1>Biodata</h1>
				<form action="cek_login.php" method="post">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username" required>
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
		</div>
</body>
