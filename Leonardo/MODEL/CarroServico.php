<?php 
    namespace MODEL;

    class CarroServico {
        private ?int $idCarroServico;
        private ?int $placa_carroServico;
        private ?int $final_placa_carroServico;
        private ?string $nome_proprietario_carroServico;


        public function __construct()
        {
            
        }

        public function getIdCarroServico() {
            return $this->idCarroServico;
        }

        public function setIdCarroServico(int $idCarroServico) {
            $this->idCarroServico = $idCarroServico;
        }

        public function getPlacaCarroServico() {
            return $this->placa_carroServico;
        }

        public function setPlacaCarroServico(int $placa_carroServico) {
            $this->placa_carroServico = $placa_carroServico;
        }

        public function getFinalPlacaCarroServico() {
            return $this->final_placa_carroServico;
        }

        public function setFinalPlacaCarroServico(int $final_placa_carroServico) {
            $this->final_placa_carroServico = $final_placa_carroServico;
        }

        public function getNomeProprietarioCarroServico() {
            return $this->nome_proprietario_carroServico;
        }

        public function setNomeProprietarioCarroServico(string $nome_proprietario_carroServico) {
            $this->nome_proprietario_carroServico = $nome_proprietario_carroServico;
        }
    }
?>