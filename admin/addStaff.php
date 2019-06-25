<?php
session_start();
include 'vendor/php/admin_api.php';
$obj	=	new api();
?>
<form method="post">
	<input type="text" name="staff_name" placeholder="staff_name">
	<br>
	<br>
	<input type="email" name="staff_email" placeholder="staff_email">
	<br>
	<br>
	<input type="password" name="staff_password" placeholder="staff_password">
	<br>
	<br>
	<input type="password" name="staff_c_password" placeholder="staff_c_password">
	<br>
	<br>
	<input type="submit" name="submit" >
	<br>
	<br>

</form>
