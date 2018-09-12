<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');


$values='';
   
   $id=$_POST['id'];
    $where="id_usuarios = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


    if($_POST['senha']==='undefined'){
      $values=[$_POST['id'],$_POST['chave'],$_POST['nome'],$_POST['email'],$_POST['descricao']];
      $service->UpdateController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','email','descricao'],'where'=>$where,'values'=>$values,'filters'=>$id]);
    }else{
      $values=[$_POST['id'],$_POST['chave'],$_POST['nome'],md5($_POST['senha']),$_POST['email'],$_POST['descricao']];
      $service->UpdateController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','senha','email','descricao'],'where'=>$where,'values'=>$values,'filters'=>$id]);

    }
 
  
  
  


/*$teste=$_POST['nome'];
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  */