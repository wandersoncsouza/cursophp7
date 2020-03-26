<?php
class Login{

    //Utilizando objetos privados
    private $email;
    private $senha;
    private $nome;

    //Utilizando um construtor
    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this-> nome;
    }
    //Utilizando os getters e setters
    public function getEmail(){  //get
        return $this->email;
    }
   
    //A utilizando o get e set é possível adicionar filtros nas informações obtidas
    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
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

//Setando o construct na linha 10
$logar = new Login("teste@teste.com", "123456", "Rodrigo Oliveira");
$logar->Logar();
//pegando/Mostrando os valores setados
echo "<br>";
echo $logar->getNome();

?>