<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "sdeng", "P@$$word123", "sdeng");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
// get form parameter
$userid = $_POST['userid'];
$content = $_POST['content'];

$query = "SELECT id FROM users WHERE id='".$userid."'";
$result = $mysqli->query($query); 

if ($result->num_rows == 0) {
	echo "The user is not exsit!!! ╮(╯_╰)╭";
}else{
	$query2 = "INSERT INTO posts (author_id,content) VALUES('".$userid."','".$content."')";
	if($mysqli->query($query2) === true){
		echo "insert users successed! O(∩_∩)O~~";
	}else{
		echo "insert users failed!! ╮(╯﹏╰）╭";
	}
}
$mysqli->close();
?>