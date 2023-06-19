<?php 
    namespace MODEL;

    class CarrosProntos {
        private ?int $idCarroPronto;
        private ?int $placa_carroPronto;
        private ?int $final_placa_carroPronto;
        private ?string $nome_proprietario_carroPronto;

        public function __construct()
        {
            
        }

        public function getIdCarroPronto() {
            return $this->idCarroPronto;
        }

        public function setIdCarropronto(int $idCarroPronto) {
            $this->idCarroPronto = $idCarroPronto;
        }

        public function getPlacaCarroPronto() {
            return $this->placa_carroPronto;
        }

        public function setPlacaCarroPronto(int $placa_carroPronto) {
            $this->placa_carroPronto = $placa_carroPronto;
        }

        public function getFinalPlacaCarroPronto() {
            return $this->final_placa_carroPronto;
        }

        public function setFinalPlacaCarroPronto(int $final_placa_carroPronto) {
            $this->final_placa_carroPronto = $final_placa_carroPronto;
        }

        public function getNomeProprietarioCarroPronto() {
            return $this->nome_proprietario_carroPronto;
        }

        public function setNomeProprietarioCarropronto(string $nome_proprietario_carroPronto) {
            $this->nome_proprietario_carroPronto = $nome_proprietario_carroPronto;
        }
    }
?>