<?php
    class ProdutoController {
        private $model;

        //CONTRUTOR PASSA A MODEL COMO PARAMETRO PARA SER USADA NOS METODOS
        public function __construct($model) {
            $this->model = $model;
        }

        //METODO INICIAL DA MODEL, LISTA OS PRODUTOS NO CASO E INCLUI A VIEW NA PAGINA INDEX, A DE LISTAGEM DE PRODUTOS
        public function index() {
            $produtos = $this->model->listar();
            include __DIR__ . '../../views/produto/lstProduto.php';
        }

        //METODO CHAMA A VIEW FRMPRODUTOS PARA CADASTRAR O CLIENTE
        public function cadastrar() {
            include __DIR__ . '../../views/produto/frmProduto.php';
        }

        //METODO EM SI PARA CADASTRAR O PRODUTO (ELA É CHAMADA POR URL COMO ACTION NOS BOTOES DE CADASTRO)
        public function salvar() {

            //VERIFICA SE TEM ALGUMA REQUISIÇÃO POST E SE SIM JOGA OS DADOS DO FORMULARIO EM VARIAVEIS
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $descricao      = $_POST['descricao_produto']       ?? '';
                $status         = $_POST['status_produto']          ?? '';

                //CHAMA O METODO DA MODEL PARA CADASTRAR NO BANCO E DEPOIS REDIRECIONA PARA A AREA DE LISTAGEM
                $this->model->inserir($descricao, $status);
                header("Location: index.php?view=produto&action=index");
            }
        }
    }
?>
