<?php 

require_once __DIR__."/../Views/ViewManager.php";

class OrdemServicoController {
    public function index(){
        $viewmanager = new ViewManager('painel.php');
        echo $viewmanager->render();
    }

    public function create(){
        $viewmanager = new ViewManager('cadastrar.php');
        echo $viewmanager->render();
    }
  
}