<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form action="DeletePost_html.php" method="post">
	<table cellpadding="10" border="2">
	<tr>
		<th>UserID</th>
		<th>Content</th>
		<th>Delete?</th>
	</tr>
		<?php
		$mysqli = new mysqli("mysql.eecs.ku.edu", "sdeng", "P@$$word123", "sdeng");

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		$query = "SELECT * FROM posts";
		$result = $mysqli->query($query); 			
		if ($result->num_rows == 0) {
			echo "<tr><th>"."no content"."</th></tr>";
		}elseif ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
       			echo "<th>".$row["author_id"]."</th>";
       			echo "<th>".$row["content"]."</th>";
       			echo "<th><input type=\"checkbox\" id = \"post_id\" name =\"delepostID[]\" value=\"".$row["post_id"]."\"></th>";
       			echo "</tr>";
    		}
		}
		$mysqli->close();
		?>
	</table>
	<input type='submit' value="submit" name="">
	</form>
</div>
</body>
</html>