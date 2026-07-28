 <?php
//   class Pessoa{
//     public $nome;
//     private $cpf;

//     public function __construct($nome, $cpf){
//       $this->nome = $nome;
//       $this->cpf = $cpf;
//     }

//     public function apresentar(){
//       return "Nome: $this->nome\nCPF: $this->cpf\n";
//     }

//     public function setNovoCpf($novoCpf){
//       $this->cpf = $novoCpf;
//       return "CPF modificado com sucesso!";
//     }

//     public function getCpf(){
//       return $this->cpf;
//     }
//   }

//   class Funcionario extends Pessoa{
//     public $nome;
//     private $cpf;
//     protected $numReg;

//     public function __construct($nome, $cpf, $numReg){
//       parent::__construct($nome, $cpf);
//       $this->numReg = $numReg;
//     }

//     public function apresentar(){
//       return parent::apresentar() . "\nNúmero Registro: $this->numReg";
//     }
//   }

//   $ana = new Pessoa("Ana", 12345678900);
//   echo "Nome impresso diretamente: " . $ana->nome . "\n";
//   echo "CPF impresso diretamente: " . $ana->cpf . "\n";
//   echo "Dados impressos pelo método apresentar(): \n";
//   echo $ana->apresentar();
//   echo $ana->setNovoCpf(readline("Digite um novo CPF para $ana->nome: "));
//   echo "Novo CPF: " . $ana->getCpf();
//   $bruno = new Funcionario("Bruno", 98765432100, 12345);
//   echo $bruno->apresentar();


 abstract class Funcionario{
    public $nome;
    protected $cpf;
    private  $numReg;

    public function __construct($nome, $cpf, $numReg){
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->numReg = $numReg;
      
    }
 public function apresentar(){
   return "Nome: $this->nome\nCPF: $this->cpf\nNúmero de registro: $this->numReg\n ";
 }
   abstract public function promover($salario, $aumentoPercentual);
 }
class RecursosHumanos extends Funcionario{
  public function promover($salario, $aumentoPercentual){
   return $salario + ($salario * $aumentoPercentual / 100);
  }
}
$ana = new RecursosHumanos("Ana", 12345678900, 12345);
echo $ana->apresentar();
echo $ana->promover(7500, 17);

?>

  
  
  
  
  
  
  
  
  