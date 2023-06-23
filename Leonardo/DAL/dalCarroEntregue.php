<?php 
namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\CarroEntregue.php';

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

    public function SelectID(int $id) {
        try {
            $sql = "SELECT * FROM carrosentregues WHERE idCarroEntregue=?";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute([$id]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if($linha) {
                $entregue = new \MODEL\CarroEntregue();
                $entregue->setIdCarroEntregue($linha['idCarroEntregue']);
                $entregue->setPlacaCarroEntregue($linha['placa_carroEntregue']);
                $entregue->setFinalPlacaCarroEntregue($linha['final_placa_carroEntregue']);
                $entregue->setNomeProprietarioCarroEntregue($linha['nome_proprietario_carroEntregue']);

                return $entregue;
            } else {
                return null;
            }
        } catch (\PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
            return null;
        }
    }

    public function Insert(\MODEL\CarroEntregue $entregue) {
        try {
            $sql = "INSERT INTO carrosentregues (placa_carroEntregue, final_placa_carroEntregue, nome_proprietario_carroEntregue)
                VALUES (?, ?, ?)";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute([
                $entregue->getPlacaCarroEntregue(),
                $entregue->getFinalPlacaCarroEntregue(),
                $entregue->getNomeProprietarioCarroEntregue()
            ]);
            $lastInsertId = $pdo->lastInsertId();
            Conexao::desconectar();
            return $lastInsertId;
        }catch (\PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
            return null;
        }
    }

    public function Update(\MODEL\CarroEntregue $entregue) {
        $sql = "UPDATE carrosentregues SET placa_carroEntregue=?, final_placa_carroEntregue=?, nome_proprietario_carroEntregue=? WHERE idCarroEntregue=?";

        $con = Conexao::conectar();
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $con->prepare($sql);
        $result = $query->execute([
            $entregue->getPlacaCarroEntregue(),
            $entregue->getFinalPlacaCarroEntregue(), 
            $entregue->getNomeProprietarioCarroEntregue(),
            $entregue->getIdCarroEntregue()
        ]);
        Conexao::desconectar();
        return $result; 
    }

    public function Delete(int $idCarroEntregue) {
        try {
            $sql = "DELETE FROM carrosentregues WHERE idCarroEntregue=?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $query->execute([$idCarroEntregue]);
            Conexao::desconectar();
            return $query;
        } catch (\PDOException $e) {
            echo "Erro na exclusão: " . $e->getMessage();
            return false;
        }
    }
}
?>