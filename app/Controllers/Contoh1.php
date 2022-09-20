<?php

namespace App\Controllers;

class Contoh1 extends BaseController
{
    public function index()
    {
        echo"<h1>Perkenalan</h1>";
        echo"Nama saya Yohan
            Saya tinggal di daerah cibubur
            olahraga yang saya sukai adalah basket";
        // return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // ...
    }
}