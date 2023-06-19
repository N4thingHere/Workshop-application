<?php 
    namespace MODEL;

    class Acompanhamento {
        private ?int $idAcompanhamento;
        private ?string $nome_peça;
        private ?string $status_peça;
        private ?string $dia_chegada;


        public function __construct()
        {
            
        }

        public function getIdAcompanhamento() {
            return $this-> idAcompanhamento;
        }

        public function setIdAcompanhamento(int $idAcompanhamento) {
            $this->idAcompanhamento = $idAcompanhamento;
        }

        public function getNomePeca() {
            return $this->nome_peça;
        }

        public function setNomePeca(string $nome_peça) {
            $this->nome_peça = $nome_peça;
        }

        public function getStatusPeca() {
            return $this->status_peça;
        }

        public function setStatusPeca(string $status_peça) {
            $this->status_peça = $status_peça;
        }

        public function getDiaChegada() {
            return $this-> dia_chegada;
        }

        public function setDiaChegada(string $dia_chegada) {
            $this->dia_chegada = $dia_chegada;
        }
    }
?>