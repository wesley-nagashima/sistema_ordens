<?php
    class OrdemController {
        private $model;

        //CONTRUTOR PASSA A MODEL COMO PARAMETRO PARA SER USADA NOS METODOS
        public function __construct($model) {
            $this->model = $model;
        }

        //METODO INICIAL DA MODEL, LISTA AS ORDENS NO CASO E INCLUI A VIEW NA PAGINA INDEX, A DE LISTAGEM DE ORDENS
        public function index() {
            $ordens = $this->model->listar();
            include __DIR__ . '../../views/ordem/lstOrdem.php';
        }

        //METODO CHAMA A VIEW FRMORDEM PARA CADASTRAR O CLIENTE
        public function cadastrar() {
            $produtos = $this->model->listarProdutos();
            include __DIR__ . '../../views/ordem/frmOrdem.php';
        }

        //METODO EM SI PARA CADASTRAR A ORDEM (ELA É CHAMADA POR URL COMO ACTION NOS BOTOES DE CADASTRO)
        public function salvar() {

            //VERIFICA SE TEM ALGUMA REQUISIÇÃO POST E SE SIM JOGA OS DADOS DO FORMULARIO EM VARIAVEIS
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $nome_consumidor      = $_POST['nome_consumidor']       ?? '';
                $cpf_consumidor       = $_POST['cpf_consumidor']        ?? '';
                $produto              = $_POST['produto_id']            ?? '';

                //CHAMA O METODO DA MODEL PARA CADASTRAR NO BANCO E DEPOIS REDIRECIONA PARA A AREA DE LISTAGEM
                $this->model->inserir($nome_consumidor, $cpf_consumidor, $produto);
                header("Location: index.php?view=ordem&action=index");
            }
        }
    }
?>
