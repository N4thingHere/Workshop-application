<?php
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalCarroEntregue.php';

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
