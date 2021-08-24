<?php

class Processor{
    private $con;
    public function __construct()
    {

        include_once("database.php");
        $db = new Database();
        $this->con = $db->connect();
    }
    protected function exists( $val)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM `wishes` WHERE `phone` = ? LIMIT 1");
		$pre_stmt->bind_param("s",$val);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0)
		{
			return true; 
		}else
		{
			return false;
		}
	}

    public function addwish($name, $phone, $subject, $message)
    {

        if(!$this->exists($phone))
        {
            $tb = "wishes";
            $stmt = "INSERT INTO `$tb`(`name`, `phone`, `subject`, `message`, `date`) VALUES (?,?,?,?,?)";
            $pre_stmt = $this->con->prepare($stmt);
            $date = date("y-m-d h:i:s");
            $pre_stmt->bind_param("sssss", $name,$phone, $subject, $message, $date);
            $result = $pre_stmt->execute() or die($this->con->error);
            return $result? 1:0;
        }
        return 0;
    }

    public function wishes($rule=NULL) // get all records in a table
	{
		$tb = "wishes";
		$stmt = "SELECT * FROM `$tb` $rule";
		$pre_stmt = $this->con->prepare($stmt);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}
}

// $op = new Processor();
// var_dump($op->wishes());