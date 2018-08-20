<?php
namespace Lib\PDOBuilder;

use Lib\PDOBuilder\Connector;

class DeletePDO extends Connector{

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

    public function delete(){
        $table=isset($this->clausules['table']) ? $this->clausules['table']:'<table>';
        $join=isset($this->clausules['join']) ? $this->clausules['join']:'';

        $command=[];
        $command[]='DELETE FROM';
        $command[]=$table;
        if($join){
          $command[]=$join;
        }
       
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

          //  echo $filters;

            return $this->executeDelete($sql);
    }
    private final function statement($sql){
        return $this->connect()->prepare($sql);
    }
    protected final function execute($sql){
      
      
        $statement=$this->statement($sql);
      //  echo $values[0];
        //echo $sql;
       // $statement.bindParam(1,$values);
        $statement->execute($sql);
       
      
      //  return $statement->rowCount();
      
       
    }
    public function executeDelete($sq){

       // echo $values;
        
        return $this->execute($sql);
    }
}
