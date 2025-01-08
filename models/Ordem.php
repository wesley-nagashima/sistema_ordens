<?php
    class Ordem {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        //METEDO PARA LISTAR AS ORDENS E A DESCRICAO DO PRODUTO DA ORDEM (PRODUTO_ID É UMA CHAVE ESTRANGEIRA)
        public function listar() {
            $stmt = $this->pdo->query(
                "SELECT ordens.id                   AS ordem_id             , 
                        ordens.data_abertura        AS data_abertura        , 
                        ordens.nome_consumidor      AS nome_consumidor      ,
                        ordens.cpf_consumidor       AS cpf_consumidor       ,
                        produtos.descricao          AS produto_descricao
                FROM ordens 
                JOIN produtos ON ordens.produto_id = produtos.id"
            );
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //METODO PARA LISTAR OS PRODUTO PARA SEREM EXIBIDOS NO SELECT
        public function listarProdutos() {
            $stmt = $this->pdo->query("SELECT id, descricao FROM produtos");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //METODO PARA CADASTRAR AS ORDENS NO BANCO DE DADOS
        public function inserir($nome_consumidor, $cpf_consumidor, $produto_id) {
            $stmt = $this->pdo->prepare("INSERT INTO ordens (nome_consumidor, cpf_consumidor, produto_id) VALUES (?, ?, ?)");
            return $stmt->execute([$nome_consumidor, $cpf_consumidor, $produto_id]);
        }
    }
?>
