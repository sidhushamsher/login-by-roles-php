<?php
	/**
	 * 
	 */
	class conn 
	{
		public $Connection;
		function __construct()
		{
			# code...
			 date_default_timezone_set("Asia/Kolkata");
			$this->Connection 	=	mysqli_connect("localhost","root","","demo_soft");
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
		public function insertToDb($table,$new_array)
	    {
	        foreach ($new_array as $key => $value) {
	        $k[]=$key;
	        $v[]="'".$value."'";
	        }
	        $k=implode(",", $k);
	        $v=implode(",", $v);
	        $sql="INSERT INTO ".$table."($k) VALUES($v)";
	        $exe=mysqli_query($this->connection,$sql);
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
	    public function filter_str($text,$size)
		{
		    # code...
		  if ($text=='') {
		      # code...
		    echo "N/A";
		  }
		  else{
		    if (strlen($text)>$size) {
		        # code...
		      echo ucfirst(strtolower(substr($text, 0,$size)."..."));
		    }
		    else{
		      echo ucfirst(strtolower($text));
		    }
		  }
		}
	}
?>