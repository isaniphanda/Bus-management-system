<?php

class CreateDb 
{
	public $servername;
	public $username;
	public $password;
	public $dbname;
	public $tablename;
	public $conn;

	public function __construct(
		$dbname = "BusManagementdb",
		$tablename = "Student",
		$servername = "localhost",
		$username = "root",
		$password = ""
	)
	{
		$this->dbname = $dbname;
		$this->tablename = $tablename;
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;

		//connection
		$this->conn = mysqli_connect($servername, $username ,$password);

		//check connection
		if (!$this->conn) {
			die("connection failed:".mysqli_connect_error());
		}

		//query to create database
		$sql = "create database if not exists $dbname";

		//execute query
		if (mysqli_query($this->conn,$sql)) {
			$this->conn = mysqli_connect($servername, $username, $password, $dbname);
		}

		//sql to create new table
		$sql = "CREATE TABLE IF NOT EXISTS $tablename (studentId INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, StudentNo INT(11) NOT NULL, studentName VARCHAR(25) NOT NULL, studentSurname VARCHAR(25) NOT NULL, password VARCHAR(25) NOT NULL);";

		if (mysqli_query($this->conn,$sql)) {
			echo "Error creating table: ".mysqli_connect_error();
		}else{
			return false;
		}

	}

	//get product from database
	public function getData(){
		$sql = "SELECT*FROM $this->tablename";

		$result = mysqli_query($this->conn, $sql);

		if(mysqli_num_rows($result) > 0){
			return $result;
		}
	}
	
}