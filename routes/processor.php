<?php

class Processor{
    private $con;
    public function __construct()
    {

        include_once("./database/database.php");
        $db = new Database();
        $this->con = $db->connect();
    }
    protected function exists( $val)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM `users` WHERE `phone` = ? LIMIT 1");
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

    public function send_wish($name, $phone, $subject, $message)
    {

        if(!$this->exists($phone))
        {
            $tb = "users";
			$ip = $this->getUserIP();
            $stmt = "INSERT INTO `$tb`(`name`, `phone`, `ip`) VALUES (?,?,?)";
            $pre_stmt = $this->con->prepare($stmt);
            $pre_stmt->bind_param("sss", $name,$phone, $ip);
            $result = $pre_stmt->execute() or die($this->con->error);
			
			return $result? $this->insert_wish($subject, $message, $this->con->insert_id): "INSERTING_USER_FAILED";
        }
        return 0;
    }

	private function insert_wish($title, $msg, $uid)
	{
		$tb = "wishes";
		$stmt = "INSERT INTO `$tb`(`uid`,`title`, `message`) VALUES (?,?,?)";
		$pre_stmt = $this->con->prepare($stmt);
		$pre_stmt->bind_param("iss", $uid,$title, $msg);
		$result = $pre_stmt->execute() or die($this->con->error);
		return $result?  1:"INSERTING_WISH_FAILED";
	}

    public function get_data($tb, $rule=NULL) // get all records in a table
	{
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
	private function getUserIP()
	{
		// Get real visitor IP behind CloudFlare network
		if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
				$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
				$_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
		}
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];

		if(filter_var($client, FILTER_VALIDATE_IP))
		{
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}

		return $ip;
	}
}

$op = new Processor();
// echo $op->send_wish("Bentil Shadrack", '0556844331', "Happy Birthday Ben", "Testing from Backend!!!!");
echo "<pre>";
print_r($op->get_data('users'));