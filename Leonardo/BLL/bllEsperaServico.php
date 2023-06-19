<?php 
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalEsperaServico.php';

use \DAL\dalEsperaServico;

class bllEsperaServico
{
   public function Select()
   {
       $dal = new \DAL\dalEsperaServico;
       return $dal->SelectEsperaServico();
   }
}
?>