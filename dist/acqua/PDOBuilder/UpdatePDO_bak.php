<?php
namespace Lib\PDOBuilder;

use Lib\PDOBuilder\Connector;

class UpdatePDO extends Connector{

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
    public function update($values,$filters=[]){
        $table=isset($this->clausules['table']) ? $this->clausules['table']:'<table>';
        $join=isset($this->clausules['join']) ? $this->clausules['join']:'';
        $_fields=isset($this->clausules['fields']) ? $this->clausules['fields']:'<fields>';

        $sets=$_fields;

        if(is_array($_fields)){
            $sets=implode(',',array_map(function($value){
                return $value.'= ?';
            },$_fields));
        }

        $command=[];
        $command[]='UPDATE';
        $command[]=$table;
        if($join){
          $command[]=$join;
        }
        $command[]='SET';
        $command[]=$sets;
       
        $clausules=[
            'where'=>[
                'instruction'=>'WHERE',
                'separator'=>' ',

            ]
            ];
            foreach($clausules as $key=>$clausule){
                if(isset($this->clausules[$key])){
                    $value=$this->clausules[$key];
                    if(is_array($value)){
                        $value=implode($clausule['separator'],$this->clausules[$key]);
                    }
                    $command[]=$clausule['instruction'].' '.$value;
                }
            }
            $sql=implode(' ',$command);
          //  echo $sql;

          // var_dump([$values, $filters]);
           // echo $filters;
            return $this->executeUpdate($sql,[$values,$filters]);


    }
    private final function statement($sql){
       
        return $this->connect()->prepare($sql);
    }
    public function executeUpdate($sql, array $values){
       // echo $this->execute($sql,$values);
       echo $sql;
       return $this->execute($sql,$values);
    
    }
    protected final function execute($sql,array $values){
        
        $statement=$this->statement($sql);
        if($statement && $statement->execute(array_values($values))){
           
           // var_dump($values);
           // echo $statement->rowCount();
            return $statement->rowCount();
        }
        return null;
    }
}