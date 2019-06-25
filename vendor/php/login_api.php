<?php
/**
 * 
 */
include 'conn_api.php';
class login_api extends conn
{
	public $Connection='';
	function __construct()
	{
		# code...
		if ($this->session_check_if()	===	'success') {
			switch ($_SESSION['user_logged_in']['role']) {
				case '1':
				header('location:admin/');
				break;
				case '2':
				header('location:staff/');
				break;
				case '3':
				header('location:student/');
				break;				
				default:
				header('location:logout.php');
				break;
			}
		}
		$obj	=	new conn;
		$this->Connection =	$obj->Connection;
	}
	public function session_check_if()
	{
		# code...

		if (isset($_SESSION['user_logged_in'])) {
			# code...
			return 'success';
		}
		else{
			return 'false';
		}
	}
	public function sqlQuery_S($sql){
        $exe=mysqli_query($this->Connection,$sql);
        $rows=mysqli_num_rows($exe);
        $data=array(
        "exe"=>$exe,
        "rows"=>$rows
        );
        return $data;
    }
}
?>