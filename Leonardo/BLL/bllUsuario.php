<?php
    namespace BLL; 
    use DAL\dalUsuario; 
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalusuario.php';
    
    class bllUsuario {
   
        public function SelectUser (string $usuario){
            $dal = new  \DAL\dalUsuario(); 
           
            return $dal->SelectUser($usuario);
        }
    }

?>