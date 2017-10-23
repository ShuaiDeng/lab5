<!DOCTYPE html>
<html>
<head>
	<title>ViewUsers</title>
</head>
<body>
<span style="text-align: center;margin-left: 50%;" ><a href="AdminHome.html">Index</a></span>
<div style="text-align: center;font-size: 25px; margin-left:50%">
	<table style="text-align: center;" cellpadding="10" border="2">
		<tr>
			<th>
				UserID
			</th>
		</tr>
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
						echo "<tr><td>"."no data"."</td><tr>";
					}elseif ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
       							echo "<tr>"."<td>".$row["id"]."</td></tr>";
    					}
					}
					$mysqli->close();
				?>
	</table>
</div>
</body>
</html>