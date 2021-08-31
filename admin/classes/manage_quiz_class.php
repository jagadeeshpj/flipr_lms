<?php 

class manage_quiz_class
 {


 		public $host="remotemysql.com";
 	public $username="n8gxap7PGT";
 	public $pass="hIeFLjY7Qe";
 	public $db_name="n8gxap7PGT";
 	public $port=3306;
 	public $conn;
 
 	public $quiz_course_list;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function display_quiz_courses()
 	{
 		$query="select * from category";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->quiz_course_list[]=$row;
 		}
 		return $this->quiz_course_list;
 	}


 	public function add_quize($query_string)
	{
		$this->conn->query($query_string);
		return true;
	}
}

 ?>
