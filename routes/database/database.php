<?php

/**
* 
*/
class Database
{
	private $con;
	
	public function connect(){
        
		$this->con = new Mysqli("Localhost","root","","birthday");
		if ($this->con) {
			return $this->con;
			// return "DATABASE_CONNECTED";
		}
		return "DATABASE_CONNECTION_FAIL";
	}
}

// $db = new Database();
// echo $db->connect();

?>