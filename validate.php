<?php

include_once('DatabaseUtilities.php');
$conn=DatabaseUtilities::getConnection('notes');

function test_input($data) {

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

	$user_name = test_input($_POST["user_name"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM login");
	$stmt->execute();

	$users = $stmt->fetch_assoc($row['user_name'],$row['password']);

	foreach($users as $user) {

		if(($user['user_name'] == $user_name) &&
			($user['password'] == $password)) {
				header("Location: List.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
