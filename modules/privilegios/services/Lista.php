<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

//use Lib\ServiceManager\SetServer;
//WHERE id_usuarios='.$id


$id=$_GET['id'];
    $service=new Lib\ServiceManager\ServiceManager;

    $join='INNER JOIN icon ON (icon.id_icon=privilegio.id_icon)  WHERE id_usuarios='.$id;
   // $lista=$service->ListController(['join'=>$join]);
  $lista=$service->ListController(['table'=>'privilegio','fields'=>['privilegio.id_privilegio','privilegio.id_usuarios','privilegio.id_icon','privilegio.ativo','icon.id_icon','icon.icon','icon.disabled','icon.title','icon.url','icon.component'],'join'=>$join]);
 
//,'icon.icon','icon.title','icon.url','icon.component'
// var_dump($lista);
   $service->ListView($lista);
   

/*   $teste=$lista;
   $fp = fopen("teste.txt", "a");
    
  
   $escreve = fwrite($fp, $teste);
     // Fecha o arquivo
  
   fclose($fp); 
*/

//,'usuarios.id_usuarios','usuarios.nome','usuarios.chave','usuarios.email'