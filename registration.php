<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
.parallax {
  background-image:url("nh.jpeg");
    min-height: 500px;
    background-attachment:fixed; 
    background-position: center;
    background-repeat: no-repeat;}

.center {
   
    position: absolute;
    top: 8px;
    left: 16px;
    font-size: 18px;
}
#paragraph{position:relative;
  z-index:100;
  padding:60px;
  background:white;opacity:0.6;
  color:#35586C;font-family:Brush 
Script MT;font-size:18px;
width:100%;left:500px;}





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


</style>

<body background="light2.jpg">
<?php
date_default_timezone_set('UTC');

require('db.php');
// If form submitted, insert values into the database.

if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3 align='center'><font color='pink' size='+10'>You are registered successfully.</h3>
<br/><center><font color='pink' size='+10'>Click here to <a href='login.php'><font color='blue' size='+10'>Login</a></font></font></div>";
        }
    }else{
?>
<div id="mySidenav" class="sidenav">
  <a href="index.php" id="about">Home</a>
</div>


 <div class="center"> <br><br><br><br><br>
 <div class="parallax">
    <div id="paragraph">
<center><h1>Sign Up</h1></center>
<h2>Welcome to Your Gym </h2>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required /><br><br>
<input type="email" name="email" placeholder="Email" required /><br><br>
<input type="password" name="password" placeholder="Password" required /><br><br>
<input type="submit" name="submit" value="Register" />&nbsp&nbsp&nbsp
<input type="Reset" value="clear your data"><br>
</form>
<p>Already have an account <a href='login.php'>Sign in Here</a></p>
</div>
<?php }
 
?>
</body>
</html>