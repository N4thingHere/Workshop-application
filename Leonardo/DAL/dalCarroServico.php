<?php
namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroServico.php';

class dalCarroServico {
    public function SelectCarroServico() {
        $sql = "select * from carroservico;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $servc = new \MODEL\CarroServico();

            $servc->setIdCarroServico($linha['idCarroServico']);
            $servc->setPlacaCarroServico($linha['placa_carroServico']);
            $servc->setFinalPlacaCarroServico($linha['final_placa_carroServico']);
            $servc->setNomeProprietarioCarroServico($linha['nome_proprietario_carroServico']);

            $lstServico[] = $servc;
        }
        return $lstServico;
    }
}
?>