<?php 
require('db.php');

$username = $_REQUEST['data'];

$conn = new mysqli('localhost','id4354685_abc','AnotherDay@@AnotherDollar','id4354685_mydb');


$query = $conn->query("select userimg from images where username = '$username'");

if($query->num_rows > 0)
{
	 $userData = $query->fetch_assoc();
		echo "<img src='photo/".$userData['userimg']."'class='img-responsive center' style='width: 300px;margin: auto;height:300px;' >";
}
else
	echo "<img src='photo/unknown.png' class='img-responsive center' style='width: 300px;margin: auto;height:300px;' >";
//if not found then unknown.png will be returned

 ?>
