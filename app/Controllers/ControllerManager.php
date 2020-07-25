
<?php

include 'UserController.php';
include 'OrdemServicoController.php';
include __DIR__.'/../Utils/Logout.php';

class ControllerManager {

  public static function execute($requestURI,$requestMethod='GET'){
    switch($requestURI){
      case '/': 
        $userController = new UserController();
        $userController->index();
        break;
      case '/login':
        $userController = new UserController();
        $userController->makeLogin();
        break;
      case '/painel':
        $ordemServicoController = new OrdemServicoController();
        $ordemServicoController->index();
        break;
      case '/logout':
         $logout = new Logout();
         $logout->logout();
         break;
      case '/cadastrar': 
        $ordemServicoController = new OrdemServicoController();
        $ordemServicoController->create();

    }
  }

}