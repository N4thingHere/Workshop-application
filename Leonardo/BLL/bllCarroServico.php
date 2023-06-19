<?php
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Matheus\DAL\dalCarroServico.php';

use \DAL\dalCarroServico;

class bllCarroServico
{
   public function Select()
   {
       $dal = new \DAL\dalCarroServico;
       return $dal->SelectCarroServico();
   }
}
?>
