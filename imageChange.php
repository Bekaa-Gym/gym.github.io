<!DOCTYPE html>
<?php
require('db.php');
include("auth.php");

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src='js/bootstrap.min.js'></script>
<script src='js/jquery.js'></script>
<script type="text/javascript">
	$(document).ready(function(){

		//jquery script
		$("#username").change(function(){
			var username = $(this).val();
			//now sending this username to ajax page for geting img saved against this username.
			$.ajax({
				url:"ajaxpage.php",
				data:{data:username}
			}).done(function(result)
			{
				//now assign result to its related place
				$(".img").html(result);
			})
		});

	});
</script>
<style type="text/css">
	.cntr {width: 50% ;margin: auto}
</style>
</head>

<body background="light.jpg">

<div class="well well-sm cntr">
	<h3 class="well well-sm " style="text-align: center;">Search for your best trainer photo</h3>
	<div class="img ">
		<img src="photo/user.png"  class="img-responsive center" style="width: 300px;margin: auto;height:300px">
	</div><br>
	<input type="text" placeholder="username" class="form-control cntr input-sm" id="username">
	<br><BR><BR><BR><BR><BR>
	<br><BR><BR><BR><BR><BR>

</body>
</html>