<?php

namespace App\Model;

class ProdutoDao{

    public function create(Produto $p){
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

        $acesso = Conexao::getConn()->prepare($sql);
        $acesso->bindValue(1,$p->getNome());
        $acesso->bindValue(2,$p->getDescricao());
        $acesso->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM produtos';

        $acesso = Conexao::getConn()->prepare($sql);
        $acesso->execute();

        if($acesso->rowCount() >0):         //Verifica se existe algum registro (> 0)
            $resultado = $acesso->fetchAll(\PDO::FETCH_ASSOC);  //Retorna um array para todos os registros encontrados e atribui a variavel resultado 
            return $resultado;              // retorna resultado
        else:
            return [];
        endif;
    }
    
    public function update(Produto $p){
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $acesso = Conexao::getConn()->prepare($sql);
        $acesso->bindValue(1, $p->getNome());
        $acesso->bindValue(2, $p->getDescricao());
        $acesso->bindValue(3, $p->getId());
        $acesso->execute();
    }
    public function delete($id){
        $sql = 'DELETE FROM produtos  WHERE id = ?';
        
        $acesso = Conexao::getConn()->prepare($sql);
        $acesso->bindValue(1, $id);
        $acesso->execute();
    }
}