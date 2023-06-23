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

    public function SelectID(int $id) {
        try {
            $sql = "SELECT * FROM carroservico WHERE idCarroServico=?";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute([$id]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if($linha) {
                $servico = new \MODEL\CarroServico();
                $servico->setIdCarroservico($linha['idCarroServico']);
                $servico->setPlacaCarroservico($linha['placa_carroServico']);
                $servico->setFinalPlacaCarroservico($linha['final_placa_carroServico']);
                $servico->setNomeProprietarioCarroservico($linha['nome_proprietario_carroServico']);

                return $servico;
            } else {
                return null;
            }
        } catch (\PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
            return null;
        }
    }

    public function Insert(\MODEL\CarroServico $servico) {
        try {
            $sql = "INSERT INTO carroservico (placa_carroServico, final_placa_carroServico, nome_proprietario_carroServico)
                VALUES (?, ?, ?)";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute([
                $servico->getPlacaCarroServico(),
                $servico->getFinalPlacaCarroServico(),
                $servico->getNomeProprietarioCarroServico()
            ]);
            $lastInsertId = $pdo->lastInsertId();
            Conexao::desconectar();
            return $lastInsertId;
        }catch (\PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
            return null;
        }
    }

    public function Update(\MODEL\CarroServico $servico) {
        $sql = "UPDATE carroservico SET placa_carroServico=?, final_placa_carroServico=?, nome_proprietario_carroServico=? WHERE idCarroServico=?";

        $con = Conexao::conectar();
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $con->prepare($sql);
        $result = $query->execute([
            $servico->getPlacaCarroServico(),
            $servico->getFinalPlacaCarroServico(), 
            $servico->getNomeProprietarioCarroServico(),
            $servico->getIdCarroServico()
        ]);
        Conexao::desconectar();
        return $result; 
    }

    public function Delete(int $idCarroServico) {
        try {
            $sql = "DELETE FROM carroservico WHERE idCarroServico=?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $query->execute([$idCarroServico]);
            Conexao::desconectar();
            return $query;
        } catch (\PDOException $e) {
            echo "Erro na exclusão: " . $e->getMessage();
            return false;
        }
    }
}
?>