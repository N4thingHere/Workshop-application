<?php 
namespace BLL;

use \DAL\dalAcompanhamento;

include_once 'C:\XAMPP\htdocs\Matheus\DAL\dalAcompanhamento.php';

class bllAcompanhamento {
    public function Select() {
        $dal = new \DAL\dalAcompanhamento;
        return $dal->SelectAcompanhamento();
    }
}
?>