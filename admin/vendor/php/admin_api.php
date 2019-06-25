<?php
/**
 * 
 */
include '../vendor/php/conn_api.php';
/**
 * 
 */
class api extends conn 
{

	public $Connection = '';
	function __construct()
	{
		# code...
		$conn_obj	=	new conn;
		$this->Connection =	$conn_obj->Connection;
		if ($conn_obj->session_check_if()	===	'success') {
			switch ($_SESSION['user_logged_in']['role']) {
				case '1':
					# code...
					break;
				
				default:
					header('location:../404.html');
					break;
			}
			
		}
		else{
			header('location:../login.php');
		}
		
	}
	
	 

}
?>