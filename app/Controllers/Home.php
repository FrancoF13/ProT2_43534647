<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pagina Principal';
        echo View('front/head_view', $data);
        echo View('front/navbar_view');
        echo View('front/principal');
        echo View('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo']='Quienes Somos';
        echo View('front/head_view', $data);
        echo View('front/navbar_view');
        echo View('front/quienes_somos');
        echo View('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo']='Acerca De';
        echo View('front/head_view', $data);
        echo View('front/navbar_view');
        echo View('front/acerca_de');
        echo View('front/footer_view');
    }

    public function registro()
    {
        $data['titulo']='Registro';
        echo View('front/head_view', $data);
        echo View('front/navbar_view');
        echo View('back/usuario/registro');
        echo View('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='Login';
        echo View('front/head_view', $data);
        echo View('front/navbar_view');
        echo View('back/usuario/login');
        echo View('front/footer_view');
    }
}
