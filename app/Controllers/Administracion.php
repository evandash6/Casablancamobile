<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\RestClient;
use chillerlan\QRCode\QRCode;

class Administracion extends Controller{

    //Funcion de consutrccion de api
    public function __construct() {
        $this->api = new RestClient([
            'base_url' => 'http://94.72.163.141:8080/api_mobile/public/api/',
            // 'headers' => ['Ephylone'=>'mlpsa'],
            'format' => ""]);
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
        $this->seguridad();
        echo view('header');
        echo view('administracion/inicio');
        echo view('footer');
    }

    public function perfil(){
        $session = session();
        $res = json_decode($this->api->post('query',array('query'=>'SELECT * FROM "public"."View_CAT_Usuarios" WHERE "View_CAT_Usuarios"."email" = \''.$session->email.'\''))->response,true);
        if($res['totalregistros'] > 0){
            $data['resultado'] = $res['resultado'][0];
            $data['qr'] = '<img style="height:250px" src="'.(new QRCode)->render($data['resultado']['No_Socio']).'" alt="QR Code" />';
        }
        else{
            $data['resultado'] = '';
        }
        echo view('header');
        echo view('administracion/perfil',$data);
        echo view('footer');
        echo view('funciones');
    }

    public function clases(){
        $res = json_decode($this->api->post('consulta_tabla',array('tabla'=>'"public"."vw_select_actividades"'))->response,true);
        if($res['totalregistros'] > 0){
            $opc = '<option value="-1">Selecciona</option>';
            foreach ($res['resultado'] as $key => $value) {
                $opc .= '<option value="'.$value['id'].'">'.$value['nombre'].'</option>';
            }
            $data['actividades_opc'] = $opc;
        }
        else{
            $data['resultado'] = '';
        }
        echo view('header');
        echo view('administracion/clases',$data);
        echo view('footer');
        echo view('funciones');
    }

    public function contacto(){
        echo view('header');
        echo view('administracion/contacto');
        echo view('footer');
        echo view('funciones');
    }

    public function buscar_nivel($actividad){
        $res = json_decode($this->api->post('query',array('query'=>'SELECT 
        "View_CAT_Clases"."Folio_Clase" as id,
        "View_CAT_Clases"."Clase" as nombre,
        "View_CAT_Clases"."Actividad" as actividad
        FROM
        "View_CAT_Clases" WHERE "View_CAT_Clases"."Actividad" = \''.$actividad.'\''))->response,true);
        if($res['totalregistros'] > 0){
            $opc = '<option value="-1">Selecciona</option>';
            foreach ($res['resultado'] as $key => $value) {
                $opc .= '<option value="'.$value['id'].'">'.$value['nombre'].'</option>';
            }
            echo $opc;
        }else{
            echo json_encode(array());
        }
    }

    public function buscar_horarios($actividad,$clase){
        $res = json_decode($this->api->post('query',array('query'=>'SELECT
                cla."Actividad",
                cla."Clase",
                lu."Horario_Lunes",
                ma."Horario_Martes",
                mi."Horario_Miercoles",
                ju."Horario_Jueves",
                vi."Horario_Viernes",
                sa."Horario_Sabado",
                dom."Horario_Domingo"
                FROM
                "CAT_Clases" cla
                LEFT JOIN "CAT_Clases" lu on lu."Folio_Clase" = cla."Folio_Clase"
                LEFT JOIN "CAT_Clases" ma on ma."Folio_Clase" = cla."Folio_Clase"
                LEFT JOIN "CAT_Clases" mi on mi."Folio_Clase" = cla."Folio_Clase"
                LEFT JOIN "CAT_Clases" ju on ju."Folio_Clase" = cla."Folio_Clase"
                LEFT JOIN "CAT_Clases" vi on vi."Folio_Clase" = cla."Folio_Clase"
                LEFT JOIN "CAT_Clases" sa on sa."Folio_Clase" = cla."Folio_Clase"
                LEFT JOIN "CAT_Clases" dom on dom."Folio_Clase" = cla."Folio_Clase"
                WHERE cla."Actividad" = \''.$actividad.'\' AND cla."Clase" = \''.$clase.'\''))->response,true);
        if($res['totalregistros'] > 0){
            var_Dump($res['resultado']);
        }else{
            echo json_encode(array());
        }
    }
    
    
}