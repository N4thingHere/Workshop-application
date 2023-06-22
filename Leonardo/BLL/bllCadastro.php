<?php

namespace BLL;

use \DAL\dalCadastro;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalCadastro.php';

class bllCadastro
{
    public function Select() {
        $dal = new \DAL\dalCadastro;
        return $dal->Select();
    }

    public function SelectID(int $id) {
        $dal = new \DAL\dalCadastro;

        return $dal->SelectID($id);
    }

    public function Update(\MODEL\Cadastro $cadastro) {
        $dal = new \DAL\dalCadastro();

        $dal->Update($cadastro);
    }

    public function Delete(int $id) {
        $dal = new \DAL\dalCadastro();

        $dal->Delete($id);
    }
}


?>
