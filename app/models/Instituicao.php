<?php 
Class Instituicao {
    private $conn;
    private $table = "instituicoes";


    public $nome;
    public $tipo;
    public $cidade;
    public $bairro;
    public $endereco;
    public $telefone;
    public $email;
    public $descricao;
    public $ajuda_aceita;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function criar() {
        $query = "INSERT INTO {$this->table}
        (nome, tipo, cidade, bairro, endereco, telefone, email, descricao, ajuda_aceita)
        VALUES (:nome, :tipo, :cidade, :bairro, :endereco, :telefone, :email, :descricao, :ajuda_aceita)";

        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            ":nome" => $this->nome,
            ":tipo" => $this->tipo,
            ":cidade" => $this->cidade,
            ":bairro" => $this->bairro,
            ":endereco" => $this->endereco,
            ":telefone" => $this->telefone,
            ":email" => $this->email,
            ":descricao" => $this->descricao,
            ":ajuda_aceita"=> $this->ajuda_aceita
        ]);
    }
}
?>