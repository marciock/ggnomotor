<?php

namespace Lib\PDOConnection;

abstract class ConnectorConfig{

	private $host;
	private $dbname;
	private $user;
	private $password;

	public function __construct($host,$dbname,$user,$password){
		$this->host=$host;
		$this->dbname=$dbname;
		$this->user=$user;
		$this->password=$password;

	}

	public function getHost(){
		return $this->host;
	}

	public function getDbname(){
		return $this->dbname;
	}

	public function getUser(){
		return $this->user;
	}

	public function getpassword(){
		return $this->password;
	}

	abstract public function getDsn();
}