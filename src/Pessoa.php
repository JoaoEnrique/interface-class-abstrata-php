<?php
namespace App\Src;

abstract class Pessoa implements IHumano{
    private $nome;
    private $email;
    private $idade;

    public abstract function logar(); //precisa ser implementado nas subclasse
    public abstract function cadastrar();//precisa ser implementado nas subclasse
    
    //não precisa ser implementado nas subclasse
    public function criar(){
        echo "Metodo criar Pessoa<br>";
    }
}