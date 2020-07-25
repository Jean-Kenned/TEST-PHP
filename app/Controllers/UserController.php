<?php 

require_once __DIR__."/../Views/ViewManager.php";
require __DIR__."/../Http/HttpPostClient.php";
require __DIR__."/../Usuario.php";
session_start();

class UserController {
    public function index(){
        $viewmanager = new ViewManager('login.php');
        echo $viewmanager->render();
    }

    public function makeLogin(){
        $httpClient = new HttpPostClient();
        $header = array(
            'Content-Type: application/json',
            );
        $URL_request = API_URL.LOGIN_PATH;
        $method = 'POST';
        $params = array ('email'=>'teste6@email.com','senha'=>'123123','key'=>API_KEY);
        $body = json_encode($params);
        $xmlResponse = $httpClient->makePostRequest($header,$body,$URL_request,$method);
        $response = simplexml_load_string($xmlResponse);
       if($response->status=='error'){
            $_SESSION['nao_autenticado'] = true;
            header('Location: /');
            exit;
       }else{
            $_SESSION['autenticado'] = true;
            $user = $response->usuario;
            $usuario = new Usuario(
                (string)$user->usuario_id,
                (string)$user->nome,
                (string)$user->cpf,
                (string)$user->cep,
                (string)$user->email,
                (string)$user->sexo
            );
            $_SESSION['usuario'] = serialize($usuario);
            header('Location: /painel');
            exit;
       }
        
    }

}