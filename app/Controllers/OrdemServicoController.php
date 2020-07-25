<?php 

require_once __DIR__."/../Views/ViewManager.php";

class OrdemServicoController {
    public function index(){
        $viewmanager = new ViewManager('painel.php');
        echo $viewmanager->render();
    }

  
}