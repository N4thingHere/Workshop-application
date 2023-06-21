<?php
namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Acompanhamento.php';

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

    public function SelectID(int $id) {
        try {
            $sql = "SELECT * FROM acompanhamento WHERE idAcompanhamento=?";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute([$id]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();
    
            if ($linha) {
                $acompanhamento = new \MODEL\Acompanhamento(); 
                $acompanhamento->setIdAcompanhamento($linha['idAcompanhamento']);
                $acompanhamento->setNomePeca($linha['nome_peça']); 
                $acompanhamento->setStatusPeca($linha['status_peça']); 
                $acompanhamento->setDiaChegada($linha['dia_chegada']); 
    
                return $acompanhamento;
            } else {
                return null;
            }
        } catch (\PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
            return null;
        }
    }
    
    public function Insert(\MODEL\Acompanhamento $acompanhamento) {
        try {
            $sql = "INSERT INTO acompanhamento (nome_peça, status_peça, dia_chegada) 
                     VALUES (?, ?, ?)";
    
            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute([
                $acompanhamento->getNomePeca(),
                $acompanhamento->getStatusPeca(),
                $acompanhamento->getDiaChegada()
            ]);
            $lastInsertId = $pdo->lastInsertId();
            Conexao::desconectar();
            return $lastInsertId;
        } catch (\PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
            return null;
        }
    }
    

    public function Update(\MODEL\Acompanhamento $acompanhamento) {
        try {
            $sql = "UPDATE acompanhamento SET nome_peça=?, status_peça=?, dia_chegada=? WHERE idAcompanhamento=?";
    
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute([
                $acompanhamento->getNomePeca(),
                $acompanhamento->getStatusPeca(),
                $acompanhamento->getDiaChegada(),
                $acompanhamento->getIdAcompanhamento()
            ]);
            Conexao::desconectar();
            return $result;
        } catch (\PDOException $e) {
            echo "Erro na atualização: " . $e->getMessage();
            return false;
        }
    }
    

    public function Delete(int $idAcompanhamento) {
        try {
            $sql = "DELETE FROM acompanhamento WHERE idAcompanhamento = ?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $query->execute([$idAcompanhamento]);
            Conexao::desconectar();
            return $query;
        } catch (\PDOException $e) {
            echo "Erro na exclusão: " . $e->getMessage();
            return false;
        }
    }


}


?>