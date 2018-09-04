<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');


$post=[NULL,$_POST['chave'],$_POST['nome'],md5($_POST['senha']),$_POST['email'],$_POST['descricao']];


$clausules="chave LIKE '%".$_POST['chave']."%'";
 

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','senha','email','descricao'],'insert'=>$post]);

 $usuario= $service->SearchController(['table'=>'usuarios','fields'=>['id_usuarios','chave','nome','senha','email','descricao'],'where'=>$clausules]);

 $encode=json_encode($usuario);

 $decode=json_decode($encode);
 $user="";
 
 
 foreach ($decode as $key) {
     $user=$key->id_usuarios;
 }



 $icones=$service->ListController(['table'=>'icon','fields'=>['id_icon','icon','disabled','title','url','component']]);

 $values=[];
 foreach ($icones as $key) {
  $values=[NULL,$user,$key->id_icon,'0'];
  $service->InsertController(['table'=>'privilegio','fields'=>['id_privilegio','id_usuarios','id_icon','ativo'],'insert'=>$values]);
 }


/*
$teste=$values[1];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 
  */