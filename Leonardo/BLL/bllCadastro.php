<?php

namespace BLL;

use \DAL\dalCadastro;

include_once 'C:\XAMPP\htdocs\Matheus\DAL\dalCadastro.php';

class bllCadastro
{
    public function Select()
    {
        $dal = new \DAL\dalCadastro;
        return $dal->Select();
    }
}

?>
