<?php
abstract class Common
{
		private $mysqli;
		private $host = 'localhost';
		private $username = 'root';
		private $password = '';
		private $db = 'IlamTeaGarden';

		private $_email;
	  private $_password;

		public function __construct(){

			$this->mysqli = new mysqli($this->host,$this->username, $this->password, $this->db);
			 if($this->mysqli->error)
         	{
         		die("Unable to connect to db: ".$this->mysqli->error);
         	}else{

         	}
		}

	abstract function save();
	abstract function retrieve();
	abstract function destroy();
	abstract function edit();
	// abstract function isuser();

	public function set($key , $value)
	{
		$this->$key = $value;
	}


	public function insert($sql)
	{

		$this->mysqli->query($sql);
		// print_r($this->mysqli); exit;
		if($this->mysqli->affected_rows == 1 && $this->mysqli->insert_id > 0)
    	{
    		return $this->mysqli->insert_id;
    	}
    	else
    	{
    		return false;
    	}
	}



	public function select($sql)
	{
		$result = $this->mysqli->query($sql);

    	$arr = [];

    	if($result->num_rows>0)
    	{
    		while ($row = $result->fetch_object())
    		{
    			$arr[] = $row;
    			// array_push($arr, $row);
    		}
    	}
    	return $arr;
	}


	public function delete($sql)
	{
        $this->mysqli->query($sql);
        if($this->mysqli->affected_rows == 1 && $this->mysqli->insert_id == 0)
        {
        	return true;
        }
        else
        {
        	return false;
        }
	}


	public function update($sql)
	{
		$this->mysqli->query($sql);
		if($this->mysqli->affected_rows == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


//login class

public function _checkCredentials($sql)
{


  $result = $this->mysqli->query($sql);

    if($result->num_rows>0){

			 return true;

    }else{

			return false;
		}

}




}


?>
