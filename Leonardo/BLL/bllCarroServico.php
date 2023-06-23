<?php
namespace BLL;
     
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalCarroServico.php';

use \DAL\dalCarroServico;

class bllCarroServico
{
   public function Select()
   {
       $dal = new \DAL\dalCarroServico;
       return $dal->SelectCarroServico();
   }
   public function SelectID(int $id) {
    $dal = new \DAL\dalCarroServico;

    return $dal->SelectID($id);
   }

   public function Insert (\MODEL\CarroServico $Servico) {
        $dal = new \DAL\dalCarroServico();

        $dal->Insert($Servico);
   }

   public function Update(\MODEL\CarroServico $Servico) {
    $dal = new \DAL\dalCarroServico();

    $dal->Update($Servico);
   }

   public function Delete(int $id) {
    $dal = new \DAL\dalCarroServico();

    $dal->Delete($id);
   }
}
?>
