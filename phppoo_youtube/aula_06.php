<?php

class Veiculo{
    protected $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }
    public function Parar(){
        echo "Parou";
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
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

$veiculo = new Veiculo();
$veiculo->setModelo("HILLUX");          // Setando o valor Hillux para o objeto privado
echo $veiculo->getModelo();             // Recuperanado oa informação setada