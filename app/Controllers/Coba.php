<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Ini Controller Coba method index by $this->name";
    }

    public function about($name = "marsel")
    {
        echo "Hallo $name Saya $this->name";
    }
}
