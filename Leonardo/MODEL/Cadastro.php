<?php
    namespace MODEL;

    class Cadastro {
        private ?string $idCadastro;
        private ?string $empresa;
        private ?string $processo;
        private ?string $nome_cliente;
        private ?string $endereco_cliente;
        private ?string $cidade_cliente;
        private ?string $estado_cliente;
        private ?int $CPF_Cliente;
        private ?int $telefone_cliente;
        private ?string $fabricante_veiculo;
        private ?string $nome_veiculo;
        private ?string $modelo_veiculo;
        private ?int $ano_placa;
        private ?int $placa_veiculo;
        private ?string $cor_veiculo;
        private ?string $chassi_veiculo;
        private ?string $cia_seguros;
        private ?string $dt_sinistro;
        private ?int $numero_sinistro;
        private ?string $segurado;
        private ?string $data_vistoria;
        private ?string $data_liberacao;
        private ?string $franquia;
        private ?int $desconto;
        private ?string $orcamentista;
        private ?string $consultor;
        private ?string $observacoes;
        private ?string $nome_usuario;
        private ?string $email_usuario;
        private ?string $senha_usuario;
        private ?string $conf_senha_usuario;


        public function __construct() {}

        public function getId() {
            return $this->idCadastro;
        }

        public function setId(string $idCadastro) {
            $this->idCadastro = $idCadastro;
        }

        public function getEmpresa() {
            return $this->empresa;
        }

        public function setEmpresa(string $empresa) {
            $this->empresa = $empresa;
        }

        public function getProcesso() {
            return $this->processo;
        }

        public function setProcesso(string $processo) {
            $this->processo = $processo;
        }

        public function getNomeCliente() {
            return $this-> nome_cliente;
        }

        public function setNomeCliente(string $nome_cliente) {
            $this->nome_cliente = $nome_cliente;
        }

        public function getEnderecoCliente() {
            return $this->endereco_cliente;
        }

        public function setEnderecoCliente(string $endereco_cliente) {
            $this->endereco_cliente = $endereco_cliente;
        }

        public function getCidadeCliente() {
            return $this->cidade_cliente;
        }

        public function setCidadeCliente(string $cidade_cliente) {
            $this-> cidade_cliente = $cidade_cliente;
        }

        public function getEstadoCliente() {
            return $this->estado_cliente;
        }

        public function setEstadoCliente(string $estado_cliente) {
            $this->estado_cliente = $estado_cliente;
        }

        public function getCPF() {
            return $this->CPF_Cliente;
        }

        public function setCPF(int $CPF_Cliente) {
            $this->CPF_Cliente = $CPF_Cliente;
        }

        public function getTelefone() {
            return $this->telefone_cliente;
        }

        public function setTelefone(int $telefone_cliente) {
            $this->telefone_cliente = $telefone_cliente;
        }

        public function getFabricante() {
            return $this->fabricante_veiculo;
        }

        public function setFabricante(string $fabricante_veiculo) {
            $this->fabricante_veiculo = $fabricante_veiculo;
        }

        public function getNomeVeiculo() {
            return $this->nome_veiculo;
        }

        public function setNomeVeiculo(string $nome_veiculo) {
            $this->nome_veiculo = $nome_veiculo;
        }

        public function getModeloVeiculo() {
            return $this->modelo_veiculo;
        }

        public function setModeloVeiculo(string $modelo_veiculo) {
            $this->modelo_veiculo = $modelo_veiculo;
        }

        public function getAnoPlaca() {
            return $this->ano_placa;
        }

        public function setAnoPlaca(int $ano_placa) {
            $this->ano_placa = $ano_placa;
        }

        public function getPlacaVeiculo() {
            return $this->placa_veiculo;
        }

        public function setPlacaVeiculo(int $placa_veiculo) {
            $this->placa_veiculo = $placa_veiculo;
        }

        public function getCorVeiculo() {
            return $this->cor_veiculo;
        }

        public function setCorVeiculo(string $cor_veiculo) {
            $this->cor_veiculo = $cor_veiculo;
        }

        public function getChassi() {
            return $this->chassi_veiculo;
        }

        public function setChassi(string $chassi_veiculo) {
            $this->chassi_veiculo = $chassi_veiculo;
        }

        public function getCiaSeguros() {
            return $this->cia_seguros;
        }

        public function setCiaSeguros(string $cia_seguros) {
            $this->cia_seguros = $cia_seguros;
        }

        public function getDtSinistro() {
            return $this->dt_sinistro;
        }

        public function setDtSinistro(string $dt_sinistro) {
            $this->dt_sinistro = $dt_sinistro;
        }

        public function getNumeroSinistro() {
            return $this->numero_sinistro;
        }

        public function setNumeroSinistro(int $numero_sinistro) {
            $this->numero_sinistro = $numero_sinistro;
        }

        public function getSegurado() {
            return $this->segurado;
        }

        public function setSegurado(string $segurado) {
            $this->segurado = $segurado;
        }

        public function getDataVistoria() {
            return $this->data_vistoria;
        }

        public function setDataVistoria(string $data_vistoria) {
            $this->data_vistoria = $data_vistoria;
        }

        public function getDataLiberacao() {
            return $this->data_liberacao;
        }

        public function setDataLiberacao(string $data_liberacao) {
            $this->data_liberacao = $data_liberacao;
        }

        public function getFranquia() {
            return $this->franquia;
        }

        public function setFranquia(string $franquia) {
            $this->franquia = $franquia;
        }

        public function getDesconto() {
            return $this->desconto;
        }

        public function setDesconto(int $desconto) {
            $this->desconto = $desconto;
        }

        public function getOrcamentista() {
            return $this->orcamentista;
        }

        public function setOrcamentista(string $orcamentista) {
            $this->orcamentista = $orcamentista;
        }

        public function getConsultor() {
            return $this->consultor;
        }

        public function setConsultor(string $consultor) {
            $this-> consultor = $consultor;
        }

        public function getObservacoes() {
            return $this->observacoes;
        }

        public function setObservacoes(string $observacoes) {
            $this->observacoes = $observacoes;
        }

        public function getNomeUsuario() {
            return $this->nome_usuario;
        }

        public function setNomeUsuario(string $nome_usuario) {
            $this->nome_usuario = $nome_usuario;
        }

        public function getEmail() {
            return $this->email_usuario;
        }

        public function setEmail(string $email_usuario) {
            $this->email_usuario = $email_usuario;
        }

        public function getSenhaUsuario() {
            return $this->senha_usuario;
        }

        public function setSenhaUsuario(string $senha_usuario) {
            $this->senha_usuario = $senha_usuario;
        }

        public function getConfirm() {
            return $this->conf_senha_usuario;
        }

        public function setConfirm(string $conf_senha_usuario) {
            $this->conf_senha_usuario = $conf_senha_usuario;
        }

}



?>