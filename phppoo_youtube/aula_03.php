<?php
class Login{
    //Utilizando quando o objeto é publico
    //public $email;
    //public $senha;

    //Utilizando objetos privados
    private $email;
    private $senha;

    //Utilizando os getters e setters
    public function getEmail(){  //get
        return $this->email;
    }
    /*public function setEmail($e){ //set
        $this->email = $e;
    }
    A utilizando o get e set é possível adicionar filtros nas informações obtidas */
    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL)
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }


    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso";
        else:
            echo "Dados inválidos";
        endif;
    }
}
$logar = new Login();
//Utilizando quando o objeto é publico e inserindo diretamente nos atributos
//$logar->email = "teste@teste.com";
//$logar->senha = "123456";

//Utilizando quando o objeto é privado
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
//pegando/Mostrando os valores setados
echo "<br>";
echo $logar->getEmail();

?>