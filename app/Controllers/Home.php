<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'active' => 'bg-blue-300'
        ];
        return view('pages/hero', $data);
    }
}
