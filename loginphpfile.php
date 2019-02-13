<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$conn = mysqli_connect("localhost","root", "", "ratemypc" );
	if(!$conn){
		die('Not connected');
	}else{
		$sql = "SELECT id FROM user WHERE name = '$user' and pass = '$password' "
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	$active = $row['active'];
		
		if($count == 1) {
	        echo "WELCOME"
      	}else {
         	echo "Your Login Name or Password is invalid"
      }
	}
}

?>