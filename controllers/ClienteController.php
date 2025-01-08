<?php
    class ClienteController {
        private $model;
        
        //CONTRUTOR PASSA A MODEL COMO PARAMETRO PARA SER USADA NOS METODOS
        public function __construct($model) {
            $this->model = $model;
        }
        
        //METODO INICIAL DA MODEL, LISTA OS CLIENTES NO CASO E INCLUI A VIEW DE LISTAGEM DE CLIENTES
        public function index() {
            $clientes = $this->model->listar();
            include __DIR__ . '../../views/cliente/lstCliente.php';
        }
        
        //METODO CHAMA A VIEW FRM CLIENTE PARA CADASTRAR O CLIENTE
        public function cadastrar() {
            include __DIR__ . '../../views/cliente/frmCliente.php';
        }
        
        //METODO EM SI PARA CADASTRAR O CLIENTE (ELA É CHAMADA POR URL COMO ACTION NOS BOTOES DE CADASTRO)
        public function salvar() {
            
            //VERIFICA SE TEM ALGUMA REQUISIÇÃO POST E SE SIM JOGA OS DADOS DO FORMULARIO EM VARIAVEIS
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nome               = $_POST['nome_cliente']        ?? '';
                $cpf                = $_POST['cpf_cliente']         ?? '';
                $endereco           = $_POST['endereco_cliente']    ?? '';

                //CHAMA O METODO DA MODEL PARA CADASTRAR NO BANCO E DEPOIS REDIRECIONA PARA A AREA DE LISTAGEM
                $this->model->inserir($nome, $cpf, $endereco);
                header("Location: index.php?view=cliente&action=index");
            }
        }
    }
    
?>