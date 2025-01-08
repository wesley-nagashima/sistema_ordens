<?php

class Cliente {
    private $pdo;

    //O CONSTRUTOR INSTANCIA E PASSA O PDO PARA UMA VARIAVEL PARA SER USADOS NOS DEMAIS METODOS
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    //METODO PARA LISTAR OS CLIENTES CADASTRADOS
    public function listar() {

        //O PDO PREPARA A QUERY 
        $stmt = $this->pdo->query("SELECT * FROM clientes");

        //COMO É PARA LISTAR O FETCHALL PEGA TODOS OS REGISTROS
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //METODO PARA CADASTRAR OS CLIENTES NO BANCO DE DADOS
    public function inserir($nome, $cpf, $endereco) {

        //PREPARA A QUERY
        $stmt = $this->pdo->prepare("INSERT INTO clientes (nome, cpf, endereco) VALUES (?, ?, ?)");

        //EXECUTA E PASSA POR ARRAY OS DADOS 
        return $stmt->execute([$nome, $cpf, $endereco]);
    }
}
?>
