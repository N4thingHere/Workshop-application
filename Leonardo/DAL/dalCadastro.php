<?php
namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\Cadastro.php';

class dalCadastro {
    public function Select() {
        $sql = "select * from login;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach($result as $linha) {
            $cadastro = new \MODEL\Cadastro();

            $cadastro->setIdCadastro($linha['idCadastro']);
            $cadastro->setNomeLogin($linha['nome_login']);
            $cadastro->setSenhaLogin($linha['senha_login']);

            $lstCadastro[] = $cadastro;
        }

        return $lstCadastro;
    }

    public function SelectID(int $id) {
        try {
            $sql = "SELECT * FROM login WHERE idCadastro=?";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute([$id]);
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if($linha) {
                $cadastro = new \MODEL\Cadastro();
                $cadastro->setIdCadastro($linha['idCadastro']);
                $cadastro->setNomeLogin($linha['nome_login']);
                $cadastro->setSenhaLogin($linha['senha_login']);

                return $cadastro;
            } else {
                return null;
            }
        } catch (\PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
            return null;
        }
    }

    public function Update(\MODEL\Cadastro $cadastro) {
        $sql = "UPDATE login SET nome_login=?, senha_login=? WHERE idCadastro=?";
    
        $con = Conexao::conectar();
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    
        // Gerar o hash seguro da senha
        $senhaHash = md5($cadastro->getSenhaLogin());
    
        $query = $con->prepare($sql);
        $result = $query->execute([
            $cadastro->getNomeLogin(),
            $senhaHash,
            $cadastro->getIdCadastro()
        ]);
    
        Conexao::desconectar();
        return $result;
    }
    

    public function Delete(int $idCadastro) {
        try {
            $sql = "DELETE FROM login WHERE idCadastro=?";
            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $query->execute([$idCadastro]);
            Conexao::desconectar();
            return $query;
        } catch (\PDOException $e) {
            echo "Erro na exclusão: " . $e->getMessage();
            return false;
        }
    }
}

?>