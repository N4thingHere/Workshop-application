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

    public function Insert (\MODEL\Acompanhamento $acompanhamento){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO acompanhamento (nome_peça, status_peça, dia_chegada) 
            VALUES  ('{$acompanhamento->getNomePeca()}', '{$acompanhamento->getStatusPeca()}',
                    '{$acompanhamento->getDiaChegada()}');";

        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 
    }

    public function Update(\MODEL\Acompanhamento $acompanhamento){
        $sql = "UPDATE acompanhamento SET nome_peça=?, status_peça=?, dia_chegada=? WHERE idAcompanhamento=?";

        $con = Conexao::conectar(); 
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $con->prepare($sql);
        $result = $query->execute(array($acompanhamento->getNomePeca(), $acompanhamento->getStatusPeca(), 
                                        $acompanhamento->getDiaChegada(), $acompanhamento->getIdAcompanhamento()));
        $con = Conexao::desconectar();
        return  $result; 
    }

    public function Delete(int $idAcompanhamento){
        $sql = "DELETE FROM acompanhamento WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($idAcompanhamento));
        $pdo = Conexao::desconectar();
        return  $result; 
    }


}


?>