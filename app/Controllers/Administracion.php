<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\RestClient;

class Administracion extends Controller{

    //Funcion de consutrccion de api
    public function __construct() {
    }

    private function salir(){
        header('Location: '.base_url().'/login/salir');
        exit;
    }

    //Metodo de seguridad para denegar accesos a apps o usuario no autorizados
    private function seguridad(){      
        $session = session();
        if(!$session->email != null || !$session->email != ''){
            $this->salir();
        }
    }

    //Metodo de inicio
    public function index(){
        echo view('header');
        echo view('administracion/inicio');
        echo view('footer');
    }

    public function perfil(){
        echo view('header');
        echo view('administracion/perfil');
        echo view('footer');
    }

    public function clases(){
        echo view('header');
        echo view('administracion/clases');
        echo view('footer');
    }

    public function contacto(){
        echo view('header');
        echo view('administracion/contacto');
        echo view('footer');
    }
    
}