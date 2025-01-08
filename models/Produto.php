<?php
    class Produto {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function listar() {
            $stmt = $this->pdo->query("SELECT * FROM produtos");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function inserir($descricao, $status) {
            $stmt = $this->pdo->prepare("INSERT INTO produtos (descricao, status) VALUES (?, ?)");
            return $stmt->execute([$descricao, $status]);
        }
    }
?>
