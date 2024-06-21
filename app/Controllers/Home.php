<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo View('front/head_view');
        echo View('front/navbar_view');
        echo View('front/principal');
        echo View('front/footer_view');
    }

    public function quienes_somos()
    {
        echo View('front/head_view');
        echo View('front/navbar_view');
        echo View('front/quienes_somos');
        echo View('front/footer_view');
    }

    public function acerca_de()
    {
        echo View('front/head_view');
        echo View('front/navbar_view');
        echo View('front/acerca_de');
        echo View('front/footer_view');
    }

    public function registro()
    {
        echo View('front/head_view');
        echo View('front/navbar_view');
        echo View('front/registro');
        echo View('front/footer_view');
    }

    public function login()
    {
        echo View('front/head_view');
        echo View('front/navbar_view');
        echo View('front/login');
        echo View('front/footer_view');
    }
}
