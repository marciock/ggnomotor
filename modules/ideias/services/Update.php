<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');



   
   $id=$_POST['id'];
    $where="id_ideias = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


      $values=[$_POST['id'],$_POST['chave'],$_POST['nome'],$_POST['titulo'],$_POST['descricao'],$_POST['data']];
      $service->UpdateController(['table'=>'ideias','fields'=>['id_ideias','chave','nome','titulo','descricao','data'],'where'=>$where,'values'=>$values,'filters'=>$id]);

    
 
  
  
  


/*$teste=$_POST['nome'];
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  */