<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		 $conn = mysqli_connect("localhost","root","","pizzacentral");
		if(!$conn){
			die('Not connected to Database');
		}else{
			$query = "INSERT INTO user (user, mail, pass) VALUES ('{$_POST['name']}','{$_POST['email']}','{$_POST['password']}')";
			$res = mysqli_query($conn,$query);
			if ($res==TRUE) {
				echo "Succesfully inserted";
			}else{
				echo "Insertion failed";
			}
		}
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<div style="padding-top: 10%;padding-left: 35%;">
			<form action="register.php" method="POST">
				<h2>Register</h2>
				<input type="text" name="user" placeholder="Username"><br>
				<input type="password" name="pass" placeholder="Password"><br>
				<input type="text" name="mail" placeholder="E-mail"><br>
				<input type="submit" value="Populate">

			</form>
		</div>
		</body>
		</html>
		<?php
	}
?>