<?php
namespace Lib\PDOBuilder;

use Lib\PDOBuilder\Connector;

class SelectPDO extends Connector{

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

    public function select($values=[]){
        $table=isset($this->clausules['table']) ? $this->clausules['table']:'<table>';

        $_fields=isset($this->clausules['fields']) ? $this->clausules['fields']:'<fields>';
        $fields=implode(',',$_fields);

        $join=isset($this->clausules['join']) ? $this->clausules['join']:'';

        $command=[];
        $command[]='SELECT';
        $command[]=$fields;
        $command[]='FROM';
        $command[]=$table;
        if($join){
          $command[]=$join;
        }
       
        $clausules=[
            'where'=>[
                'instruction'=>'WHERE',
                'separator'=>' ',

            ],
            'group'=>[
                'instruction'=>'GROUP BY',
                'separator'=>',',
            ],
            'order'=>[
                'instruction'=>'ORDER BY',
                'separator'=>',',
            ],
            'having'=>[
                'instruction'=>'HAVING',
                'separator'=>'AND',
            ],
            'limit'=>[
                'instruction'=>'LIMIT',
                'separator'=>',',
            ],

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

       // echo $sql;
        return $this->executeSelect($sql,$values);
    }
    private final function statement($sql){
        return $this->connect()->prepare($sql);
    }
    public function executeSelect($sql, array $values){
        $statement=$this->statement($sql);

        if($statement && $statement->execute(array_values($values))){
            return $statement->fetchAll(\PDO::FETCH_OBJ);

        }
        return null;
    
    }
}