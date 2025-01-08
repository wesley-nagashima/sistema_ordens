<?php

//TRY CATCH PARA FAZER A CONEXÃO COM O BANCO
try {
    $host = 'localhost';
    $port = '5432';
    $dbname = 'teste_telecontrol';
    $user = 'postgres';
    $password = '123mudar';

    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
