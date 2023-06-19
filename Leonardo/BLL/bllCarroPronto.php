<?php
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalCarroPronto.php';

use \DAL\dalCarrosProntos;

class bllCarrosProntos
{
   public function Select()
   {
       $dal = new \DAL\dalCarrosProntos;
       return $dal->SelectCarrosProntos();
   }
}
?>
