# index
```php
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
```
# Subclasse Aluno - Herda de Pessoa e Implementa de Humano e Terraqueo
```php
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

```
# Classe Aluno - Especializa em Aluno
```php
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
```

# Interface Humano
```php
namespace App\Src;

interface IHumano{
    public function fala();
}
```


# Interface Terraqueo
```php
namespace App\Src;

interface ITerraqueo{
    public function respira();
}
```
