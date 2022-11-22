<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\RestClient;

class Login extends Controller{

    function __construct() {
        $this->api = new RestClient([
			//LOCAL
            // 'base_url' => 'http://localhost/api/public/api',
            //API V2 PRODUCCION
            'base_url' => 'http://10.254.250.24/public/api/',
            'headers' => ['Ephylone'=>'mlpsa'],
            'format' => ""]);
    }

    public function index(){
        echo view('login/login');
    }

    
}