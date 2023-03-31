<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<ul>
  <li><a href="/login/calendar/index.html">Ajoutez des disponibilités</a></li>
  <li><a href="news.asp">Contact</a></li>
  <li><a href="/login/test/hospitalisation.php">dispo</a></li>
</ul>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>