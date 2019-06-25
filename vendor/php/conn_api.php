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
			 date_default_timezone_set("Asia/Kolkata");//SET YOUR TIME ZONE
			$this->Connection 	=	mysqli_connect("localhost","root","","demo_soft"); //CREATE DB CONNECTION
		}
		public function session_check_if()	//CHECK SESSION IS SET OR NOT FOR USER LOGIN
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
		public function insertToDb($table,$new_array) //INSERT TABLE VALUES VIA FUNCTION
	    {
			/*
			YOUTUBE VIDEO LINK FOR THIS FUNCTION
			
			http://bit.ly/2X2TCJU
			
			*/
	        foreach ($new_array as $key => $value) {
	        $k[]=$key;
	        $v[]="'".$value."'";
	        }
	        $k=implode(",", $k);
	        $v=implode(",", $v);
	        $sql="INSERT INTO ".$table."($k) VALUES($v)";
	        $exe=mysqli_query($this->connection,$sql);
	    }
	    public function sqlQuery_S($sql){	//RUN SQL QUERY
	        $exe=mysqli_query($this->Connection,$sql);
	        $rows=mysqli_num_rows($exe);
	        $data=array(
	        "exe"=>$exe,
	        "rows"=>$rows
	        );
	        return $data;
	    }
	    public function filter_str($text,$size) //FILTER STRING
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
