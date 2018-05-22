<?php

namespace Lib\PDOBuilder;

use Lib\PDOBuilder\Connector;


class InsertPDO extends Connector{
    private $clausules=[];

    function __call($name,$arguments){
        $clausule=$arguments[0];

        if(count($arguments)>1){
            $clausule=$arguments;
        }

        $this->clausules[strtolower($name)]=$clausule;
        return $this;
    }

    public function __construct($options)
    {
        parent::__construct($options);


    }
    public function insert($values){
        $table=isset($this->clausules['table']) ? $this->clausules['table']:'<table>';

        $_fields=isset($this->clausules['fields']) ? $this->clausules['fields']:'<fields>';
        $fields=implode(',',$_fields);

        $_placeholders=array_map(function(){
            return '?';

        },$_fields);
        $placeholders=implode(',',$_placeholders);

        $command=[];
        $command[]='INSERT INTO';
        $command[]=$table;
        $command[]='('.$fields.')';
        $command[]='VALUES';
        $command[]='('.$placeholders.')';

        $sql=implode(' ',$command);

      

        return $this->executeInsert($sql,$values);
    }
    private final function statement($sql){
        return $this->connect()->prepare($sql);
    }
    public function executeInsert($sql,array $values){

        $statement=$this->statement($sql);
       
        if($statement && $statement->execute(array_values($values))){

           
            return $this->connect()->lastInsertId();
        }

        return null;

    }
    
}