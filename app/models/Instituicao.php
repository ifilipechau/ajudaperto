<?php 
// Classe responsável por representar e manipular dados da instituição

Class Instituicao {
    private $conn;
    private $table = "instituicoes";

    public $id;
    public $nome;
    public $descricao;
    public $cidade;
    public $bairro;
    public $endereco;
    public $telefone;
    public $email;
    public $website;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function criar() {
        $query = "INSERT INTO {$this->table}
        (nome, descricao, cidade, bairro, endereco, telefone, email, website)
        VALUES (:nome, :descricao, :cidade, :bairro, :endereco, :telefone, :email, :website)";

        $stmt = $this->conn->prepare($query);

        // Limpa os dados
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->descricao = htmlspecialchars(strip_tags($this->descricao));
        $this->cidade = htmlspecialchars(strip_tags($this->cidade));
        $this->bairro = htmlspecialchars(strip_tags($this->bairro));
        $this->endereco = htmlspecialchars(strip_tags($this->endereco));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->website = htmlspecialchars(strip_tags($this->website));

        // Liga os parâmetros
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":cidade", $this->cidade);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":website", $this->website);

        return $stmt->execute();

    }

}
?>