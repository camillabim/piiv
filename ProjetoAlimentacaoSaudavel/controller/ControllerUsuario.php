<?php
/**
 * Created by PhpStorm.
 * User: Camilla
 * Date: 12/01/2019
 * Time: 16:42
 */

require_once "../model/Usuario.class.php";
require_once "Conexao.php";

class ControllerUsuario
{

    public static function salvar(Usuario $usuario){
        return self::inserir($usuario);
    }

    private static function inserir(Usuario $usuario){
        {
            try {
                $sql = "INSERT INTO usuario (primeironome, ultimonome, email, telefone) VALUES (";
                $sql .= ":primeironome,";
                $sql .= ":ultimonome,";
                $sql .= ":email,";
                $sql .= ":telefone)";

                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue(":primeironome", $usuario->getPrimeironome());
                $p_sql->bindValue(":ultimonome", $usuario->getUltimonome());
                $p_sql->bindValue(":email", $usuario->getEmail());
                $p_sql->bindValue(":telefone", $usuario->getTelefone());
                return $p_sql->execute();
            } catch (Exception $e) {
                print "Ocorreu um erro ao executar a conexão/inserção, verificar função 'INSERIR'";
            }
        }

    }
}