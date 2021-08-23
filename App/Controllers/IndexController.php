<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    use App\Connection;
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action{
        public function index(){
            //$this->view->dados = array('');
            //Container::getModels('Produtos');

            $this->view->dados = Container::getModels('Produto')->getProdutos();

            $this->render('index', 'layout');
        }

        public function sobreNos(){
            //$this->view->dados = array('');
            //Container::getModels('Info');

            $this->view->dados = Container::getModels('Info')->getInfo();
            $this->render('sobreNos', 'layout');
        }

    }

?>