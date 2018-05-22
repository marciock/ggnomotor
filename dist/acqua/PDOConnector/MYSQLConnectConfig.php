<?php

namespace Lib\PDOConnection;


/**
* 
*/
use Lib\PDOConnection\ConnectorConfig;
class MYSQLConnectConfig extends ConnectorConfig
{
	
	public function getDsn(){

		return sprintf('mysql:host=%s;dbname=%s',$this->getHost(),$this->getDbname());
	}
}