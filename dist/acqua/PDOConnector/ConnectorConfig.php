<?php

namespace Lib\PDOConnection;

abstract class ConnectorConfig{

	private $host;
	private $dbname;
	private $user;
	private $password;

	public function __construct($attributes){
	//	$host,$dbname,$user,$password
		$this->host=$attributes['hostname'];
		$this->dbname=$attributes['database'];
		$this->user=$attributes['user'];
		$this->password=$attributes['password'];

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