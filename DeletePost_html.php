<?php
	$mysqli = new mysqli("mysql.eecs.ku.edu", "sdeng", "P@$$word123", "sdeng");

		/* check connection */
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}
		$postIds = $_POST['delepostID'];
		
		$query = "DELETE FROM posts WHERE post_id in(";
		for ($i=0; $i <count($postIds)-1 ; $i++) { 
			$query .= $postIds[$i].",";
		}

		$query .= $postIds[count($postIds)-1].")";
	
		$result = $mysqli->query($query);
		echo "<span style=\"text-align: center;margin-left: 50%;\" ><a href=\"AdminHome.html\">Index</a></span>"; 	
		echo "<p>delete success</p>";		
		$mysqli->close();
	


?>