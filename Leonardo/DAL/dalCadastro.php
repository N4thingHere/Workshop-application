<?php
namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Cadastro.php';

class dalCadastro {
    public function Select() {
        $sql = "select * from cadastro;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $cadastro = new \MODEL\Cadastro();

            $cadastro->setId($linha['idCadastro']);
            $cadastro->setEmpresa($linha['empresa']);
            $cadastro->setProcesso($linha['processo']);
            $cadastro->setNomeCliente($linha['nome_cliente']);
            $cadastro->setEnderecoCliente($linha['endereco_cliente']);
            $cadastro->setCidadeCliente($linha['cidade_cliente']);
            $cadastro->setEstadoCliente($linha['estado_cliente']);
            $cadastro->setCPF($linha['CPF_Cliente']);
            $cadastro->setTelefone($linha['telefone_cliente']);
            $cadastro->setFabricante($linha['fabricante_veiculo']);
            $cadastro->setNomeVeiculo($linha['nome_veiculo']);
            $cadastro->setModeloVeiculo($linha['modelo_veiculo']);
            $cadastro->setAnoPlaca($linha['ano_veiculo']);
            $cadastro->setPlacaVeiculo($linha['placa_veiculo']);
            $cadastro->setCorVeiculo($linha['cor_veiculo']);
            $cadastro->setChassi($linha['chassi_veiculo']);
            $cadastro->setCiaSeguros($linha['cia_seguros']);
            $cadastro->setDtSinistro($linha['dt_sinistro']);
            $cadastro->setNumeroSinistro($linha['numero_sinistro']);
            $cadastro->setSegurado($linha['segurado']);
            $cadastro->setDataVistoria($linha['data_vistoria']);
            $cadastro->setDataLiberacao($linha['data_liberacao']);
            $cadastro->setFranquia($linha['franquia']);
            $cadastro->setDesconto($linha['desconto']);
            $cadastro->setOrcamentista($linha['orcamentista']);
            $cadastro->setConsultor($linha['consultor']);
            $cadastro->setObservacoes($linha['observacoes']);
            $cadastro->setNomeUsuario($linha['nome_usuario']);
            $cadastro->setEmail($linha['email_usuario']);
            $cadastro->setSenhaUsuario($linha['senha_usuario']);
            $cadastro->setConfirm($linha['conf_senha_usuario']);

            $lstCadastro[] = $cadastro;
        }

        return $lstCadastro;
    }

    public function Insert() {}

    public function Update() {}

    public function Delete() {}
}

?>