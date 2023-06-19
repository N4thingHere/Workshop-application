<?php

namespace DAL;

include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\DAL\conexao.php';
include_once 'C:\XAMPP\htdocs\Workshop-application\Leonardo\MODEL\usuario.php';


class dalUsuario
{

    public function SelectUser(string $usuario)
    {
        $sql = "select * from login where nome_login LIKE ?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $objusuario = new \MODEL\Usuario();

        if ($linha != null) {
            $objusuario->setNomeUsuario($linha['nome_login']);
            $objusuario->setSenhaLogin($linha['senha_login']);
        }

        return $objusuario;
    }
}

?>
