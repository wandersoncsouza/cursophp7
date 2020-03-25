<?php
class Pessoa {   //Criando uma classe
    public $nome;
    public $idade;

    //Criando um método
    public function Falar(){
    echo $this->nome." de ".$this->idade." anos, acabou de falar.";
    }   
}

$rodrigo = new Pessoa(); //Instanciar a classe
$rodrigo->nome = "Rodrigo dos Santos de Oliveira";  //Fazendo a utilizaçao de um atributo
$rodrigo->idade = 25; //Fazendo a utilizaçao de um atributo
$rodrigo->Falar(); //Utilizando o método "Falar"
//echo $rodrigo->nome; // Exibindo valores do atributo - Isso só é possível devido o atributo nome é Public