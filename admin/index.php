<?php
session_start();
include 'vendor/php/admin_api.php';
$obj	=	new api();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
<h1>
	admin logged in
</h1>
<a href="../logout.php">logout</a>
