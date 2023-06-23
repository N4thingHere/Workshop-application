<?php
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalCarroEntregue.php';

use \DAL\dalCarroEntregue;

class bllCarroEntregue
{
   public function Select() {
       $dal = new \DAL\dalCarroEntregue;
       return $dal->SelectCarroEntregue();
   }

   public function SelectID(int $id) {
    $dal = new \DAL\dalCarroEntregue;

    return $dal->SelectID($id);
   }

   public function Insert (\MODEL\CarroEntregue $entregue) {
        $dal = new \DAL\dalCarroEntregue();

        $dal->Insert($entregue);
   }

   public function Update(\MODEL\CarroEntregue $entregue) {
    $dal = new \DAL\dalCarroEntregue();

    $dal->Update($entregue);
   }

   public function Delete(int $id) {
    $dal = new \DAL\dalCarroEntregue();

    $dal->Delete($id);
   }
}
?>
