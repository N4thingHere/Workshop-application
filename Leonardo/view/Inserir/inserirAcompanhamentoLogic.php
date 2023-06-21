<?php
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Acompanhamento.php';
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\BLL\bllAcompanhamento.php';

   $acompanhamento = new \MODEL\Acompanhamento(); 
   
   $acompanhamento->setNomePeca($_POST['name']);
   $acompanhamento->setStatusPeca($_POST['peca']);
   $acompanhamento->setDiaChegada($_POST['dia-chegada']); 

   $bll = new \BLL\bllAcompanhamento(); 
   $bll->Insert($acompanhamento); 
     
?>