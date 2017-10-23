<!DOCTYPE html>
<html>
<head>
	<title>ViewUserPosts</title>
</head>
<body>
<div style="text-align: center; margin-bottom: 100px;">
	
	<form action= "ViewUserPosts_html.php" id="userIDForm" method="post">
	<span style="font-size: 25px;">UserID:</span>
	<select style="width:200px; font-size: 25px;" name="userID" form="userIDForm">
	<?php
		$mysqli = new mysqli("mysql.eecs.ku.edu", "sdeng", "P@$$word123", "sdeng");

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		$query = "SELECT * FROM users";
		$result = $mysqli->query($query); 
					
		if ($result->num_rows == 0) {
			
		}elseif ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
       			echo "<option>".$row["id"]."</option>";
    		}
		}
		$mysqli->close();
	?>
	</select>
		<input type="submit" name="" value="submit" style="height: 25px;">
	</form>
	
</div>
</body>
</html>