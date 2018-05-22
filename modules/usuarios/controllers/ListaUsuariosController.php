<?php

namespace Modules\usuarios\controllers;

/**
*
*/
//use Lib\PDOConnection\MYSQLConnectConfig;
//use Lib\PDOConnection\PDOConnector;

use Lib\ServiceManager\Controller;
class ListaUsuariosController extends Controller
{




	protected function create(){

		return $this->attributes[data];

/*	$connector_config=new MYSQLConnectConfig('localhost','site','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();


		$exec=$pdo->prepare("INSERT INTO usuario  VALUES(:id,:login,:senha)");
		$exec->execute($this->attributes);
	
	//$this->attributes
*/

/*

		foreach ($this->attributes as $key => $value) {

			$teste .="{$key} = {$value}, ";
		}


		$fp = fopen("teste.txt", "a");

		// Escreve "exemplo de escrita" no bloco1.txt
		$escreve = fwrite($fp, $teste);

		// Fecha o arquivo
		fclose($fp);

*/

	}

}
/*use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

$connector_config=new MYSQLConnectConfig('localhost','kumo','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();

		$result = $pdo->prepare("SELECT * FROM categorias");
				
		$result->execute();


		$data=[];
		while($row = $result->fetch(PDO::FETCH_OBJ)){
    		array_push($data, $row);
		}

*/


		//$data=$result->fetchAll(PDO::FETCH_ASSOC);

	//	$json=json_encode($data);

	//	echo $json;