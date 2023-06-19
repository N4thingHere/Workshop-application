<?php
    namespace MODEL;

    class EsperaServico {
        private ?int $idEsperaServico;
        private ?int $placa_esperaServico;
        private ?int $final_placa_espera;
        private ?string $nome_proprietario_espera;

        public function __construct()
        {
            
        }

        public function getIdEsperaServico() {
            return $this->idEsperaServico;
        }

        public function setIdEsperaServico(int $idEsperaServico) {
            $this->idEsperaServico = $idEsperaServico;
        }

        public function getPlacaEsperaServico() {
            return $this->placa_esperaServico;
        }

        public function setPlacaEsperaServico(int $placa_esperaServico) {
            $this->placa_esperaServico  = $placa_esperaServico;
        }

        public function getFinalPlacaEspera() {
            return $this->final_placa_espera;
        }

        public function setFinalPlacaEspera(int $final_placa_espera) {
            $this->final_placa_espera = $final_placa_espera;
        }

        public function getNomeProprietarioEspera() {
            return $this->nome_proprietario_espera;
        }

        public function setNomeProprietarioEspera(string $nome_proprietario_espera) {
            $this->nome_proprietario_espera = $nome_proprietario_espera;
        }
    }
?>