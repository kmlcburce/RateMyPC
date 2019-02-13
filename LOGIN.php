<?php
	include "loginphpfile.php"
?>

<html>
	<head>
		<title>LOGIN</title>
	</head>

<body>
	<form action="login.php" method="post">
		<container>
			  Login:<br>
			  <input type="text" name="user" value="User">
			  <br>
			  Password:<br>
			  <input type="text" name="password" value="Password">
			  <br><br>
			  <input type="submit" value="Submit">	
		</container>
	</form>
</body>

	<script>
	
		function myName(){

			var data = document.getElementById('target').value;
			
			document.getElementById('target2').innerHTML = 	data;
		}

		</script>

</html>
