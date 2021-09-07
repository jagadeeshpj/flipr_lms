<?php 

class manage_videos_class
 {


	public $host="sql6.freesqldatabase.com";
 	public $username="sql6435193";
 	public $pass="F3REjmVvVA";
 	public $db_name="sql6435193";
 	public $port=3306;
 	public $conn;
 	public $videos_list;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function display_videos()
 	{
 		$query="select * from video_info";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->videos_list[]=$row;
 		}
 		return $this->videos_list;
 	}
}

 ?>
