<?php

class Exemplo{

    private $nome;
    private $senha;

    //metodo inicial da classe - 
    public function __construct($nome , $senha){
        $this->nome = $nome;
        $this->senha = $senha;
    }

    //metodo de conversao da classe em texto
    public function __toString(){
        return json_encode([
             'nome' => $this->nome   
        ]);
    }

    //metodo de consultas de propriedades privadas
    public function __get($atributo){
        return this->{$atributo};
    }

    //metodo de atribuição de propriedades privadas
    public function __set($atributo,$valor){
        return $this->{$atributo} = $valor;
    }

    //EXECUTA COMO FUNÇÃO
    public function __invoke(){
        echo'Seu nome em MD5 :D';    
        return md5($this->nome);
    }

    //filtra o DEBUG da classe
    public function __debugInfo(){
        return[
            'nome' =>$this->nome,
            'senha'=>'****',
            'codigo'=>'12345'
        ];
    }

    //metodo destrutor
    public function __destruct(){
        echo 'tchau meu parceiro :)';
    }

    
}

$obExemplo = new Exemplo('joseph','1234');
$obExemplo->nome = 'jhow';

unset($obExemplo);

echo "\nTeste\n";

//echo $obExemplo();

//print_r($obExemplo);

//echo $obExemplo;