<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\controller;

class Usuario_controller extends Controller{
    public function __construct(){
            helper(['form', 'url']);        
    }

    public function create (){

        $dato['Titulo']='Registro';
        echo View('front/head_view', $dato);
        echo View('front/navbar_view');
        echo View('back/usuario/registro');
        echo View('front/footer_view');
    }

    public function formValidation (){

        $input = $this->validate([
            'nombre'    => 'required|min_length[3]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'usuario'   => 'required|min_length[3]',
            'email'     => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'      => 'required|min_length[3]max_length[10]'
        ],
    );

$formModel = new usuario_Model();

if (!$input) {
    $data['Titulo']='Registro';
        echo View('front/head_view', $data);
        echo View('front/navbar_view');
        echo View('back/usuario/registro', ['validation' => $this->validator]);
        echo View('front/footer_view');

} else {
    $formModel->save([
        'nombre'  => $this      -> request->getVar('nombre'),
        'apellido'  => $this    -> request->getVar('apellido'),
        'usuario'  => $this     -> request->getVar('usuario'),
        'email'  => $this       -> request->getVar('email'),
        'pass'  => password_hash($this -> request->getVar('pass'), PASSWORD_DEFAULT) 
        /*password_hash() crea un nuevo hash de contraseña
        usando un algoritmo de hash de unico sentido*/
    ]);

    /*Flashdata funciona solo en redirigir la funcion 
    en el controlador en la vista de carga.*/

    session()->setFlashdata('success','usuario registrado con exito');
    return $this -> response->redirect('/login');

        }
    }

}

