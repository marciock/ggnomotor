<?php

namespace Modules\usuarios\controllers;

/**
*
*/
use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

use Lib\ServiceManager\Controller;
class Insert_login_controller extends Controller
{




	protected function create(){

	$connector_config=new MYSQLConnectConfig('localhost','site','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();


		$exec=$pdo->prepare("INSERT INTO usuario  VALUES(:id,:login,:senha)");
		$exec->execute($this->attributes);
		//$this->attributes

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
