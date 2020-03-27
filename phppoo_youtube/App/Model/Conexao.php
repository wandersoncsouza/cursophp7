<?php
//CRUD não padrão DAO que separa a lógica do acesso aos dados

namespace App\Model;

class Conexao{
    private static $instance;                       // Verficador da instancia da conexão, se existir ele retorna a instancia
    public static function getConn(){
        if(!isset(self::$instance)):                // Se não existir a instancia ele cria uma nova
                self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root','');
        endif;
        return self::$instance;
    }
}