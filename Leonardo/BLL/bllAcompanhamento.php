<?php 
namespace BLL;

use \DAL\dalAcompanhamento;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalAcompanhamento.php';

class bllAcompanhamento {
    public function Select() {
        $dal = new \DAL\dalAcompanhamento;
        return $dal->SelectAcompanhamento();
    }

    public function SelectID (int $id) {
        $dal = new \DAL\dalAcompanhamento;

        return $dal->SelectID($id);
    }

    public function Insert (\MODEL\Acompanhamento $acompanhamento){

       $dal = new \DAL\dalAcompanhamento(); 

       $dal->Insert($acompanhamento);
      
    }

    public function UpdateBanco (\MODEL\Acompanhamento $acompanhamento) {
        $dal = new \DAL\dalAcompanhamento();

        $dal->UpdateAcomp($acompanhamento);
    }

    public function Delete(int $id) {
         $dal = new \DAL\dalAcompanhamento();

         $dal->Delete($id);
    }

}
?>