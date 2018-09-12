<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
//header('Content-Type:application/json; charset=utf-8');



$service=new Lib\ServiceManager\ServiceManager;

 
 // $service->UpdateController(['table'=>'reunioes_comites','fields'=>['id_reunioescomites','assunto','id_comite','local','data','hora_inicial','hora_final','descricao','participantes'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  
 
foreach (array_keys($_POST) as $key) {
    
    //$fp = fopen("teste.txt", "a");

   if($key !=='id_usuarios'){

    $join='WHERE id_usuarios='.$_POST['id_usuarios'].' AND id_icon='.$key;
    $search=$service->ListController(['table'=>'privilegio','fields'=>['id_privilegio','id_usuarios','id_icon','ativo'],'join'=>$join]);
    
    $encode=json_encode($search);
    $decode=json_decode($encode);
    $id_privilegio='';
    foreach ($decode as $val) {
        $id_privilegio=$val->id_privilegio;

       // $teste +=$id_privilegio.' ,';
       
    }

        $where="id_privilegio = ?";
        $id=$id_privilegio;
        $values=[$id_privilegio,$_POST['id_usuarios'],$key,$_POST[$key]];
        $service->UpdateController(['table'=>'privilegio','fields'=>['id_privilegio','id_usuarios','id_icon','ativo'],'where'=>$where,'values'=>$values,'filters'=>$id]);


      //  $teste=$id_privilegio;

      //  $escreve = fwrite($fp, $teste);
        
        // Fecha o arquivo

        
     //   fclose($fp);

    }
  
    
    
}
   

  