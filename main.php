<?php
class tabela{
    public $nome;
    public $pdo;
    public function __construct($nome, $host, $post, $dbname, $user, $password){
        $this->nome = $nome;
      try{
        $this->pdo = new PDO("pgsql:host=$host;dbname=$dbname",$user,$password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado ao banco de dados com sucesso!";
      }catch(PDOException $e){
       die("Erro ao conectar com o banco de dados: " . $e->getMessage() . "\n");
  }
  }  
public function ListarAlunos(){
  try{
    
  
    $sql = "SELECT * FROM $this->nome";
    $stmt = $this->pdo->query($sql);
    return $stmt->FetchAll(PDO::FETCH_ASSOC);
  }catch(PDOException $e){
    die("Erro ao listar alunos: " . $e->getMessage() . "\n");
}
}
}
$alunos = new tabela("alunos", "aws-1-sa-east-1.pooler.supabase.com", "6543", "postgres", "postgres.emoiwejourykfpuqpnqv", "Ilumi123!@#");
print_r($alunos->ListarAlunos());
?>