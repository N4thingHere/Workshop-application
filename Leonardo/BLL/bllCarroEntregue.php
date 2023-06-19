<?php
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Matheus\DAL\dalCarroEntregue.php';

use \DAL\dalCarroEntregue;

class bllCarroEntregue
{
   public function Select()
   {
       $dal = new \DAL\dalCarroEntregue;
       return $dal->SelectCarroEntregue();
   }
}
?>
