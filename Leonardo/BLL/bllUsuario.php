<?php
    namespace BLL; 
    use DAL\dalUsuario; 
    include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\dalusuario.php';
    
    class bllUsuario {
   
        public function SelectUser (string $usuario){
            $dal = new  \Dal\dalUsuario(); 
           
            return $dal->SelectUser($usuario);
        }
    }

?>