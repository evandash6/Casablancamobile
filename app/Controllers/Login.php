<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\RestClient;

class Login extends Controller{

    function __construct() {
        $this->api = new RestClient([
            'base_url' => 'http://10.254.250.24/public/api/',
            // 'headers' => ['Ephylone'=>'mlpsa'],
            'format' => ""]);
    }

    public function salir(){
        session_start(); 
        session_destroy();
        unset($_SESSION);
        header('Location: '.base_url().'/login');
        exit;
    }

    public function index(){
        // echo "manuel";
        echo view('login/login');
    }

    public function validar(){
        $session = session();
        $session->set('email',$_POST['email']);
        header('Location: '.base_url().'/administracion');
        exit;
    }

    
}