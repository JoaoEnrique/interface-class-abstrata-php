<?php
include "vendor/autoload.php";
use App\Src\IHumano;
use App\Src\ITerraqueo;
use App\Src\Pessoa;
use App\Src\Aluno;

$aluno = new Aluno();
$aluno->cadastrar();
$aluno->logar();
$aluno->fala();
$aluno->criar();
$aluno->respira();
?>