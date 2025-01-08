<?php

    //IMPORTAÇÕES BÁSICAS DE BANCO, MODELS E CONTROLLERS
    require 'config/conexao.php';

    require 'models/Cliente.php';
    require 'models/Produto.php';
    require 'models/Ordem.php';

    require 'controllers/ClienteController.php';
    require 'controllers/ProdutoController.php';
    require 'controllers/OrdemController.php';
    
    //CHAMA A VIEW PADRÃO DE NAVBAR
    include "views/layout/layout.php";

    //PEGA A VIEW E A AÇÃO POR URL QUE VAI DETERMINAR EM QUAL CONTROLLER E MODEL UTILIZAR
    $view   = $_GET['view'] ?? '';
    $action = $_GET['action'] ?? '';

    //SWITCH CASE PARA MAPEAR QUAL CONTROLLER SERÁ UTILIZADO DETERMINADO PELA VIEW E ACTION PASSADA PELOS BOTOES DE CADASTRO OU LINKS DO HEADER
    if ($view && $action) {
        switch ($view) {
            case 'cliente':
                $model = new Cliente($pdo);
                $controller = new ClienteController($model);
                break;
            case 'produto':
                $model = new Produto($pdo);
                $controller = new ProdutoController($model);
                break;
            case 'ordem':
                $model = new Ordem($pdo);
                $controller = new OrdemController($model);
                break;
            default:
                die("Módulo inválido!");
        }

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            die("Ação inválida!");
        }

    } 
    
?>

