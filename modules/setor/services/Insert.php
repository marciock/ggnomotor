<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');

ini_set('default_charset','UTF-8');

$json = file_get_contents('php://input');
$json=utf8_encode($json);
$obj  = json_decode($json);

$data=date('Y-m-d'.strtotime($obj->data));
$inicio=date('H:i:s',strtotime($obj->inicio));
$final=date('H:i:s',strtotime($obj->termino));
$post=[NULL,$obj->local];



  //  $post=$_POST;
  

   $service=new Lib\ServiceManager\ServiceManager;


 $service->InsertController(['table'=>'local','fields'=>['id_local','local'],'insert'=>$post]);

 
