<?php 
// Configuracao da conexao com a Base de Dados
Class Database {
    private $host = "localhost";
    private $db_name = "solidariedade_mvp";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }
        return $this->conn;
    }

}

?>