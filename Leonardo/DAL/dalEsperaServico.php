<?php
    namespace DAL;

    include_once 'C:\XAMPP\htdocs\Matheus\DAL\conexao.php';
    include_once 'C:\XAMPP\htdocs\Matheus\MODEL\EsperaServico.php';

    class dalEsperaServico {
        public function SelectEsperaServico() {
            $sql = "select * from esperaservico;";
    
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();
    
            foreach($result as $linha) {
                $espera = new \MODEL\EsperaServico();

                $espera->setIdEsperaServico($linha['idEsperaServico']);
                $espera->setPlacaEsperaServico($linha['placa_esperaServico']);
                $espera->setFinalPlacaEspera($linha['final_placa_espera']);
                $espera->setNomeProprietarioEspera($linha['nome_proprietario_espera']);

                $lstEspera[] = $espera;
            }
            return $lstEspera;
        }
    }
?>