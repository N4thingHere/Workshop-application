<?php 
namespace DAL;

include_once 'C:\XAMPP\htdocs\Matheus\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Matheus\MODEL\CarroEntregue.php';

class dalCarroEntregue {
    public function SelectCarroEntregue() {
        $sql = "select * from carrosentregues;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $entregue = new \MODEL\CarroEntregue;

            $entregue->setIdCarroEntregue($linha['idCarroEntregue']);
            $entregue->setPlacaCarroEntregue($linha['placa_carroEntregue']);
            $entregue->setFinalPlacaCarroEntregue($linha['final_placa_carroEntregue']);
            $entregue->setNomeProprietarioCarroEntregue($linha['nome_proprietario_carroEntregue']);

            $lstEntregue[] = $entregue;
        }
        return $lstEntregue;
    }
}
?>