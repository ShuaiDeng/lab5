<?php
		$mysqli = new mysqli("mysql.eecs.ku.edu", "sdeng", "P@$$word123", "sdeng");

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		$userID = $_POST['userID'];

		$query = "SELECT content FROM posts WHERE posts.author_id='".$userID."'";
		$result = $mysqli->query($query); 
		echo "<html><head></head><body><span style=\"text-align: center;margin-left: 50%;\" ><a href=\"AdminHome.html\">Index</a></span><table cellpadding=\"10\" border=\"2\"><tr><th>content</th><tr>";			
		if ($result->num_rows == 0) {
			echo "<tr><th>"."no content"."</th></tr>";
		}elseif ($result->num_rows > 0) {
			
			while($row = $result->fetch_assoc()) {
       			echo "<tr><th>".$row["content"]."</th></tr>";
    		}
    		
		}
		echo "</table></body></html>";
		$mysqli->close();
	?>