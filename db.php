<?php
$con = mysqli_connect ("localhost","id4354685_abc","AnotherDay@@AnotherDollar") ;

if (!$con)
{
	die('Could not connect: '. mysqli_error()) ;

}
mysqli_select_db($con, "id4354685_mydb") ; 
?>