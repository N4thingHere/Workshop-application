<?php
namespace DAL;

include_once 'C:\XAMPP\htdocs\Matheus\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Matheus\MODEL\Acompanhamento.php';

class dalAcompanhamento {
    public function SelectAcompanhamento() {
        $sql = "select * from acompanhamento;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $acompanhamento = new \MODEL\Acompanhamento();

            $acompanhamento->setIdAcompanhamento($linha['idAcompanhamento']);
            $acompanhamento->setNomePeca($linha['nome_peça']);
            $acompanhamento->setStatusPeca($linha['status_peça']);
            $acompanhamento->setDiaChegada($linha['dia_chegada']);

            $lstAcompanhamento[] = $acompanhamento;
        }
        return $lstAcompanhamento;
    }
}
?>