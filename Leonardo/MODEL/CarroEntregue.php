<?php 
namespace MODEL;

class CarroEntregue {
    private ?int $idCarroEntregue;
    private ?int $placa_carroEntregue;
    private ?int $final_placa_carroEntregue;
    private ?string $nome_proprietario_carroEntregue;

    public function __construct()
    {
        
    }

    public function getIdCarroEntregue() {
        return $this->idCarroEntregue;
    }

    public function setIdCarroEntregue(int $idCarroEntregue) {
        $this->idCarroEntregue = $idCarroEntregue;
    }

    public function getPlacaCarroEntregue() {
        return $this->placa_carroEntregue;
    }

    public function setPlacaCarroEntregue(int $placa_carroEntregue) {
        $this->placa_carroEntregue = $placa_carroEntregue;
    }

    public function getFinalPlacaCarroEntregue() {
        return $this->final_placa_carroEntregue;
    }

    public function setFinalPlacaCarroEntregue(int $final_placa_carroEntregue) {
        $this->final_placa_carroEntregue = $final_placa_carroEntregue;
    }

    public function getNomeProprietarioCarroEntregue() {
        return $this->nome_proprietario_carroEntregue;
    }

    public function setNomeProprietarioCarroEntregue(string $nome_proprietario_carroEntregue) {
        $this->nome_proprietario_carroEntregue = $nome_proprietario_carroEntregue;
    }
}
?>