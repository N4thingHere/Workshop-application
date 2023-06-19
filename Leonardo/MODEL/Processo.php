<?php

namespace MODEL;


class Processo
{
    private ?int $idProcesso;
    private ?string $Descricao_veiculo;
    private ?int $numero_placa_veiculo;
    private ?int $final_placa_veiculo;


    public function __construct()
    {
    }

    public function getIdProcesso()
    {
        return $this->idProcesso;
    }

    public function setIdProcesso(int $idProcesso)
    {
        $this->idProcesso = $idProcesso;
    }

    public function getDescricaoProcesso()
    {
        return $this->Descricao_veiculo;
    }

    public function setDescricaoProcesso(string $Descricao_veiculo)
    {
        $this->Descricao_veiculo = $Descricao_veiculo;
    }

    public function getNumeroPlacaProcesso()
    {
        return $this->numero_placa_veiculo;
    }

    public function setNumeroPlacaProcesso(int $numero_placa_veiculo)
    {
        $this->numero_placa_veiculo = $numero_placa_veiculo;
    }

    public function getFinalPlacaProcesso()
    {
        return $this->final_placa_veiculo;
    }

    public function setFinalPlacaProcesso(int $final_placa_veiculo)
    {
        $this->final_placa_veiculo = $final_placa_veiculo;
    }
}

?>
