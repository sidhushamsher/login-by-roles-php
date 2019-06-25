<?php
session_start();
include 'vendor/php/student_api.php';
$obj	=	new api();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<h1>
	student logged in
</h1>
	
<a href="../logout.php">logout</a>
