<?php
namespace App\Src;

class Aluno extends Pessoa implements IHumano, ITerraqueo{
    //interface IHumano
    public function fala(){
        echo "Aluno Fala<br>";
    }

    //classe abstract
    public function logar(){
        echo "Logado - Aluno<br>";
    }

    //classe abstract
    public function cadastrar(){
        echo "Cadastrar - Aluno<br>";
    }

    public function respira(){
        echo "O aluno respira";
    }
}