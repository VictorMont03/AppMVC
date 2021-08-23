<?php
    namespace App\Controllers;

    use MF\Controller\Action;

    use App\Connection;

    use App\Models\Produto;

    class IndexController extends Action{
        public function index(){
            //$this->view->dados = array('');

            $produtos = new Produto(Connection::getDb());

            $this->view->dados = $produtos->getProdutos();

            $this->render('index', 'layout');
        }

        public function sobreNos(){
            $this->view->dados = array('');
            $this->render('sobreNos', 'layout');
        }

    }

?>