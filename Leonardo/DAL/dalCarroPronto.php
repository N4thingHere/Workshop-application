<?php 
namespace DAL;

include_once 'C:\XAMPP\htdocs\Matheus\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Matheus\MODEL\CarrosProntos.php';

class dalCarrosProntos {
    public function SelectCarrosProntos() {
        $sql = "select * from carrosprontos;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $pronto = new \MODEL\CarrosProntos;

            $pronto->setIdCarropronto($linha['idCarroPronto']);
            $pronto->setPlacaCarroPronto($linha['placa_carroPronto']);
            $pronto->setFinalPlacaCarroPronto($linha['final_placa_carroPronto']);
            $pronto->setNomeProprietarioCarropronto($linha['nome_proprietario_carroPronto']);

            $lstPronto[] = $pronto;
        }
        return $lstPronto;
    }
}
?>