<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');

use Lib\ServiceManager\SetServer;


$data=$_POST['data'];
$inicio=date('H:i:s',strtotime($_POST['inicio']));
$final=date('H:i:s',strtotime($_POST['termino']));
$values=[$_POST['id'],$_POST['assunto'],$_POST['comite'],$_POST['local'],$data,$inicio,$final,$_POST['descricao'],$_POST['participantes']];
  
   $id=$_POST['id'];
    $where="id_reunioescomites = ?";
    //echo $nome;

    $service=new Lib\ServiceManager\ServiceManager;
    


 
  $service->UpdateController(['table'=>'reunioes_comites','fields'=>['id_reunioescomites','assunto','id_comite','local','data','hora_inicial','hora_final','descricao','participantes'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  


$teste=$_POST['comite'];
  $fp = fopen("teste.txt", "a");
   
 
  $escreve = fwrite($fp, $teste);
   

  fclose($fp); 
  