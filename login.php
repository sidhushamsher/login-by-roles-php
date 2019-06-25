<?php
session_start();
include 'vendor/php/login_api.php';
$obj	=	new login_api();
if (isset($_POST['submit'])) {
	# code...
	$email	=	strtolower($_POST['email']);
	$password	=	$_POST['password'];
	$role	=	$_POST['role'];
	
	$sql	=	"SELECT * FROM users WHERE email='$email' AND password='$password' AND role='$role' AND user_status='1'";
	$sqlQ	=	$obj->sqlQuery_S($sql);

	if ($sqlQ['rows'] > 0) {
		# code...
		$data	=	mysqli_fetch_assoc($sqlQ['exe']);
		$_SESSION['user_logged_in']	=	$data;
		/*echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
*/
		header('location:login.php');
	}
}

?>
<form method="post">
	<input type="email" name="email" placeholder="email">
	<br>
	<br>
	<input type="password" name="password" placeholder="password">
	<br>
	<br>
	<select name="role">
		<option value="1">admin</option>
		<option value="2">staff</option>
		<option value="3">student</option>
	</select>
	<br>
	<br>
	<input type="submit" name="submit">
	<br>

</form>