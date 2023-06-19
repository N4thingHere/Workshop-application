<?php
     namespace BLL;
     
     include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalProcesso.php';

    use \DAL\dalProcesso;

    class bllProcesso
    {
        public function Select()
        {
            $dal = new \DAL\dalProcesso;
            return $dal->SelectProcesso();
        }
    }
?>