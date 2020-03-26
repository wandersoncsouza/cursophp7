<?php
/* Herança é um recurso que classes compartilhem recursos e métodos afim de reaproveitar códigos ou comportamentos generalizados */

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou!";
    }
    public function Parar(){
        echo "Parou!";
    }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limmpando e 3.2.1.";      // Setando um método especifico para a classe Carro
    }
}
class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau em 3.2.1.";    // Setando um método especifico para a classe Moto
    }
}

$carro = new Carro();           // Instanciando carro
$carro->modelo = "Gol";         // Setando os atributos (public)
$carro->cor = "Vermelho";
$carro->ano = 2019;
$carro->Andar();                // Utilizando o método andar
echo "<br>";
$carro->ligarLimpador();        // Utilizando o método exclusivo "ligarLimpador" da classe carro       
var_dump($carro);

echo "<br>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Branca";
$moto->ano = 2020;
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);