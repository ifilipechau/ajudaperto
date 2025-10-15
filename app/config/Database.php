<?php 
// Configuracao da conexao com a Base de Dados
Class Database {
    private $host = "localhost";
    private $db_name = "ajudaperto";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8mb4");
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
        return $this->conn;
    }

}

?>