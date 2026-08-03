<?php

// Exercício 1

class Usuario {
    private string $nome;
    private string $email;

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function exibirDados(): void {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "E-mail: " . $this->email . PHP_EOL;
    }
}

class Administrador extends Usuario {
    private string $nivelAcesso;

    public function __construct(string $nome, string $email, string $nivelAcesso) {
        parent::__construct($nome, $email);
        $this->nivelAcesso = $nivelAcesso;
    }

    public function getNivelAcesso(): string {
        return $this->nivelAcesso;
    }

    public function setNivelAcesso(string $nivelAcesso): void {
        $this->nivelAcesso = $nivelAcesso;
    }

    public function exibirDados(): void {
        parent::exibirDados();
        echo "Nível de Acesso: " . $this->nivelAcesso . PHP_EOL;
    }
}

$admin = new Administrador("Ludson Moreira", "ludson@empresa.com", "Moderador");
$admin->setNivelAcesso("Administrador Geral");
$admin->exibirDados();

echo PHP_EOL;

// Exercício 2

class Produto {
    protected string $nome;
    protected float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }

    public function mostrarProduto(): void {
        echo "Produto: " . $this->nome . PHP_EOL;
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . PHP_EOL;
    }
}

class Notebook extends Produto {
    private string $memoriaRAM;

    public function __construct(string $nome, float $preco, string $memoriaRAM) {
        parent::__construct($nome, $preco);
        $this->memoriaRAM = $memoriaRAM;
    }

    public function getMemoriaRAM(): string {
        return $this->memoriaRAM;
    }

    public function setMemoriaRAM(string $memoriaRAM): void {
        $this->memoriaRAM = $memoriaRAM;
    }

    public function mostrarProduto(): void {
        parent::mostrarProduto();
        echo "Memória RAM: " . $this->memoriaRAM . PHP_EOL;
    }
}

$notebook = new Notebook("Dell Inspiron", 3500.00, "8GB");
$notebook->setMemoriaRAM("16GB");
$notebook->mostrarProduto();

echo PHP_EOL;

// Exercício 3

class Funcionario {
    private string $nome;
    private float $salario;

    public function __construct(string $nome, float $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    public function mostrarFuncionario(): void {
        echo "Funcionário: " . $this->nome . PHP_EOL;
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . PHP_EOL;
    }
}

class Desenvolvedor extends Funcionario {
    private string $linguagemPrincipal;

    public function __construct(string $nome, float $salario, string $linguagemPrincipal) {
        parent::__construct($nome, $salario);
        $this->linguagemPrincipal = $linguagemPrincipal;
    }

    public function getLinguagemPrincipal(): string {
        return $this->linguagemPrincipal;
    }

    public function setLinguagemPrincipal(string $linguagemPrincipal): void {
        $this->linguagemPrincipal = $linguagemPrincipal;
    }

    public function mostrarFuncionario(): void {
        parent::mostrarFuncionario();
        echo "Linguagem Principal: " . $this->linguagemPrincipal . PHP_EOL;
    }
}

$dev = new Desenvolvedor("Ana Maria", 4500.00, "PHP");
$dev->setSalario(5200.00);
$dev->mostrarFuncionario();

echo PHP_EOL;

// Exercício 4

class Pessoa {
    protected string $nome;
    protected int $idade;

    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function apresentar(): void {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Idade: " . $this->idade . " anos" . PHP_EOL;
    }
}

class Aluno extends Pessoa {
    private string $curso;

    public function __construct(string $nome, int $idade, string $curso) {
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function getCurso(): string {
        return $this->curso;
    }

    public function setCurso(string $curso): void {
        $this->curso = $curso;
    }

    public function apresentar(): void {
        parent::apresentar();
        echo "Curso: " . $this->curso . PHP_EOL;
    }
}

$aluno = new Aluno("João Pedro", 16, "Desenvolvimento de Sistemas");
$aluno->setIdade(17);
$aluno->apresentar();


?>
  
  
  
  
  
  
  
  
  