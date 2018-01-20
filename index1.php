<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="img4.jpg"><center><font color='black' size='+10'>
<div class="form"><br><br>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>You have successfully signed in.</p>
<p><a href="dashboard.php">Options</a></p>
<a href="logout.php">Logout</a>
</div>
</body></center></font>
</html>