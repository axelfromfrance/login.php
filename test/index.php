<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>email</label>
     	<input type="text" name="uname" placeholder="email"><br>

     	<label>mot de passe</label>
     	<input type="password" name="password" placeholder="mot de passe"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>