<?php
    namespace MODEL;

    class Cadastro {
        private ?int $idCadastro;
        private ?string $nome_login;
        private ?string $senha_login;


        public function __construct() {}

        public function getIdCadastro() {
            return $this->idCadastro;
        }

        public function setIdCadastro(int $idCadastro) {
            $this->idCadastro = $idCadastro;
        }

        public function getNomeLogin() {
            return $this->nome_login;
        }

        public function setNomeLogin(string $nome_login) {
            $this->nome_login = $nome_login;
        }

        public function getSenhaLogin() {
            return $this->senha_login;
        }

        public function setSenhaLogin(string $senha_login) {
            $this->senha_login = $senha_login;
        }
}
?>