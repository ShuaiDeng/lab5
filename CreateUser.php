<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sdeng", "P@$$word123", "sdeng");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
// get form parameter
$id = $_POST['username'];
// username unique
$query = "SELECT id FROM users WHERE id='".$id."'";

$result = $mysqli->query($query); // if it's no result  the $result is null
if ($result->num_rows > 0) {
	echo "This id is still exsit!!! ╮(╯_╰)╭";
}else{
	$query2 = "INSERT INTO users (id) VALUES('".$id."')";
	if($mysqli->query($query2) === true){
		echo "insert users successed! O(∩_∩)O~~";
	}else{
		echo "insert users failed!! ╮(╯﹏╰）╭";
	}
}

$mysqli->close();
?>