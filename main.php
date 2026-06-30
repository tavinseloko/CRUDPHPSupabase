 <?php
1)
// class ContaBancaria {

//     private $numeroConta;
//     private $titular;
//     private $saldo;

//     public function __construct($numeroConta, $titular, $saldo = 0) {
//         $this->numeroConta = $numeroConta;
//         $this->titular = $titular;
//         $this->saldo = $saldo;
//     }

//     public function depositar($valor) {

//         if ($valor > 0) {
//             $this->saldo += $valor;
//             echo "Deposito realizado com sucesso!<br>";
//         } else {
//             echo "Valor de deposito invalido!<br>";
//         }

//     }

//     public function sacar($valor) {

//         if ($valor <= 0) {
//             echo "Valor de saque invalido!<br>";
//         } elseif ($valor > $this->saldo) {
//             echo "Saldo insuficiente!<br>";
//         } else {
//             $this->saldo -= $valor;
//             echo "Saque realizado com sucesso!<br>";
//         }

//     }

//     public function consultarSaldo() {
//         echo "Saldo atual: R$ " . number_format($this->saldo, 2, ",", ".") . "<br>";
//     }

// }


// $conta = new ContaBancaria(1001, "Joao Silva", 500);

// echo "<h2>Sistema Bancario</h2>";

// $conta->consultarSaldo();

// echo "<br>";

// $conta->depositar(200);
// $conta->consultarSaldo();

// echo "<br>";

// $conta->sacar(300);
// $conta->consultarSaldo();

// echo "<br>";

// $conta->sacar(1000);
// $conta->consultarSaldo();

// 
2)
// class Funcionario {

//     private $nome;
//     private $cargo;
//     private $salario;

//     public function __construct($nome, $cargo, $salario) {
//         $this->nome = $nome;
//         $this->cargo = $cargo;
//         $this->salario = $salario;
//     }

//     public function calcularSalarioAnual() {
//         return $this->salario * 12;
//     }

//     public function aplicarAumento($percentual) {

//         if ($percentual < 0) {
//             echo "Percentual invalido!<br>";
//             return;
//         }

//         $this->salario += ($this->salario * $percentual / 100);

//         echo "Aumento aplicado com sucesso!<br>";
//     }

//     public function exibirDados() {

//         echo "Nome: " . $this->nome . "<br>";
//         echo "Cargo: " . $this->cargo . "<br>";
//         echo "Salario mensal: R$ " . number_format($this->salario, 2, ",", ".") . "<br>";
//         echo "Salario anual: R$ " . number_format($this->calcularSalarioAnual(), 2, ",", ".") . "<br><br>";
//     }
// }


// $funcionario = new Funcionario("Maria Souza", "Analista", 3000);

// echo "<h2>Sistema de RH</h2>";

// $funcionario->exibirDados();

// $funcionario->aplicarAumento(10);
// $funcionario->exibirDados();

// $funcionario->aplicarAumento(5);
// $funcionario->exibirDados();






3)

// class Produto {

//     private $nome;
//     private $preco;
//     private $quantidade;

//     public function __construct($nome, $preco, $quantidade) {
//         $this->nome = $nome;
//         $this->preco = $preco;
//         $this->quantidade = $quantidade;
//     }

//     public function atualizarPreco($novoPreco) {

//         if ($novoPreco < 0) {
//             echo "Preco invalido!<br>";
//             return;
//         }

//         $this->preco = $novoPreco;
//         echo "Preco atualizado com sucesso!<br>";
//     }

//     public function aplicarDesconto($percentual) {

//         if ($percentual < 0 || $percentual > 100) {
//             echo "Desconto invalido!<br>";
//             return;
//         }

//         $desconto = $this->preco * ($percentual / 100);
//         $this->preco -= $desconto;

//         echo "Desconto aplicado com sucesso!<br>";
//     }

//     public function adicionarEstoque($quantidade) {

//         if ($quantidade > 0) {
//             $this->quantidade += $quantidade;
//             echo "Estoque atualizado (entrada)!<br>";
//         } else {
//             echo "Quantidade invalida!<br>";
//         }
//     }

//     public function removerEstoque($quantidade) {

//         if ($quantidade <= 0) {
//             echo "Quantidade invalida!<br>";
//         } elseif ($quantidade > $this->quantidade) {
//             echo "Estoque insuficiente!<br>";
//         } else {
//             $this->quantidade -= $quantidade;
//             echo "Estoque atualizado (saida)!<br>";
//         }
//     }

//     public function exibirProduto() {

//         echo "Produto: " . $this->nome . "<br>";
//         echo "Preco: R$ " . number_format($this->preco, 2, ",", ".") . "<br>";
//         echo "Quantidade: " . $this->quantidade . "<br><br>";
//     }
// }


// $produto = new Produto("Teclado", 100, 10);

// echo "<h2>Sistema de Estoque</h2>";

// $produto->exibirProduto();

// $produto->adicionarEstoque(5);
// $produto->exibirProduto();

// $produto->removerEstoque(3);
// $produto->exibirProduto();

// $produto->aplicarDesconto(10);
// $produto->exibirProduto();

// $produto->atualizarPreco(120);
// $produto->exibirProduto();



4)

// class ConsultaMedica {

//     private $data;
//     private $hora;
//     private $paciente;
//     private $status;

//     public function __construct($data, $hora, $paciente) {
//         $this->data = $data;
//         $this->hora = $hora;
//         $this->paciente = $paciente;
//         $this->status = "Agendada";
//     }

//     public function cancelar() {
//         $this->status = "Cancelada";
//         echo "Consulta cancelada com sucesso!<br>";
//     }

//     public function reagendar($novaData, $novaHora) {

//         $this->data = $novaData;
//         $this->hora = $novaHora;
//         $this->status = "Agendada";

//         echo "Consulta reagendada com sucesso!<br>";
//     }

//     public function exibirConsulta() {

//         echo "Paciente: " . $this->paciente . "<br>";
//         echo "Data: " . $this->data . "<br>";
//         echo "Hora: " . $this->hora . "<br>";
//         echo "Status: " . $this->status . "<br><br>";
//     }
// }


// $consulta = new ConsultaMedica("30/06/2026", "14:00", "Carlos Silva");

// echo "<h2>Sistema de Consultas</h2>";

// $consulta->exibirConsulta();

// $consulta->reagendar("01/07/2026", "16:30");
// $consulta->exibirConsulta();

// $consulta->cancelar();
// $consulta->exibirConsulta();

5)


// class Fatura {

//     private $numeroFatura;
//     private $valorOriginal;
//     private $valorFinal;
//     private $status;

//     public function __construct($numeroFatura, $valorOriginal) {

//         $this->numeroFatura = $numeroFatura;
//         $this->valorOriginal = $valorOriginal;
//         $this->valorFinal = $valorOriginal;
//         $this->status = "Aberta";
//     }

//     public function aplicarDesconto($percentual) {

//         if ($percentual < 0 || $percentual > 100) {
//             echo "Desconto invalido!<br>";
//             return;
//         }

//         $desconto = $this->valorOriginal * ($percentual / 100);
//         $novoValor = $this->valorOriginal - $desconto;

//         if ($novoValor < 0) {
//             $this->valorFinal = 0;
//         } else {
//             $this->valorFinal = $novoValor;
//         }

//         echo "Desconto aplicado com sucesso!<br>";
//     }

//     public function marcarPaga() {
//         $this->status = "Paga";
//         echo "Fatura marcada como paga!<br>";
//     }

//     public function exibirFatura() {

//         echo "Numero da Fatura: " . $this->numeroFatura . "<br>";
//         echo "Valor Original: R$ " . number_format($this->valorOriginal, 2, ",", ".") . "<br>";
//         echo "Valor Final: R$ " . number_format($this->valorFinal, 2, ",", ".") . "<br>";
//         echo "Status: " . $this->status . "<br><br>";
//     }
// }



// $fatura = new Fatura(1001, 500);

// echo "<h2>Sistema de Faturas</h2>";

// $fatura->exibirFatura();

// $fatura->aplicarDesconto(10);
// $fatura->exibirFatura();

// $fatura->aplicarDesconto(50);
// $fatura->exibirFatura();

// $fatura->marcarPaga();
// $fatura->exibirFatura();


6)



class PedidoVenda {

    private $id;
    private $valorTotal;

    public function __construct($id, $valorTotal) {
        $this->id = $id;
        $this->valorTotal = $valorTotal;
    }

    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function getId() {
        return $this->id;
    }
}

class RelatorioVendas {

    public function gerarTotal($listaPedidos) {

        $total = 0;

        foreach ($listaPedidos as $pedido) {
            $total += $pedido->getValorTotal();
        }

        return $total;
    }
}


$pedido1 = new PedidoVenda(1, 150);
$pedido2 = new PedidoVenda(2, 300);
$pedido3 = new PedidoVenda(3, 200);

$pedidos = [$pedido1, $pedido2, $pedido3];

$relatorio = new RelatorioVendas();

echo "<h2>Relatorio de Vendas</h2>";

$total = $relatorio->gerarTotal($pedidos);

echo "Total de vendas: R$ " . number_format($total, 2, ",", ".") . "<br>";

?>


