<?php

namespace Lib\PDOBuilder;


use \PDO;
use \PDOStatement;
use \Exception;


class Connector{

    private $pdo=null;
    private $options=[];

    public function __construct(array $options){
        $this->options=$options;
    }
    protected function dsn(){
       
        return "mysql:host={$this->options['host']};dbname={$this->options['database']}";

    }
    protected function connect(){
        if(!$this->pdo){
            $this->pdo=new PDO($this->dsn(),$this->options['user'],$this->options['password']);

        }
        
        return $this->pdo;
    }
   
    

}