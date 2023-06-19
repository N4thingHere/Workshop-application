<?php 
namespace MODEL; 

class Usuario {
    private ?string $nome_login;
    private ?string $senha_login = null;
    
    public function __construct()
    {
        
    }

    public function getNomeUsuario() {
        return $this->nome_login;
    }

    public function setNomeUsuario(string $nome_login) {
        $this->nome_login = $nome_login;
    }

    public function getSenhaLoginDois() {
        return $this->senha_login;
    }

    public function setSenhaLogin(string $senha_login) {
        $this->senha_login = $senha_login;
    }
}
?>