<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');

    $service=new Lib\ServiceManager\ServiceManager;
    $id=$_POST['id'];
    $where="id_noticias = ?";
    
      $n=0;
      if($_FILES !==NULL){

      //  $fp = fopen("teste.txt", "a");
        foreach ($_FILES as $key => $value) {
          $n ++;
          $fileName=$_FILES[$key]['tmp_name'];

          $uploadDir='/var/www/ggnomotor/assets/noticias/';
          $myDir='http://localhost/ggnomotor/assets/noticias/';
          $data="".date('Y-m-d').date('H').date('i')."";
          $uploadFile=$uploadDir.$_POST['id_unidade'].$data."_".$n.".jpg";
          $correctPath=$myDir.$_POST['unidade'].$data."_".$n.".jpg";  

          move_uploaded_file($fileName,$uploadFile);
          $imgStrings .=$correctPath.',';
          $images=substr_replace($imgStrings,'',-1);
          $values=[$_POST['id'],$_POST['id_unidade'],$_POST['titulo'],$_POST['resumo'],$_POST['descricao'],$_POST['data'],$images];
          $service->UpdateController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem1','imagem2','imagem3','imagem4','imagem5'],'where'=>$where,'values'=>$values,'filters'=>$id]);
       
          //  $teste=$images;
          //$escreve = fwrite($fp, $teste);
        };
  
  }else{
    $values=[$_POST['id'],$_POST['id_unidade'],$_POST['titulo'],$_POST['resumo'],$_POST['descricao'],$_POST['data']];
    $service->UpdateController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data'],'where'=>$where,'values'=>$values,'filters'=>$id]);
  };
 

//  $service->UpdateController(['table'=>'noticias','fields'=>['id_noticias','id_unidade','titulo','resumo','descricao','data','imagem1','imagem2','imagem3','imagem4','imagem5'],'where'=>$where,'values'=>$values,'filters'=>$id]);


 
  