<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<?php
require('db.php');

extract ( $_POST );
echo"<form method='POST' action='getuser.php'>
<input type='hidden' name='react' value='view_user'>
<select name='username' size='1' onchange='showUser(this.value)'>";
$query = "SELECT username FROM users ORDER BY username";
$result = mysql_query($query, $mysql_link);
if(mysql_num_rows($result)){

	while($row = mysql_fetch_row($result))
	{
		print("<option value=>$row[0]</option>");
	}
}

mysqli_select_db("id4354685_mydb",$con);
$sql="SELECT * FROM users WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Date</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['trn_date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>
