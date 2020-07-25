<?php 

require_once __DIR__."/../Views/ViewManager.php";
require_once __DIR__."/../Http/HttpPostClient.php";
require __DIR__."/../Usuario.php";
session_start();

class UserController {
    public function index(){
        $viewmanager = new ViewManager('login.php');
        echo $viewmanager->render();
    }

    public function makeLogin($dataForm){
        $httpClient = new HttpPostClient();
        $header = array(
            'Content-Type: application/json',
            );
        $URL_request = API_URL.LOGIN_PATH;
        $method = 'POST';
        $params = array ('email'=>$dataForm['email'],'senha'=>$dataForm['senha'],'key'=>API_KEY);
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

    public function showForm(){
        $viewmanager = new ViewManager('cadastrar.php');
        echo $viewmanager->render();
    }


    public function create($dataForm){
        $httpClient = new HttpPostClient();
        $header = array(
            'Content-Type: application/json',
            );
        $URL_request = API_URL.CADASTRO_PATH;
        $method = 'POST';
        $usuario = array(
            'nome'=>$dataForm['nome'],
            'email'=>$dataForm['email'],
            'cpf'=>$dataForm['cpf'],
            'sexo'=>$dataForm['sexo'],
            'senha'=>$dataForm['senha']);
        $params = array ('usuario'=>$usuario,'key'=>API_KEY);
        $body = json_encode($params);
        $xmlResponse = $httpClient->makePostRequest($header,$body,$URL_request,$method);
        $response = simplexml_load_string($xmlResponse);
        var_dump($response);
    }



}