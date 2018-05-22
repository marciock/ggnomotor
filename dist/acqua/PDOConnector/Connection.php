<?php


namespace Lib\PDOConnection;

interface Connector{

	public function connect(ConnectorConfig $connectorConfig);
	public function disconnect();
	public function isConnected();
	public function getConnection();

}