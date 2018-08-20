<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');



$data=$_POST['data'];
$inicio=date('H:i:s',strtotime($_POST['inicio']));
$final=date('H:i:s',strtotime($_POST['termino']));
$post=[NULL,$_POST['assunto'],$_POST['comite'],$_POST['local'],$data,$inicio,$final,$_POST['descricao'],$_POST['participantes']];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'reunioes_comites','fields'=>['id_reunioescomites','assunto','id_comite','local','data','hora_inicial','hora_final','descricao','participantes'],'insert'=>$post]);

 

$teste=$post[3];
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 