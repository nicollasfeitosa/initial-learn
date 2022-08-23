<?php 

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {

    public function index() 
    {

        $produto = Container::getModel('Produto');
    
        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;
        $this->render('index', 'layout1');
    }
    
    public function sobre() 
    {
        $info = Container::getModel('Info');

        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;
        $this->render('sobre', 'layout2');
    }

}