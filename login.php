<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>


#mySidenav a {
    position: absolute; 
    right: 30px; 
    transition: 0.3s; 
    padding: 15px;
    width: 50px; 
    text-decoration: none; 
    font-size: 20px; 
    color: black; 
    border-radius: 10px 10px 10px 10px; 
}
#mySidenav a:hover {
    right: -5px; 
}

#about {
    top: 145px;
    background-color: #d3d3d3;
}



.parallax {
  background-image:url("nh.jpeg");
    min-height: 500px;
    background-attachment:fixed; 
    background-position: center;
    background-repeat: no-repeat;}

.center {
   
    position: absolute;
    top: 80px;
    left: 150px;
    font-size: 18px;
}
#paragraph{position:relative;
  z-index:100;
  padding:60px;
  background:white;opacity:0.6;
  color:#35586C;font-family:Brush 
Script MT;font-size:18px;
width:100%;left:500px;}



</style>
<body background="light2.jpg">
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index1.php");
         }else{
	echo "<div class='form'><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><Br><Br>
<h3 align='center'><font color='pink' size='+10'>Username/password is incorrect.</font></h3>
<br/><font color='pink' size='+10'><center>Click here to <a href='login.php'><font color='blue' size='+10'>Login</a></font></font></center></div>";
	}
    }else{
?>
<div id="mySidenav" class="sidenav">
  <a href="index.php" id="about">Home</a>
</div>



 <div class="center"> <br><br><br><br><br>
 <div class="parallax">
    <div id="paragraph">
<h1>Welcome to Your Gym </h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br><br>
<input type="password" name="password" placeholder="Password" required /><br><br>
<input name="submit" type="submit" value="Login" />&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Reset" value="clear your data"><br>
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>