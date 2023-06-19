<?php 
namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Processo.php';

class dalProcesso {
    public function SelectProcesso() {
        $sql = "select * from processo;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $processo = new \MODEL\Processo();

            $processo->setIdProcesso($linha['idProcesso']);
            $processo->setDescricaoProcesso($linha['Descricao_veiculo']);
            $processo->setNumeroPlacaProcesso($linha['numero_placa_veiculo']);
            $processo->setFinalPlacaProcesso($linha['final_placa_veiculo']);

            $lstProcesso[] = $processo;
        }
        return $lstProcesso;
    }
}

?>